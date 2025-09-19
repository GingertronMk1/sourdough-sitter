<?php

namespace Database\Factories;

use App\FeedIntervalEnum;
use App\FlourAmountUnitEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

use function fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sitting>
 */
class SittingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = now()->addDays(fake()->numberBetween(1, 30));
        $endDate = $startDate->addDays(fake()->numberBetween(1, 30));

        return [
            'feed_frequency_number' => fake()->numberBetween(1, 5),
            'feed_frequency_interval' => fake()->randomElement(FeedIntervalEnum::cases()),
            'flour_amount_number' => fake()->numberBetween(1, 100),
            'flour_amount_unit' => fake()->randomElement(FlourAmountUnitEnum::cases()),
            'water_amount_number' => fake()->numberBetween(1, 100),
            'water_amount_unit' => 'ml',
            'start_date' => $startDate,
            'end_date' => $endDate,
            'flour_type' => fake()->country(),
            'additional_instructions' => fake()->boolean() ? fake()->text() : null,
            'confirmed' => fake()->boolean(),
        ];
    }
}
