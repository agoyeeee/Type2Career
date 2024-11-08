<!DOCTYPE html>
<html lang="en">

<head>
    <title>T2C</title>
    @include('template.head')
</head>

<body id="page-top" class="bg-black text-white flex flex-col min-h-screen">
    <!-- Topbar -->
    @include('components-landing.navbar')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="bg-black flex-grow flex items-center justify-center w-full mt-20 p-4">
        <!-- Decorative Images Outside the Box -->
        <img src="{{ asset('assets/Cube8.png') }}" alt="Left Decorative Image"
            class="absolute top-20 left-5 w-30 h-auto">
        <img src="{{ asset('assets/Cube4.png') }}" alt="Right Decorative Image"
            class="absolute top-20 right-5 w-30 h-auto">

        @yield('content')
    </div>
    <!-- End Page Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('template.script')
</body>

</html>
