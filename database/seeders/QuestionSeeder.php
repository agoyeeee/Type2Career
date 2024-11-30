<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            // I/E (Introversi vs. Ekstraversi)
            ['pertanyaan' => 'Saya lebih suka menghabiskan waktu sendirian untuk mengisi ulang energi saya.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati menghadiri acara sosial dan bertemu orang baru.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Obrolan ringan cepat membuat saya merasa lelah.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya merasa mudah memulai percakapan dengan orang asing.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya sering membutuhkan waktu tenang setelah hari yang sibuk.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya berkembang dalam lingkungan dengan interaksi yang konstan.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati percakapan mendalam satu lawan satu.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya merasa terenergi setelah berada di tengah keramaian.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya lebih suka bekerja di lingkungan yang tenang.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati menjadi pusat perhatian.', 'dimensi' => 'I/E', 'created_at' => now(), 'updated_at' => now()],

            // S/N (Sensing vs. Intuition)
            ['pertanyaan' => 'Saya mengandalkan detail praktis daripada ide abstrak.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya sering melihat pola dan hubungan yang mungkin terlewat oleh orang lain.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya mempercayai fakta dan data daripada spekulasi.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati brainstorming kemungkinan-kemungkinan untuk masa depan.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya fokus pada apa yang terjadi sekarang daripada kemungkinan masa depan.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya tertarik pada konsep-konsep teoretis.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya suka mengikuti prosedur dan pedoman yang telah ditetapkan.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya sering berpikir tentang apa yang "bisa terjadi" daripada apa yang "ada."', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya lebih suka bekerja dengan detail konkret.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati membayangkan skenario hipotetis.', 'dimensi' => 'S/N', 'created_at' => now(), 'updated_at' => now()],

            // T/F (Thinking vs. Feeling)
            ['pertanyaan' => 'Saya membuat keputusan berdasarkan logika daripada emosi.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya lebih memprioritaskan keharmonisan daripada efisiensi dalam pengaturan kelompok.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya nyaman dengan kritik konstruktif.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menghindari konflik untuk menjaga hubungan.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menghargai keadilan daripada perasaan pribadi.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya sering mempertimbangkan bagaimana keputusan mempengaruhi perasaan orang lain.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya mendekati masalah dengan pola pikir analitis.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya sangat terpengaruh oleh keadaan emosional orang lain.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya lebih memilih umpan balik objektif daripada penghiburan emosional.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya memprioritaskan kebutuhan orang ketika membuat keputusan.', 'dimensi' => 'T/F', 'created_at' => now(), 'updated_at' => now()],

            // J/P (Judging vs. Perceiving)
            ['pertanyaan' => 'Saya suka merencanakan hari saya sebelumnya.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya lebih suka menjaga opsi terbuka.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya merasa stres ketika rencana berubah secara mendadak.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati kegiatan spontan.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya merasa tidak nyaman dengan ketidakpastian dan ambiguitas.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya cepat beradaptasi dengan situasi yang tidak terduga.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya suka mengikuti jadwal.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya sering menunda-nunda dan bekerja terbaik di bawah tekanan.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menghargai struktur dan keteraturan di lingkungan kerja saya.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
            ['pertanyaan' => 'Saya menikmati menjelajahi jalur baru tanpa tujuan yang jelas.', 'dimensi' => 'J/P', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('questions')->insert($questions);
    }
}
