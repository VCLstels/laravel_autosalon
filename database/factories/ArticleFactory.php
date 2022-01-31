<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->realTextBetween(5,100),
            'slug'=> Str::slug($this->faker->name()),
            'body'=>$this->faker->sentence,
            'description'=>$this->faker->realText(255),
            'published_at'=>$this->faker->randomElement([null, $this->faker->dateTimeThisMonth]),
        ];
    }
}
