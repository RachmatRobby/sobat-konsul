<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonselorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('konselors')->insert([
            [
                'name' => 'Rinda Anisah, M.Psi',
                'profile_image' => 'assets/aanisa.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis spesialis di berbagai bidang.'
            ],
            [
                'name' => 'Amina Devina, M.Psi',
                'profile_image' => 'assets/almira.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis dengan fokus pada kesehatan mental.'
            ],
            [
                'name' => 'Dicky Sujanto, M.Psi',
                'profile_image' => 'assets/dicky.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis yang berpengalaman dalam berbagai kasus.'
            ],
            [
                'name' => 'Anindya Astria, M.Psi',
                'profile_image' => 'assets/aanisaaxel.png',
                'specializations' => json_encode([
                    'Depresi',
                    'Masalah Keluarga',
                    'Hubungan Percintaan',
                    'Karir & Pekerjaan',
                    'Dan lainnya'
                ]),
                'bio' => 'Psikolog Klinis dengan pendekatan holistik.'
            ]
        ]);
    }
}
