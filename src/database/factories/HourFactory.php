<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hour>
 */
class HourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $date;
        $date = $date ?: Carbon::create(2023, 6, 1);
        return [
            //
            'date' => $date->format('Y-m-d'),
            'hours' => $this->faker->numberBetween(0, 8),
        ];
    }
}
