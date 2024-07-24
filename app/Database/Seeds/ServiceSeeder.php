<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'PELAYANAN ADMINDUK',
                'link' => 'https://play.google.com/store/apps/details?id=com.asqi.smartvillagemobile',
                'icon' => 'fas fa-id-card',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'SIMPELAKU',
                'link' => 'https://simpelaku.cianjurkab.go.id/auth/register',
                'icon' => 'fas fa-users',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'PRODESKEL',
                'link' => 'https://prodeskel.binapemdes.kemendagri.go.id/mpublik/',
                'icon' => 'fas fa-desktop',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'BANSOS KEMENSOS',
                'link' => 'https://cekbansos.kemensos.go.id/',
                'icon' => 'fas fa-hand-holding-heart',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'SIKS NG KEMENSOS',
                'link' => 'https://siks.kemensos.go.id/login',
                'icon' => 'fas fa-shield-alt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'JKN MOBILE/BPJS',
                'link' => 'https://data.bpjs-kesehatan.go.id/bpjsportal/action/loginForm.cbi',
                'icon' => 'fas fa-mobile-alt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'PPB',
                'link' => 'https://pajakonline.jakarta.go.id/esppt',
                'icon' => 'fas fa-file-invoice-dollar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('services')->insertBatch($data);
    }
}
