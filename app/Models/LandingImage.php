<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    public static function defaultImages()
    {
        $images = [
            [
                'title' => 'Stay Once, Carry Memories',
                'description' => 'Home away from Home',
                'imageLink' => 'hotel/img/rooms/16.jpg',
            ],
            [
                'title' => 'Luxury Hotel and Best Resort',
                'description' => 'Stay Once, Carry Memories',
                'imageLink' => 'hotel/img/slider/1.jpg'
            ],
            [
                'title' => 'Unique Place to Relax & Enjoy',
                'description' => 'The Perfect Base for you',
                'imageLink' => 'hotel/img/slider/2.jpg'
            ],
            [
                'title' => 'The Ultimate Luxury Experience',
                'description' => 'Enjoy the best moments of life',
                'imageLink' => 'hotel/img/slider/3.jpg'
            ],
        ];
        return $images;
    }

    public static function getLandingImages()
    {
        $imagesFromDB = self::all();
        $default = self::defaultImages();
        if ($imagesFromDB->count() > 0) {
            return [
                'fromDB' => true,
                'images' => [...$imagesFromDB, ...$default],
            ];
        } else {
            return [
                'fromDB' => false,
                'images' => self::defaultImages(),
            ];
        }
    }

    public static function findAll()
    {
        return self::all();
    }
    public static function findById($id)
    {
        return self::where('id', $id)->get()->first();
    }
}
