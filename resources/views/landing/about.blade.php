@extends('layouts.landing-layout')

@section('content')
<!-- About Section -->
    <section class="flex flex-col items-center p-5 max-w-5xl">
      <h2 class="text-4xl font-bold uppercase mb-5 text-center">About Us</h2>
      <p class="text-gray-400 text-lg leading-relaxed text-center max-w-3xl mb-10">
        MBCR (Myers-Briggs Career Recommendation) hadir untuk membantu Anda
        menemukan karir yang sesuai dengan kepribadian Anda melalui tes
        kepribadian MBTI (Myers-Briggs Type Indicator). Dengan rekomendasi karir
        yang dipersonalisasi berdasarkan gaya berpikir, kekuatan, dan preferensi
        unik Anda, kami percaya bahwa pemahaman diri adalah kunci menuju karir
        yang memuaskan. Platform ini menyediakan tes MBTI interaktif,
        rekomendasi karir yang relevan, serta fitur pelacakan hasil yang
        memudahkan pengguna untuk menavigasi pilihan karir mereka. Temukan karir
        impian Anda bersama MBCR dan raih masa depan yang lebih cerah dan penuh
        potensi!
      </p>

      <!-- Team Section -->
      <h3 class="text-pink-400 uppercase text-2xl font-bold my-8">Our Team</h3>
      <div class="flex flex-wrap gap-6 justify-center max-w-3xl">
        <!-- Team Member Card -->
        <div class="bg-gray-900 shadow-lg rounded-lg p-5 flex flex-col items-center w-48 text-center">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f31570eee62bd982be626d2b2c34a9dd4701c059a42386deed93cbace17d348?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
            alt="M. Prayoga Putra S"
            class="w-24 h-24 rounded-full mb-4 object-cover"
          />
          <h4 class="text-lg font-semibold">M. Prayoga Putra S</h4>
          <p class="text-gray-400 text-sm">BackEnd Developer</p>
        </div>

        <div class="bg-gray-900 shadow-lg rounded-lg p-5 flex flex-col items-center w-48 text-center">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/06083c8ec8c11ea56a1cef773e6db3ec4006cb34c6a5d9ff15e9b662350b17fe?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
            alt="Isnaini Nur Fadhilah"
            class="w-24 h-24 rounded-full mb-4 object-cover"
          />
          <h4 class="text-lg font-semibold">Isnaini Nur Fadhilah</h4>
          <p class="text-gray-400 text-sm">FrontEnd Developer</p>
        </div>

        <div class="bg-gray-900 shadow-lg rounded-lg p-5 flex flex-col items-center w-48 text-center">
          <img
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/06083c8ec8c11ea56a1cef773e6db3ec4006cb34c6a5d9ff15e9b662350b17fe?placeholderIfAbsent=true&apiKey=d95a0cee8ce84bfc9d5346e2cc150f38"
            alt="Erwan Rahmansyah"
            class="w-24 h-24 rounded-full mb-4 object-cover"
          />
          <h4 class="text-lg font-semibold">Erwan Rahmansyah</h4>
          <p class="text-gray-400 text-sm">Designer</p>
        </div>
      </div>
    </section>
    @endsection

