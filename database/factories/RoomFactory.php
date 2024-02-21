<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->numberBetween(1, 3),
            'numero' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(30, 100),
            'capacity' => $this->faker->numberBetween(1, 10),
        ];
    }

    /**
     * Define state values for specific attributes.
     *
     * @param int $hotel_id
     * @param int $numero
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function hotelNumberValues(int $hotel_id, int $numero)
    {
        return $this->state(function (array $attributes) use ($hotel_id, $numero) {
            return [
                'hotel_id' => $hotel_id,
                'numero' => $numero,
            ];
        });
    }
}
