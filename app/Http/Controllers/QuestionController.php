<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Menampilkan daftar question.
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions', compact('questions'));
    }

    /**
     * Menyimpan pertanyaan baru ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required|string',
            'dimensi' => 'required|string',
        ]);

        Question::create($request->all());

        return redirect()->route('question.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit pertanyaan di modal (data dikirim melalui JavaScript).
     */
    public function edit(Question $question)
    {
        return response()->json($question);
    }

    /**
     * Memperbarui pertanyaan di database.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pertanyaan' => 'required|string',
            'dimensi' => 'required|string',
        ]);

        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('question.index')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    /**
     * Menghapus pertanyaan dari database.
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('question.index')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
