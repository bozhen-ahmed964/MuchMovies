<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Series>
 */
class SeriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'series_name' => $this->faker->name(),
            'description' => $this->faker->sentence(),
            'img' => $this->faker->imageUrl(600, 400, null, true),
            'trailer' => $this->faker->url(),
            'release_year' => $this->faker->date(),
        ];
    }
}
