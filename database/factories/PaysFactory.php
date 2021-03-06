<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaysFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomPays' => $this->faker->country(),
            'indication' => $this->faker->numberBetween(100, 300)

        ];
    }
}
