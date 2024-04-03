<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'description' => 'Selamat datang di Desa Sukamanah, sebuah perjalanan ke arah keindahan alam dan kehidupan masyarakat yang kaya akan budaya dan tradisi. Terletak di kaki Gunung Gede Pangrango dan dikelilingi oleh pesona alam yang memukau, Desa Sukamanah merupakan sebuah permata tersembunyi di tengah-tengah kabupaten Cianjur.',
            'image' => 'about-us.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('abouts')->insert($data);
    }
}
