<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DateServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dates = [
            '2025-01-20',
            '2025-01-21',
            '2025-01-22',
        ];

        foreach ($dates as $date) {
            DB::table('date_services')->insert([
                'date_service' => $date,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
