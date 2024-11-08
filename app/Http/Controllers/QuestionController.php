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
        $request->validate([
            'pertanyaan' => 'required',
            'dimensi' => 'required',
        ]);

        Question::create([
            'pertanyaan' => $request->pertanyaan,
            'dimensi' => $request->dimensi,
        ]);

        return redirect()->route('question.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'dimensi' => 'required',
        ]);

        $question = Question::findOrFail($id);
        $question->update([
            'pertanyaan' => $request->pertanyaan,
            'dimensi' => $request->dimensi,
        ]);

        return redirect()->route('question.index')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('question.index')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
