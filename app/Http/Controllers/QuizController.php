<?php

namespace App\Http\Controllers;

use App\Models\QuizResponse;
use App\Models\QuizResult;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function takeQuiz()
    {
        // Mengambil semua pertanyaan dari database
        $questions = Question::all();
        return view('landing/quiz', compact('questions'));
    }

    public function showQuizResult()
{
    $user = auth()->user();

    // Ambil hasil MBTI dari database berdasarkan user
    $quizResult = QuizResult::where('user_id', $user->id)->latest()->first();

    // Periksa apakah hasil kuis ditemukan
    if (!$quizResult) {
        return redirect()->route('quiz')->with('error', 'Hasil kuis tidak ditemukan. Silakan ambil kuis terlebih dahulu.');
    }

    // Kirim data ke view
    return view('landing/hasil', [
        'mbtiType' => $quizResult->mbti_type,
        'quizResult' => $quizResult,
    ]);
}


    public function submitQuiz(Request $request)
    {
        $user = auth()->user();

        // Validasi input
        $request->validate([
            'responses' => 'required|array',
            'responses.*' => 'required|integer|in:1,2,3,4',
        ]);

        $responses = $request->input('responses');

        // Simpan jawaban kuis ke database
        foreach ($responses as $question_id => $answer) {
                QuizResponse::create([
                    'user_id' => $user->id,
                    'question_id' => $question_id,
                    'answer' => $answer,
                ]);
        }

        // Hitung tipe MBTI
        $mbtiType = $this->calculateMbtiType($responses);

        // Simpan hasil kuis
        QuizResult::create([
            'user_id' => $user->id,
            'mbti_type' => $mbtiType,
        ]);

        return redirect()->route('quiz.result');
    }

    private function calculateMbtiType($responses)
{
    // Skor untuk masing-masing jawaban
    $scores = [
        1 => -2,  // 'Sangat Tidak Setuju'
        2 => -1,  // 'Tidak Setuju'
        3 => 1,   // 'Setuju'
        4 => 2    // 'Sangat Setuju'
    ];

    // Inisialisasi skor dimensi MBTI
    $scoresByDimension = [
        'I/E' => 0,
        'S/N' => 0,
        'T/F' => 0,
        'J/P' => 0
    ];

    // Loop untuk menghitung skor
    foreach ($responses as $question_id => $answer) {
        // Pastikan kita hanya menghitung jika kunci ada di responses
        $question = Question::find($question_id);
        if ($question && isset($scores[$answer])) {
            $dimensi = $question->dimensi; // Ambil dimensi MBTI dari pertanyaan
            if (array_key_exists($dimensi, $scoresByDimension)) {
                $scoresByDimension[$dimensi] += $scores[$answer];
            }
        }
    }

    // Tentukan tipe MBTI
    $mbtiType = '';
    $mbtiType .= $scoresByDimension['I/E'] < 0 ? 'I' : 'E';
    $mbtiType .= $scoresByDimension['S/N'] < 0 ? 'S' : 'N';
    $mbtiType .= $scoresByDimension['T/F'] < 0 ? 'T' : 'F';
    $mbtiType .= $scoresByDimension['J/P'] < 0 ? 'J' : 'P';

    return $mbtiType;
}
}
