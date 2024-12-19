<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Question;
use App\Models\JobRecommendation;
use App\Models\User;



class AdminDashboardController extends Controller
{
    public function index()
    {
        $questionsCount = Question::count();
        $jobsCount = JobRecommendation::count();
        $usersCount = User::count();

        return view('dashboard', compact('questionsCount', 'jobsCount', 'usersCount'));
    }

    public function export()
    {
        $filename = 'backup-' . date('Y-m-d_H-i-s') . '.sql';
        $filePath = storage_path('app/' . $filename);

        // Ensure storage directory exists
        if (!is_dir(storage_path('app'))) {
            mkdir(storage_path('app'), 0755, true);
        }

        $command = sprintf(
            'mysqldump --user=%s --password=%s --host=%s %s > %s',
            escapeshellarg(env('DB_USERNAME')),
            escapeshellarg(env('DB_PASSWORD')),
            escapeshellarg(env('DB_HOST')),
            escapeshellarg(env('DB_DATABASE')),
            escapeshellarg($filePath)
        );

        exec($command, $output, $resultCode);

        if ($resultCode !== 0 || !file_exists($filePath)) {
            return redirect()->back()->with('error', 'Failed to generate database backup file. Please check your mysqldump configuration.');
        }

        return response()->download($filePath)->deleteFileAfterSend(true);
    }

    public function import(Request $request)
    {
        $request->validate([
            'database_file' => [
                'required',
                'file',
                function ($attribute, $value, $fail) {
                    if ($value->getClientOriginalExtension() !== 'sql') {
                        $fail('The database file must have a .sql extension.');
                    }
                },
            ],
        ]);

        $filePath = $request->file('database_file')->storeAs('database', 'import.sql');

        $absolutePath = storage_path('app/' . $filePath);

        if (!file_exists($absolutePath)) {
            return redirect()->back()->with('error', 'Uploaded file not found.');
        }

        $command = sprintf(
            'mysql --user=%s --password=%s --host=%s %s < %s',
            escapeshellarg(env('DB_USERNAME')),
            escapeshellarg(env('DB_PASSWORD')),
            escapeshellarg(env('DB_HOST')),
            escapeshellarg(env('DB_DATABASE')),
            escapeshellarg($absolutePath)
        );

        exec($command, $output, $resultCode);

        if ($resultCode !== 0) {
            return redirect()->back()->with('error', 'Failed to restore database. Please check your mysql configuration.');
        }

        return redirect()->back()->with('success', 'Database restored successfully.');
    }

}
