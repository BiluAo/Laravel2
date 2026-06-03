<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultas = [
            [
                'nama_fakultas' => 'Fakultas Teknik',
                'nama_dekan' => 'Dr. Ir. Budi Santoso, M.T.',
            ],
            [
                'nama_fakultas' => 'Fakultas Ekonomi',
                'nama_dekan' => 'Prof. Drfghj. Johan The Group, M.M',
            ],
        ];

        foreach ($fakultas as $data) {
            Fakultas::create($data);
        }
    }
}
