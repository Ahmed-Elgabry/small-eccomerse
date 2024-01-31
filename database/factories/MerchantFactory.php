<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MerchantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $merchant_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($merchant_name,'-');
        return [
            'name' => $merchant_name,
            'slug' => $slug
        ];
    }
}
