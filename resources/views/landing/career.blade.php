@extends('layouts.landing-layout')

@section('content')

<body class="bg-black text-white flex flex-col items-center p-5 relative">
    <!-- Main Content -->
    <div class="text-center max-w-4xl mt-20">
        <h1 class="text-5xl font-bold uppercase mb-5">Career <span class="text-pink-300">Insight</span></h1>
        <p class="text-lg text-gray-400 leading-relaxed mb-12">
            Selamat datang di Career Insights, tempat di mana Anda dapat menemukan panduan karier yang tepat berdasarkan
            tipe kepribadian MBTI Anda. Di sini, kami menyediakan berbagai artikel, tips, dan sumber daya yang dirancang
            untuk membantu Anda memahami dunia kerja dengan lebih baik, sesuai dengan kekuatan dan preferensi
            kepribadian Anda.
        </p>

        <div>
        <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full mt-60">
            <div class="space-y-16">

                <!-- Step 1 -->
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                    <div class="flex flex-col max-w-md">
                        <h2 class="text-2xl font-bold text-white mb-3">Temukan Karier yang Sesuai dengan Tipe
                            Kepribadian Anda</h2>
                        <p class="text-gray-400 text-base leading-relaxed mb-4">
                            Setiap tipe kepribadian memiliki kekuatan unik yang dapat bersinar dalam pekerjaan tertentu.
                            Dalam bagian ini, Anda akan menemukan panduan khusus untuk setiap tipe MBTI, membantu Anda
                            memahami karier apa yang paling cocok dan bagaimana cara mengembangkannya lebih lanjut.
                        </p>
                        <a href="#"
                            class="bg-blue-600 text-white px-5 py-2 rounded-md font-semibold hover:bg-blue-500 transition">More</a>
                    </div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6225816af9e62f1e8498643ec891e42d6d6b492ed1177421378ec2e11eff4d67?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                        alt="Ilustrasi menemukan karier sesuai kepribadian" class="w-30 h-auto md:w-40" />
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center gap-8 md:gap-12">
                    <div class="flex flex-col max-w-md">
                        <h2 class="text-2xl font-bold text-white mb-3">Tips Pengembangan Diri & Keterampilan</h2>
                        <p class="text-gray-400 text-base leading-relaxed mb-4">
                            Tidak hanya berhenti pada rekomendasi pekerjaan, kami juga memberikan tips untuk mengasah
                            keterampilan penting yang dibutuhkan dalam karier pilihan Anda. Mulai dari soft skills
                            seperti kepemimpinan dan komunikasi hingga hard skills yang spesifik untuk setiap bidang
                            pekerjaan.
                        </p>
                        <a href="#"
                            class="bg-blue-600 text-white px-5 py-2 rounded-md font-semibold hover:bg-blue-500 transition">More</a>
                    </div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c1872bc628bb9e266ecf3dc17ff20a23860862ba76d10cbcaeac2c820db4a870?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                        alt="Ilustrasi pengembangan diri dan keterampilan" class="w-30 h-auto md:w-40" />
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                    <div class="flex flex-col max-w-md">
                        <h2 class="text-2xl font-bold text-white mb-3">Wawasan dari Profesional</h2>
                        <p class="text-gray-400 text-base leading-relaxed mb-4">
                            Dapatkan wawasan dan tips langsung dari profesional berpengalaman di berbagai bidang.
                            Pelajari bagaimana mereka menggunakan kekuatan kepribadian mereka untuk mencapai puncak
                            karier dan mendapatkan kepuasan dari pekerjaan mereka.
                        </p>
                        <a href="#"
                            class="bg-blue-600 text-white px-5 py-2 rounded-md font-semibold hover:bg-blue-500 transition">More</a>
                    </div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/59ed0700c630abf648e66271db2a1fb33a348e7148cf5abfcd5e54de8bca390b?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
                        alt="Ilustrasi wawasan dari profesional" class="w-30 h-auto md:w-40" />
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
