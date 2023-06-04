<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    protected $model = Address::class;
    public function definition(): array
    {
        return [
            "address_name" => $this->faker->address,
            "city" => $this->faker->city,
            "street" => $this->faker->streetAddress,
            "house" => $this->faker->buildingNumber,
            "floor" => $this->faker->randomDigit(),
            "flat" => $this->faker->randomDigit(),
            "intercom_code" => $this->faker->ean8(),
            "add_time" => $this->faker->dateTime
        ];
    }
}
