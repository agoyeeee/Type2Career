<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobRecommendation;

class JobRecommendationSeeder extends Seeder
{
    public function run()
    {
        $jobRecommendations = [
            // ISTJ
            ['mbti_type_id' => 1, 'job_title' => 'Akuntan', 'job_description' => 'Bertanggung jawab atas catatan keuangan dan kepatuhan.'],
            ['mbti_type_id' => 1, 'job_title' => 'Auditor', 'job_description' => 'Memastikan akurasi dan integritas laporan keuangan.'],
            ['mbti_type_id' => 1, 'job_title' => 'Manajer Logistik', 'job_description' => 'Mengelola rantai pasokan dan memastikan pengiriman tepat waktu.'],
            ['mbti_type_id' => 1, 'job_title' => 'Insinyur Sipil', 'job_description' => 'Merancang dan mengawasi proyek konstruksi.'],

            // ISFJ
            ['mbti_type_id' => 2, 'job_title' => 'Perawat', 'job_description' => 'Memberikan perawatan pasien dan bantuan medis.'],
            ['mbti_type_id' => 2, 'job_title' => 'Pekerja Sosial', 'job_description' => 'Mendukung individu dan keluarga yang membutuhkan.'],
            ['mbti_type_id' => 2, 'job_title' => 'Pustakawan', 'job_description' => 'Mengelola sumber daya perpustakaan dan membantu pengunjung.'],
            ['mbti_type_id' => 2, 'job_title' => 'Customer Service Representative', 'job_description' => 'Membantu pelanggan dengan pertanyaan dan solusi.'],

            // INFJ
            ['mbti_type_id' => 3, 'job_title' => 'Konselor', 'job_description' => 'Membantu klien meningkatkan kesejahteraan mental dan emosional.'],
            ['mbti_type_id' => 3, 'job_title' => 'Psikolog', 'job_description' => 'Mempelajari dan mengobati masalah kesehatan mental.'],
            ['mbti_type_id' => 3, 'job_title' => 'Penulis', 'job_description' => 'Membuat konten tertulis yang menarik dan bermakna.'],
            ['mbti_type_id' => 3, 'job_title' => 'Pekerja Kemanusiaan', 'job_description' => 'Menangani masalah sosial dan memberikan dukungan masyarakat.'],

            // INTJ
            ['mbti_type_id' => 4, 'job_title' => 'Data Scientist', 'job_description' => 'Menganalisis data dan memberikan wawasan yang dapat ditindaklanjuti.'],
            ['mbti_type_id' => 4, 'job_title' => 'Arsitek Perangkat Lunak', 'job_description' => 'Merancang dan mengawasi sistem perangkat lunak.'],
            ['mbti_type_id' => 4, 'job_title' => 'Perencana Strategis', 'job_description' => 'Mengembangkan strategi bisnis jangka panjang.'],
            ['mbti_type_id' => 4, 'job_title' => 'Bankir Investasi', 'job_description' => 'Memberikan saran keuangan dan layanan investasi.'],

            // ISTP
            ['mbti_type_id' => 5, 'job_title' => 'Insinyur Mesin', 'job_description' => 'Merancang dan memelihara sistem mekanis.'],
            ['mbti_type_id' => 5, 'job_title' => 'Pilot', 'job_description' => 'Mengoperasikan dan menavigasi pesawat.'],
            ['mbti_type_id' => 5, 'job_title' => 'Ilmuwan Forensik', 'job_description' => 'Menyelidiki bukti untuk kasus kriminal.'],
            ['mbti_type_id' => 5, 'job_title' => 'Tukang Kayu', 'job_description' => 'Membuat dan memperbaiki struktur kayu dan perabotan.'],

            // ISFP
            ['mbti_type_id' => 6, 'job_title' => 'Desainer Grafis', 'job_description' => 'Membuat konten visual untuk berbagai platform.'],
            ['mbti_type_id' => 6, 'job_title' => 'Koki', 'job_description' => 'Mempersiapkan dan menciptakan hidangan inovatif.'],
            ['mbti_type_id' => 6, 'job_title' => 'Musisi', 'job_description' => 'Mengkomposisi dan menampilkan musik.'],
            ['mbti_type_id' => 6, 'job_title' => 'Desainer Interior', 'job_description' => 'Merancang ruang interior yang indah.'],

            // INFP
            ['mbti_type_id' => 7, 'job_title' => 'Penulis', 'job_description' => 'Mengekspresikan ide dan cerita melalui tulisan.'],
            ['mbti_type_id' => 7, 'job_title' => 'Terapis', 'job_description' => 'Mendukung klien melalui tantangan emosional.'],
            ['mbti_type_id' => 7, 'job_title' => 'Guru Seni', 'job_description' => 'Menginspirasi siswa melalui ekspresi seni.'],
            ['mbti_type_id' => 7, 'job_title' => 'Manajer Nonprofit', 'job_description' => 'Memimpin organisasi yang fokus pada kebaikan sosial.'],

            // INTP
            ['mbti_type_id' => 8, 'job_title' => 'Ilmuwan Peneliti', 'job_description' => 'Memajukan pengetahuan melalui penelitian ilmiah.'],
            ['mbti_type_id' => 8, 'job_title' => 'Pengembang Perangkat Lunak', 'job_description' => 'Mengembangkan solusi perangkat lunak yang inovatif.'],
            ['mbti_type_id' => 8, 'job_title' => 'Filsuf', 'job_description' => 'Menyelidiki pertanyaan mendasar tentang eksistensi.'],
            ['mbti_type_id' => 8, 'job_title' => 'Matematikawan', 'job_description' => 'Menyelesaikan masalah kompleks melalui teori matematika.'],

            // ESTP
            ['mbti_type_id' => 9, 'job_title' => 'Perwakilan Penjualan', 'job_description' => 'Membangun hubungan klien dan mendorong pendapatan.'],
            ['mbti_type_id' => 9, 'job_title' => 'Pengusaha', 'job_description' => 'Memulai dan mengelola usaha bisnis yang sukses.'],
            ['mbti_type_id' => 9, 'job_title' => 'Atlet', 'job_description' => 'Bersaing secara profesional di bidang olahraga.'],
            ['mbti_type_id' => 9, 'job_title' => 'Koordinator Acara', 'job_description' => 'Merencanakan dan mengeksekusi acara berskala besar.'],

            // ESFP
            ['mbti_type_id' => 10, 'job_title' => 'Aktor', 'job_description' => 'Memerankan peran di teater, film, atau televisi.'],
            ['mbti_type_id' => 10, 'job_title' => 'Pemandu Wisata', 'job_description' => 'Memimpin tur yang menarik untuk pengunjung.'],
            ['mbti_type_id' => 10, 'job_title' => 'Spesialis Hubungan Masyarakat', 'job_description' => 'Mengelola citra publik dan hubungan media.'],
            ['mbti_type_id' => 10, 'job_title' => 'Penari', 'job_description' => 'Menampilkan tarian ekspresif dan artistik.'],

            // ENFP
            ['mbti_type_id' => 11, 'job_title' => 'Spesialis Pemasaran', 'job_description' => 'Mengembangkan kampanye pemasaran kreatif.'],
            ['mbti_type_id' => 11, 'job_title' => 'Jurnalis', 'job_description' => 'Menyelidiki dan melaporkan kejadian terkini.'],
            ['mbti_type_id' => 11, 'job_title' => 'Pelatih Kehidupan', 'job_description' => 'Mengarahkan klien menuju pengembangan pribadi.'],
            ['mbti_type_id' => 11, 'job_title' => 'Pembuat Konten', 'job_description' => 'Membuat dan berbagi konten digital yang menarik.'],

            // ENTP
            ['mbti_type_id' => 12, 'job_title' => 'Pengusaha', 'job_description' => 'Membangun dan memimpin startup inovatif.'],
            ['mbti_type_id' => 12, 'job_title' => 'Konsultan', 'job_description' => 'Memberikan saran kepada organisasi tentang berbagai tantangan.'],
            ['mbti_type_id' => 12, 'job_title' => 'Eksekutif Periklanan', 'job_description' => 'Membuat kampanye iklan yang berdampak untuk merek.'],
            ['mbti_type_id' => 12, 'job_title' => 'Inovator', 'job_description' => 'Menciptakan solusi baru untuk masalah yang ada.'],

            // ESTJ
            ['mbti_type_id' => 13, 'job_title' => 'Manajer Proyek', 'job_description' => 'Memimpin proyek dari awal hingga selesai, memastikan efisiensi dan penyelesaian tepat waktu.'],
            ['mbti_type_id' => 13, 'job_title' => 'Manajer Operasional', 'job_description' => 'Mengawasi kegiatan operasional sehari-hari.'],
            ['mbti_type_id' => 13, 'job_title' => 'Manajer SDM', 'job_description' => 'Mengelola perekrutan, pelatihan, dan kesejahteraan karyawan.'],
            ['mbti_type_id' => 13, 'job_title' => 'Insinyur Perangkat Lunak', 'job_description' => 'Merancang dan mengembangkan sistem perangkat lunak.'],

            // ESFJ
            ['mbti_type_id' => 14, 'job_title' => 'Pengelola Acara', 'job_description' => 'Menyelenggarakan dan mengelola berbagai acara dan konferensi.'],
            ['mbti_type_id' => 14, 'job_title' => 'Guru', 'job_description' => 'Mengajar siswa di berbagai tingkat pendidikan.'],
            ['mbti_type_id' => 14, 'job_title' => 'Petugas Layanan Pelanggan', 'job_description' => 'Menyediakan dukungan pelanggan yang responsif dan berkualitas tinggi.'],
            ['mbti_type_id' => 14, 'job_title' => 'Pekerja Sosial', 'job_description' => 'Mendukung individu dan keluarga yang menghadapi tantangan hidup.'],

            // ENFJ
            ['mbti_type_id' => 15, 'job_title' => 'Pelatih Kepemimpinan', 'job_description' => 'Mengembangkan kemampuan kepemimpinan dalam individu dan organisasi.'],
            ['mbti_type_id' => 15, 'job_title' => 'Konselor Karir', 'job_description' => 'Memberikan saran dan dukungan untuk perkembangan karir.'],
            ['mbti_type_id' => 15, 'job_title' => 'Pengusaha Sosial', 'job_description' => 'Membangun organisasi yang berfokus pada solusi sosial.'],
            ['mbti_type_id' => 15, 'job_title' => 'Pembicara Motivasi', 'job_description' => 'Memberikan ceramah yang menginspirasi dan mendorong tindakan.'],

            // ENTJ
            ['mbti_type_id' => 16, 'job_title' => 'CEO', 'job_description' => 'Memimpin perusahaan dan menentukan arah strategisnya.'],
            ['mbti_type_id' => 16, 'job_title' => 'Manajer Umum', 'job_description' => 'Mengawasi seluruh operasi bisnis dan membuat keputusan utama.'],
            ['mbti_type_id' => 16, 'job_title' => 'Konsultan Strategis', 'job_description' => 'Memberikan solusi strategis kepada perusahaan besar.'],
            ['mbti_type_id' => 16, 'job_title' => 'Direktur Pemasaran', 'job_description' => 'Memimpin tim pemasaran untuk mengembangkan dan melaksanakan strategi pemasaran.']
        ];

        foreach ($jobRecommendations as $jobRecommendation) {
            JobRecommendation::create($jobRecommendation);
        }
    }
}
