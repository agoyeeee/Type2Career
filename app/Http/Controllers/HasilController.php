<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;


class HasilController extends Controller
{
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
        return view('hasil', [
            'mbtiType' => $quizResult->mbti_type,
            'quizResult' => $quizResult,
        ]);
    }

}
