<?php

namespace App\Http\Controllers;

use App\Models\JobRecommendation;
use App\Models\MBTIType;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobRecommendation::with('mbtiType')->get(); // Eager load relasi mbtiType
        $mbtiTypes = MBTIType::all();
        return view('job', compact('jobs', 'mbtiTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mbti_type_id' => 'required|integer',
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
        ]);

        JobRecommendation::create([
            'mbti_type_id' => $request->mbti_type_id,
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
        ]);

        return redirect()->route('job.index')->with('success', 'Rekomendasi pekerjaan berhasil ditambahkan.');
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'mbti_type_id' => 'required|integer',
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
        ]);

        $job = JobRecommendation::findOrFail($id);
        $job->update([
            'mbti_type_id' => $request->mbti_type_id,
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
        ]);

        return redirect()->route('job.index')->with('success', 'Rekomendasi pekerjaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $job = JobRecommendation::findOrFail($id);
        $job->delete();

        return redirect()->route('job.index')->with('success', 'Rekomendasi pekerjaan berhasil dihapus.');
    }
}
