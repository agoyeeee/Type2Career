<!DOCTYPE html>
<html lang="en">

<head>
    <title>T2C</title>
    @include('template.head')

    <!-- Tambahkan CSS untuk smooth scroll -->
    <style>
        /* CSS untuk smooth scroll di seluruh halaman */
        html {
            scroll-behavior: smooth;
        }

        /* Button Scroll to Top */
        .scroll-to-top {
            position: fixed;
            bottom: 2rem;  /* Posisi dari bawah */
            right: 2rem;   /* Posisi dari kanan */
            background-color: #4B5563;  /* Warna latar belakang */
            width: 40px;   /* Lebar tombol */
            height: 40px;  /* Tinggi tombol */
            border-radius: 50%; /* Membuat tombol menjadi lingkaran */
            display: flex;
            align-items: center;  /* Mengatur ikon agar berada di tengah */
            justify-content: center;  /* Mengatur ikon agar berada di tengah */
            color: white;
            font-size: 1.5rem;  /* Ukuran ikon */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
            opacity: 0; /* Tombol disembunyikan secara default */
            z-index: 1000;
            transition: opacity 0.3s ease; /* Efek transisi saat muncul atau menghilang */
        }

        .scroll-to-top:hover {
            background-color: #6B7280;  /* Warna saat hover */
        }

        .scroll-to-top.show {
            opacity: 1; /* Menampilkan tombol dengan transisi */
        }
    </style>
</head>

<body id="page-top" class="bg-black text-white flex flex-col min-h-screen">
    <!-- Topbar -->
    @include('components-landing.navbar')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="bg-black flex-grow flex items-center justify-center w-full mt-20 p-4">
        <!-- Decorative Images Outside the Box -->
        <img src="{{ asset('assets/Cube8.png') }}" alt="Left Decorative Image"
            class="absolute top-40 left-5 w-24 md:w-30 lg:w-40 h-auto">
        <img src="{{ asset('assets/Cube4.png') }}" alt="Right Decorative Image"
            class="absolute top-40 right-0 w-24 md:w-30 lg:w-40 h-auto">

        @yield('content')
    </div>
    <!-- End Page Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>  <!-- Ikon panah ke atas -->
    </a>
        <!-- Topbar -->
        {{-- @include('components-landing.footer') --}}
        <!-- End of Topbar -->

    @include('template.script')

    <script>
        // Dapatkan tombol scroll-to-top
        const scrollToTopButton = document.querySelector('.scroll-to-top');

        // Fungsi untuk menangani scroll event
        window.addEventListener('scroll', function () {
            // Jika scroll lebih dari 100px dari atas, tampilkan tombol
            if (window.scrollY > 100) {
                scrollToTopButton.classList.add('show');  // Menambahkan kelas show untuk menampilkan tombol
            } else {
                scrollToTopButton.classList.remove('show');  // Menyembunyikan tombol jika scroll kurang dari 100px
            }
        });

        // Event listener untuk klik pada tombol scroll ke atas
        scrollToTopButton.addEventListener('click', function (e) {
            e.preventDefault(); // Mencegah aksi default untuk scroll biasa

            // Melakukan smooth scroll menggunakan JavaScript
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth' // Ini adalah efek smooth scroll
            });
        });
    </script>
</body>

</html>
