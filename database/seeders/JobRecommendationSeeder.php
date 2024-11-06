<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobRecommendation;

class JobRecommendationSeeder extends Seeder
{
    public function run()
    {
        JobRecommendation::create([
            'mbti_type_id' => 1, // pastikan ini sesuai dengan ID yang ada di tabel mbti_types
            'job_title' => 'Software Engineer',
            'job_description' => 'Responsible for developing software solutions for various clients.',
        ]);

        JobRecommendation::create([
            'mbti_type_id' => 2,
            'job_title' => 'Project Manager',
            'job_description' => 'Oversee project planning, implementation, and tracking.',
        ]);

        // Tambahkan data lainnya jika diperlukan
    }
}
