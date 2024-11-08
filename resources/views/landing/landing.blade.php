@extends('layouts.landing-layout')

@section('content')

<body class="bg-black text-white min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-grow flex items-center justify-center relative">
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-radial from-transparent via-gray-800 to-black"></div>

        <!-- Left and Right Decorative Images -->
        <img src="{{ asset('assets/Cube8.png') }}"
            alt="Left Decorative Image"
            class="absolute top-1/3 left-5 w-150 h-150 transform -translate-y-1/2">
        <img src="{{ asset('assets/Cube4.png') }}"
            alt="Right Decorative Image"
            class="absolute top-1/3 right-5 w-150 h-150 transform -translate-y-1/2">

        <!-- Central Content -->
        <div class="relative text-center max-w-2xl p-8 text-gray-300">
            <!-- T2C Title -->
            <div class="flex justify-center space-x-2 text-6xl font-extrabold text-white mb-8">
                <span>T</span>
                <span>2</span>
                <span>C</span>
            </div>

            <!-- Description -->
            <p class="text-lg leading-relaxed text-gray-400 mb-8">
                Connect your MBTI personality type with a suitable career. Take the test,
                discover your strengths, and get the right job recommendations. Start a
                career journey that matches your potential today!
            </p>

            <!-- Take Test Button -->
            <a href="#"
                class="inline-block px-8 py-3 text-lg font-semibold text-white bg-gray-700 rounded-md hover:bg-gray-600 transition-transform transform hover:scale-105">Take
                Test</a>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="fixed bottom-5 right-5 bg-gray-700 p-2 rounded-full text-white" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Tailwind CSS for icons and script files -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

@endsection
