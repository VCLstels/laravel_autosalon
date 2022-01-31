<?php

namespace Database\Factories;

use App\Models\CarBody;
use App\Models\CarClass;
use App\Models\CarEngine;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement([
                    'Rio',
                    'Seed',
                    'K5',
                    'Rio X',
                    'Новый Seed',
                    'Mohave',
                    'Optima',
                    'Picanto',
                    'Cerato'
                ]),
            'body'=>$this->faker->sentence,
            'price'=>$this->faker->numberBetween(),
            'old_price'=> rand(0,1) ? $this->faker->numberBetween() : null,
            'salon'=>$this->faker->sentence,
            'kpp'=>$this->faker->text(),
            'year'=>$this->faker->year,
            'color'=>$this->faker->colorName,
            'car_class_id'=>CarClass::factory(),
            'car_body_id' => CarBody::factory(),
            'car_engine_id' => CarEngine::factory(),
            'is_new' => (bool) rand(0,1)
        ];
    }
}
