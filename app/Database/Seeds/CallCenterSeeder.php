<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CallCenterSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Ambulance',
                'caption' => 'Ambulance',
                'link' => 'tel:118',
                'image' => 'ambulance.png',
            ],
            [
                'name' => 'Bidan Desa',
                'caption' => 'Bidan Desa',
                'link' => 'tel:119',
                'image' => 'bidan-desa.png',
            ],
            [
                'name' => 'Babinsa',
                'caption' => 'Babinsa',
                'link' => 'tel:081234567890',
                'image' => 'babinsa.png',
            ],
            [
                'name' => 'Bhabinkamtibmas',
                'caption' => 'Bhabinkamtibmas',
                'link' => 'tel:081234567891',
                'image' => 'bhabinkamtibmas.png',
            ]
        ];

        $this->db->table('call_centers')->insertBatch($data);
    }
}
