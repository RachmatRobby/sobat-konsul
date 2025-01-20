<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datesWithTimes = [
            '2025-01-20' => ['08:00:00', '10:00:00'],
            '2025-01-21' => ['09:00:00', '11:00:00'],
            '2025-01-22' => ['08:30:00', '14:00:00'],
        ];

        foreach ($datesWithTimes as $date => $times) {
            $dateServiceId = DB::table('date_services')->where('date_service', $date)->first()->id;

            foreach ($times as $time) {
                DB::table('time_services')->insert([
                    'time' => $time,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
