@extends('layouts.landing-layout')

@section('content')
<div class="flex flex-col items-center gap-12 w-full max-w-3xl p-5">
    <form action="{{ route('quiz.submit') }}" method="POST">
        @csrf

        @foreach($questions as $question)
        <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full text-center space-y-4 mt-10">
            <h2 class="text-2xl font-bold uppercase mb-4">
                {{ $question->pertanyaan }}
            </h2>
            <div class="flex flex-wrap justify-center gap-4">
                <label class="relative flex flex-col items-center justify-center w-28 h-40 p-4 rounded-lg shadow-md cursor-pointer border border-gray-500 hover:bg-gray-700 has-[:checked]:bg-indigo-500 has-[:checked]:ring-sky-200">
                    <input type="radio" name="responses[{{ $question->id }}]" value="4" required class="absolute opacity-0 cursor-pointer">
                    <span class="text-sm font-bold uppercase">Sangat Setuju</span>
                </label>

                <label class="relative flex flex-col items-center justify-center w-28 h-40 p-4 rounded-lg shadow-md cursor-pointer border border-gray-500 hover:bg-gray-700 has-[:checked]:bg-indigo-500 has-[:checked]:ring-sky-200">
                    <input type="radio" name="responses[{{ $question->id }}]" value="3" required class="absolute opacity-0 cursor-pointer">
                    <span class="text-sm font-bold uppercase">Setuju</span>
                </label>

                <label class="relative flex flex-col items-center justify-center w-28 h-40 p-4 rounded-lg shadow-md cursor-pointer border border-gray-500 hover:bg-gray-700 has-[:checked]:bg-indigo-500 has-[:checked]:ring-sky-200">
                    <input type="radio" name="responses[{{ $question->id }}]" value="2" required class="absolute opacity-0 cursor-pointer">
                    <span class="text-sm font-bold uppercase">Tidak Setuju</span>
                </label>

                <label class="relative flex flex-col items-center justify-center w-28 h-40 p-4 rounded-lg shadow-md cursor-pointer border border-gray-500 hover:bg-gray-700 has-[:checked]:bg-indigo-500 has-[:checked]:ring-sky-200">
                    <input type="radio" name="responses[{{ $question->id }}]" value="1" required class="absolute opacity-0 cursor-pointer">
                    <span class="text-sm font-bold uppercase">Sangat Tidak Setuju</span>
                </label>
            </div>
        </div>
        @endforeach

        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-md font-bold hover:bg-blue-500 transition mt-4">
            Submit
        </button>
    </form>
</div>
@endsection
