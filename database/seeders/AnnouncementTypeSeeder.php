<?php

namespace Database\Seeders;

use App\Models\AnnouncementType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Evlilik',
                'slug' => 'evlilik',
                'default_content' => 'Evlilik ilanı',
            ],
            [
                'name' => 'Doğum',
                'slug' => 'dogum',
                'default_content' => 'Doğum ilanı',
            ],
            [
                'name' => 'Vefat',
                'slug' => 'vefat',
                'default_content' => 'Vefat ilanı',
            ],
            [
                'name' => 'Diğer',
                'slug' => 'diger',
                'default_content' => 'Diğer ilan',
            ],
        ];

        AnnouncementType::insert($types);
    }
}
