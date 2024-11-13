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
        <div class="text-2xl font-bold uppercase">TYPE<span class="text-blue-400 text-4xl italic">2</span>CAREER</div>
        <div class="flex space-x-5 ml-auto pr-5">
            <!-- Menu links -->
            <a href="{{ route('landing') }}" class="text-gray-400 hover:text-white text-lg">Home</a>
            <a href="{{ route('career') }}" class="text-gray-400 hover:text-white text-lg">Career Insight</a>
            <a href="{{ route('test') }}" class="text-gray-400 hover:text-white text-lg">Test</a>
            <a href="{{ route('about') }}" class="text-gray-400 hover:text-white text-lg">About Us</a>
        </div>

        <!-- Jika sudah login, tampilkan tombol Logout -->
        @auth
            <button id="logoutButton" class="px-4 py-2 border border-red-500 rounded-md text-red-500 hover:bg-red-500 hover:text-white transition-colors">
                Logout
            </button>
        @else
            <a href="{{ route('login') }}" class="px-4 py-2 border border-blue-500 rounded-md text-blue-500 hover:bg-blue-500 hover:text-white transition-colors">
                Login
            </a>
        @endauth
    </nav>

    <!-- Modal Konfirmasi Logout -->
    <div id="logoutModal" class="fixed inset-0 backdrop-blur-sm bg-white/30 hidden flex justify-center items-center z-50 min-h-screen">
        <div class="bg-white p-6 rounded-md w-96 text-center">
            <h3 class="text-xl text-black font-semibold mb-4">Are you sure you want to log out?</h3>
            <div class="flex justify-between">
                <button id="cancelLogout" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700">Cancel</button>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    @csrf
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700">Logout</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        // Mendapatkan elemen-elemen yang diperlukan
        const logoutButton = document.getElementById("logoutButton");
        const logoutModal = document.getElementById("logoutModal");
        const cancelLogout = document.getElementById("cancelLogout");

        // Menampilkan modal konfirmasi saat tombol logout diklik
        logoutButton.addEventListener("click", function() {
            logoutModal.classList.remove("hidden");
        });

        // Menutup modal jika tombol Cancel diklik
        cancelLogout.addEventListener("click", function() {
            logoutModal.classList.add("hidden");
        });
    </script>
</body>

</html>
