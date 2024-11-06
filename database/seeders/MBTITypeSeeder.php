<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MBTIType;

class MBTITypeSeeder extends Seeder
{
    public function run()
    {
        $mbtiTypes = [
            ['type_code' => 'INTJ', 'description' => 'Arsitek – Pemikir imajinatif dan strategis, selalu memiliki rencana untuk segala sesuatu.'],
            ['type_code' => 'INTP', 'description' => 'Ahli Logika – Penemu inovatif dengan hasrat tak terpuaskan untuk pengetahuan.'],
            ['type_code' => 'ENTJ', 'description' => 'Komandan – Pemimpin yang berani, imajinatif, dan berkemauan kuat, selalu menemukan jalan atau menciptakannya.'],
            ['type_code' => 'ENTP', 'description' => 'Pendebat – Pemikir cerdas dan ingin tahu yang tidak bisa menolak tantangan intelektual.'],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        foreach ($mbtiTypes as $type) {
            MBTIType::create($type);
        }
    }
}
