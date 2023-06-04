<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ["address_name", "city", "street", "house", "floor", "flat", "intercom_code", "add_time"];
    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
    protected $table = "addresses";
}
