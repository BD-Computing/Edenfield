<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function getUserAddress($userId)
    {
        return self::where('userId', '=', $userId)->get();
    }
}
