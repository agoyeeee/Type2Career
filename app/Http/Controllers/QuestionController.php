<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        // Mengambil semua data pertanyaan dari database
        $questions = Question::all();
        return view('question', compact('questions'));
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'pertanyaan' => 'required',
            'dimensi' => 'required',
        ]);

        // Menyimpan data pertanyaan baru ke database
        Question::create([
            'pertanyaan' => $request->pertanyaan,
            'dimensi' => $request->dimensi,
        ]);

        return redirect()->route('question')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Mengambil data pertanyaan berdasarkan id untuk diedit
        $question = Question::findOrFail($id);
        return view('questions', compact('question'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'pertanyaan' => 'required',
            'dimensi' => 'required',
        ]);

        // Update data pertanyaan di database
        $question = Question::findOrFail($id);
        $question->update([
            'pertanyaan' => $request->pertanyaan,
            'dimensi' => $request->dimensi,
        ]);

        return redirect()->route('question')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Menghapus data pertanyaan dari database
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('question')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
