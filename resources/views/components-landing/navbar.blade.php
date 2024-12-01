<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">
    <nav class="flex justify-between items-center py-7 px-10 bg-black">
        <!-- Logo -->
        <button onclick="window.location.href='{{ route('landing') }}'"
            class="text-2xl font-bold uppercase">TYPE<span class="text-blue-400 text-4xl italic">2</span>CAREER</button>

        <!-- Hamburger Menu Button -->
        <div class="flex md:hidden">
            <button id="hamburgerButton" class="text-gray-400 text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Menu Links (Visible on larger screens) -->
        <div class="flex space-x-5 ml-auto pr-5 hidden md:flex">
            <button onclick="window.location.href='{{ route('landing') }}'"
                class="text-gray-400 border-b-4 border-transparent hover:border-gray-800 text-lg focus:outline-none px-4 py-2 rounded-md transition-colors">
                Home
            </button>
            <button onclick="window.location.href='{{ route('career') }}'"
                class="text-gray-400 border-b-4 border-transparent hover:border-gray-800 text-lg focus:outline-none px-4 py-2 rounded-md transition-colors">
                Career Insight
            </button>
            <button onclick="window.location.href='{{ route('test') }}'"
                class="text-gray-400 border-b-4 border-transparent hover:border-gray-800 text-lg focus:outline-none px-4 py-2 rounded-md transition-colors">
                Test
            </button>
            <button onclick="window.location.href='{{ route('about') }}'"
                class="text-gray-400 border-b-4 border-transparent hover:border-gray-800 text-lg focus:outline-none px-4 py-2 rounded-md transition-colors">
                About Us
            </button>
        </div>

        <!-- Profile Section -->
        <div class="flex items-center space-x-4 ml-auto">
            @auth
            <div class="relative">
                <button id="profileButton"
                    class="text-gray-400 text-lg focus:outline-none px-4 py-2 rounded-md transition-colors">
                    <img src="{{ asset('assets/profile.png') }}" alt="Profile" class="w-12 h-12 rounded-full">
                </button>
                <div id="profileMenu"
                    class="absolute right-0 mt-2 w-48 bg-white text-black rounded-md shadow-lg hidden z-10">
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                        @csrf
                        <button type="submit"
                            class="block w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
            @else
            <button onclick="window.location.href='{{ route('login') }}'"
                class="px-4 py-2 border border-blue-500 rounded-md text-blue-500 hover:bg-blue-500 hover:text-white transition-colors">
                Login
            </button>
            @endauth
        </div>
    </nav>

    <!-- Modal Konfirmasi Logout -->
    <div id="logoutModal"
        class="fixed inset-0 backdrop-blur-sm bg-white/30 hidden flex justify-center items-center z-50 min-h-screen">
        <div class="bg-white p-6 rounded-md w-96 text-center">
            <h3 class="text-xl text-black font-semibold mb-4">Are you sure you want to log out?</h3>
            <div class="flex justify-between">
                <button id="cancelLogout"
                    class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700">Cancel</button>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    @csrf
                    <button type="submit"
                        class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sidebar (for mobile view) -->
    <div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-75 z-40 hidden">
        <div class="flex flex-col items-center justify-center py-10">
            <button onclick="window.location.href='{{ route('landing') }}'"
                class="text-gray-400 text-lg py-2">Home</button>
            <button onclick="window.location.href='{{ route('career') }}'"
                class="text-gray-400 text-lg py-2">Career Insight</button>
            <button onclick="window.location.href='{{ route('test') }}'"
                class="text-gray-400 text-lg py-2">Test</button>
            <button onclick="window.location.href='{{ route('about') }}'"
                class="text-gray-400 text-lg py-2">About Us</button>
            <button onclick="window.location.href='{{ route('login') }}'"
                class="text-gray-400 text-lg py-2">Login</button>
        </div>
    </div>

    <script>
        // Menangani tampilan menu dropdown profil
        const profileButton = document.getElementById("profileButton");
        const profileMenu = document.getElementById("profileMenu");

        profileButton.addEventListener("click", function () {
            profileMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function (event) {
            if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
                profileMenu.classList.add("hidden");
            }
        });

        // Menangani tampilan hamburger menu
        const hamburgerButton = document.getElementById("hamburgerButton");
        const mobileMenu = document.getElementById("mobileMenu");

        hamburgerButton.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });

        // Menutup menu mobile ketika klik di luar menu
        document.addEventListener("click", function (event) {
            if (!hamburgerButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add("hidden");
            }
        });
    </script>
</body>

</html>
