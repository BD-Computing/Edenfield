<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public static function seed()
    {
        $testimonials = [
            [
                "name" => "Kevin Koech",
                "message" => "Absolutely loved my stay at this hotel! The staff was incredibly welcoming and
                attentive. The room was spotless and beautifully designed. I also enjoyed the
                delicious meals at the on-site restaurant. The location was convenient for
                exploring the city. A wonderful experience overall!",
                "stars" => 5,
            ],
            [
                "name" => "Brian Kiprono",
                "message" => "Impeccable hospitality and attention to detail. A perfect retreat!",
                "stars" => 4,
            ],
            [
                "name" => "Kipruto Amos",
                "message" => "Exceptional service, luxurious rooms, and a stunning view made our stay
                unforgettable!",
                "stars" => 5,
            ],
        ];

        foreach ($testimonials as $key => $testimonial) {
            $testimonial['created_by'] = 1;
            if (self::where('name', 'LIKE', $testimonial['name'])->count() === 0) {
                self::create($testimonial);
            }
        }
    }

    public static function getTestimonials($count = 3)
    {
        return self::skip(0)
            ->take($count)
            ->get();
    }
}