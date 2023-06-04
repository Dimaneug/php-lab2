<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CountAddresses extends Command
{
    /**
     * The name and signature of the console command.
     *
     *
     */
    protected $signature = 'addresses:count {id}';

    protected $description = 'Amount of addresses the customer has';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $customerId = $this->argument('id');

        $addresses= DB::table("buyer_address")->where("buyer_id", $customerId)->count();

        if (!$addresses) {
            throw new \InvalidArgumentException("Addresses with customer ID {$customerId} not found.");
        }

        $this->info("Number of addresses customer {$customerId} has: {$addresses}");
    }
}
