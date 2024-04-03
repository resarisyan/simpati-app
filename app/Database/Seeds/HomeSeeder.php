<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Desa Sukamanah Cianjur',
            'description' => 'Mari jelajahi keberagaman layanan dan potensi Desa Sukamanah, serta berpartisipasi aktif dalam membangun masa depan yang lebih baik untuk kita semua.',
            'caption' => 'Simpati',
            'image' => 'hero-bg.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('homes')->insert($data);
    }
}
