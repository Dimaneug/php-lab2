<?php

namespace Database\Factories;

use App\Models\Buyer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buyer>
 */
class BuyerFactory extends Factory
{
    protected $model = Buyer::class;

    public function definition()
    {
        return [
            "name" => $this->faker->firstName,
            "is_blocked" => $this->faker->boolean,
            "surname" => $this->faker->lastName,
            "phone" => $this->faker->phoneNumber,
            "email" => $this->faker->email,
            "registration_date" => $this->faker->dateTime
        ];
    }
}
