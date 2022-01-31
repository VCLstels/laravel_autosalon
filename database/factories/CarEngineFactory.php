<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarEngineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique->randomElement([
                'Дизель',
                'Бензин',
                'Гибрид'
            ])
        ];
    }
}
