<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public static function findAll()
    {
        return self::all();
    }
    public static function findById($id)
    {
        return self::where('id', $id)->get()->first();
    }
}
