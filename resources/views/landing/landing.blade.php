@extends('layouts.landing-layout')

@section('content')

<body class="bg-black text-white min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-grow flex items-center justify-center relative">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-radial from-transparent via-gray-800 to-black"></div>

        <!-- Central Content -->
        <div class="relative text-center max-w-2xl p-8 text-gray-300">
            <!-- T2C Title -->
            <div class="flex justify-center space-x-2 text-8xl font-extrabold text-white mb-20">
                <span class="px-5">T</span>
                <span class="px-5 text-blue-400">2</span>
                <span class="px-5">C</span>
            </div>

            <!-- Description -->
            <p class="text-lg leading-relaxed text-gray-400 mb-8">
                Connect your MBTI personality type with a suitable career. Take the test,
                discover your strengths, and get the right job recommendations. Start a
                career journey that matches your potential today!
            </p>

            <!-- Take Test Button -->
            <button onclick="window.location.href='{{ route('test') }}'"
                class="inline-block px-5 py-2 text-lg mt-3 font-semibold text-white rounded-md transition ease-in-out delay-150 bg-blue-700 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">
                Take Test
            </button>

        </div>
    </div>


</body>

@endsection
