<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Buyer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuyerAddressSeeder extends Seeder
{
    public function run()
    {
        $buyers = Buyer::all();
        $addresses = Address::all();


        foreach ($addresses as $address) {
            $randomBuyerId = $buyers->random(1)->pluck("id");
            $address->buyer()->associate($randomBuyerId);
        }
    }
}
