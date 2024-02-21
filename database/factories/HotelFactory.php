<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->company,
            "address" => $this->faker->address,
            "stars" => $this->faker->numberBetween(1, 5),
            "email" => $this->faker->unique()->safeEmail,
            "telephone" => $this->faker->phoneNumber
        ];
    }

    /**
     * Define state values for specific attributes.
     *
     * @param string $name
     * @param string $address
     * @param int $stars
     * @param string $email
     * @param string $telephone
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function stateValues(string $name, string $address, int $stars, string $email, string $telephone)
    {
        return $this->state(function (array $attributes) use ($name, $address, $stars, $email, $telephone) {
            return [
                "name" => $name,
                "address" => $address,
                "stars" => $stars,
                "email" => $email,
                "telephone" => $telephone
            ];
        });
    }
}
