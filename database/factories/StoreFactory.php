<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $store_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'name' => $store_name,
            'link' => $store_name
        ];
    }
}
