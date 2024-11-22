<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MBTIType;

class MBTITypeSeeder extends Seeder
{
    public function run()
    {
        $mbtiTypes = [
            ['type_code' => 'INTJ', 'description' => 'Pemikir imajinatif dan strategis, selalu memiliki rencana untuk segala sesuatu.'],
            ['type_code' => 'INTP', 'description' => 'Penemu inovatif dengan hasrat tak terpuaskan untuk pengetahuan.'],
            ['type_code' => 'ENTJ', 'description' => 'Pemimpin yang berani, imajinatif, dan berkemauan kuat, selalu menemukan jalan atau menciptakannya.'],
            ['type_code' => 'ENTP', 'description' => 'Pemikir cerdas dan ingin tahu yang tidak bisa menolak tantangan intelektual.'],
            ['type_code' => 'INFJ', 'description' => 'Pendukung yang tenang dan mistis, namun sangat menginspirasi dan tak kenal lelah.'],
            ['type_code' => 'INFP', 'description' => 'Orang yang puitis, baik hati, dan altruistik, selalu ingin membantu tujuan yang baik.'],
            ['type_code' => 'ENFJ', 'description' => 'Pemimpin karismatik dan inspiratif, mampu memikat pendengarnya.'],
            ['type_code' => 'ENFP', 'description' => 'Semangat bebas yang antusias, kreatif, dan suka bersosialisasi, selalu menemukan alasan untuk tersenyum.'],
            ['type_code' => 'ISTJ', 'description' => 'Praktis dan fakta, individu yang andal dan tekun dalam memenuhi kewajiban.'],
            ['type_code' => 'ISFJ', 'description' => 'Pelindung yang sangat berdedikasi dan hangat, selalu siap membela orang yang dicintai.'],
            ['type_code' => 'ESTJ', 'description' => 'Pengelola yang luar biasa, tak tergoyahkan dalam mengelola hal-hal atau orang-orang.'],
            ['type_code' => 'ESFJ', 'description' => 'Orang yang peduli, populer, dan suka membantu, selalu ingin memberikan kontribusi kepada kelompok.'],
            ['type_code' => 'ISTP', 'description' => 'Eksperimen berani dan praktis, menguasai semua jenis alat.'],
            ['type_code' => 'ISFP', 'description' => 'Seniman yang fleksibel dan mempesona, selalu siap untuk menjelajahi dan mengalami hal-hal baru.'],
            ['type_code' => 'ESTP', 'description' => 'Orang yang berani, langsung, dan energik, pandai menyelesaikan berbagai hal.'],
            ['type_code' => 'ESFP', 'description' => 'Penghibur spontan, energik, dan antusias—hidup tidak pernah membosankan bersama mereka.'],
        ];

        foreach ($mbtiTypes as $type) {
            MBTIType::create($type);
        }
    }
}
