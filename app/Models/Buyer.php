<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    protected $fillable = ["name", "is_blocked", "surname", "phone", "email", "registration_date"];
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    protected $table = "buyers";
}
