<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarBody;
use App\Models\CarClass;
use App\Models\CarEngine;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $engines = CarEngine::factory()->count(3)->create();
        $classes = CarClass::factory()->count(6)->create();
        $bodies = CarBody::factory()->count(8)->create();
        Car::factory()
            ->count(20)
            ->state(function() use ($engines, $classes, $bodies)
            {
                return [
                    'car_class_id' => $classes->random(),
                    'car_body_id' => $bodies->random(),
                    'car_engine_id' => $engines->random(),
                ];
            }
        )
        ->create();
    }
}
