@extends('layouts.landing-layout')

@section('content')
<!-- Main Quiz Container -->
<div class="flex flex-col items-center gap-12 w-full max-w-3xl p-5">

    <!-- Question 1 -->
    <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full text-center space-y-4">
        <h2 class="text-2xl font-bold uppercase mb-4">
            Anda biasanya berinteraksi dengan banyak orang, bahkan yang belum Anda kenal?
        </h2>
        <div class="flex flex-wrap justify-center gap-4">
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ced6354624a864f4910125135fed82d81192038df879c13dca5bcf52e21249f8?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Sangat Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Sangat Setuju</span>
            </div>
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/02676b2ab24d619e67025c85c7cb46cca5134d19750e6e73ca56ba151db79007?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Setuju</span>
            </div>
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0daedcd421a6719d8f0f845e2d64b0cf5c8b9bf9b55ce3794e1725c481ca2d5a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Tidak Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Tidak Setuju</span>
            </div>
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fc67f6141a42ca2463a686f83f74cd49390e12763c19f224e14a4dffeb104208?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Sangat Tidak Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Sangat Tidak Setuju</span>
            </div>
        </div>
    </div>

    <!-- Question 2 -->
    <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full text-center space-y-4">
        <h2 class="text-2xl font-bold uppercase mb-4">
            Apakah Anda merasa nyaman berada di lingkungan yang ramai?
        </h2>
        <div class="flex flex-wrap justify-center gap-4">
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ced6354624a864f4910125135fed82d81192038df879c13dca5bcf52e21249f8?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Sangat Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Sangat Setuju</span>
            </div>
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/02676b2ab24d619e67025c85c7cb46cca5134d19750e6e73ca56ba151db79007?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Setuju</span>
            </div>
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/0daedcd421a6719d8f0f845e2d64b0cf5c8b9bf9b55ce3794e1725c481ca2d5a?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Tidak Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Tidak Setuju</span>
            </div>
            <div
                class="bg-gray-800 border border-gray-500 w-28 h-40 flex flex-col items-center justify-center rounded-lg shadow-md cursor-pointer hover:bg-gray-700">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/fc67f6141a42ca2463a686f83f74cd49390e12763c19f224e14a4dffeb104208?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                    alt="Sangat Tidak Setuju" class="w-12 mb-2" />
                <span class="text-sm font-bold uppercase">Sangat Tidak Setuju</span>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <button
        class="bg-blue-600 text-white px-6 py-3 rounded-md font-bold hover:bg-blue-500 transition mt-4">Submit</button>
</div>
@endsection
