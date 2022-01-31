<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarBodyFactory extends Factory
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
                    'Седан',
                    'Универсал',
                    'Хэтчбек',
                    'Минивен',
                    'Кроссовер',
                    'Купе',
                    'Кабриолет',
                    'Пикап'
                ])
            ];
    }
}
