<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Konselor;
use App\Models\DateService;
use App\Models\TimeService;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $dateServiceIds = DateService::pluck('id')->toArray();
        $timeServiceIds = TimeService::pluck('id')->toArray();

        $konselors = Konselor::all();

        foreach ($konselors as $konselor) {
            $serviceCount = rand(1, 5);

            for ($i = 0; $i < $serviceCount; $i++) {
                $dateServiceId = $faker->randomElement($dateServiceIds);
                $timeServiceId = $faker->randomElement($timeServiceIds);

                DB::table('services')->insert([
                    'price' => $faker->numberBetween(50000, 100000),
                    'konselor_id' => $konselor->id,
                    'date_service_id' => $dateServiceId,
                    'time_service_id' => $timeServiceId,
                    'status' => $faker->randomElement(['ready', 'booked']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
