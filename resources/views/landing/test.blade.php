@extends('layouts.landing-layout')

@section('content')

<!-- Main Content -->
<div class="flex justify-center items-center min-h-screen text-center max-w-3xl mt-20 object-center">
    <div class="w-full">
        <h1 class="text-5xl font-bold uppercase mb-5">Take the <span class="text-blue-500">MBTI</span> Test</h1>
        <p class="text-lg leading-relaxed text-gray-400 mb-10">
            Selamat datang di tes MBTI (Myers-Briggs Type Indicator) kami! Tes ini dirancang untuk membantu Anda
            memahami
            tipe kepribadian Anda dengan lebih baik, sehingga Anda dapat menemukan jalur karier yang paling sesuai
            dengan
            kekuatan dan preferensi pribadi Anda.
        </p>

        <!-- Info Box -->
        <div
            class="bg-gray-900 border border-gray-700 rounded-lg p-5 max-w-2xl text-left text-gray-300 mb-5 mt-60 mx-auto">
            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-white mb-2">How does this test work?</h2>
                <p class="text-base text-gray-400">
                    Tes MBTI terdiri dari serangkaian pertanyaan yang mengeksplorasi cara Anda berpikir, membuat
                    keputusan,
                    dan berinteraksi dengan dunia di sekitar Anda. Berdasarkan jawaban Anda, kami akan mengidentifikasi
                    tipe
                    kepribadian MBTI Anda dari 16 tipe yang tersedia, seperti INTJ, ESFJ, dan lainnya.
                </p>
                <p class="text-base text-gray-400">
                    <strong class="text-white">Langkah-langkah Mengikuti Tes:</strong><br>
                    1. Jawab Pertanyaan – Tes ini terdiri dari 40 pertanyaan singkat. Cukup pilih jawaban yang
                    paling menggambarkan diri Anda.<br>
                    2. Dapatkan Hasil – Setelah menyelesaikan tes, Anda akan langsung mendapatkan tipe kepribadian MBTI
                    Anda.<br>
                    3. Terima Rekomendasi Karier – Berdasarkan hasil MBTI Anda, kami akan merekomendasikan jalur karier
                    yang
                    sesuai dengan kepribadian dan preferensi Anda.
                </p>
                <p class="text-base text-gray-400">
                    <strong class="text-white">Why is this test important?</strong><br>
                    Memahami kepribadian Anda adalah langkah pertama dalam merencanakan masa depan karier yang sukses.
                    Tes
                    MBTI ini memungkinkan Anda untuk:
                    <ul class="list-disc list-inside">
                        <li>Mengetahui kekuatan dan area perkembangan Anda.</li>
                        <li>Menemukan pekerjaan yang benar-benar sesuai dengan diri Anda.</li>
                        <li>Mengambil langkah yang tepat untuk mencapai kesuksesan karier yang memuaskan.</li>
                    </ul>
                </p>
            </div>
        </div>

        <!-- Start Button Outside the Info Box -->
        <button onclick="window.location.href='{{ route('quiz.take') }}'"
            class="inline-block px-6 py-1 text-lg font-bold text-white bg-purple-700 rounded-lg hover:bg-purple-500 transition duration-300 ">
            Mulai
        </button>

    </div>
</div>

@endsection
