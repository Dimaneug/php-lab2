<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Address;
use App\Models\Buyer;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        Buyer::factory(100)->create();
        Address::factory(100)->create();
        foreach(range(1, 100) as $index)
        {
            DB::table('buyer_address')->insert([
                'buyer_id' => rand(1,100),
                'address_id' => $faker->unique()->numberBetween(1, 100)
            ]);
        }
        $this->call(BuyerAddressSeeder::class);
    }
}
