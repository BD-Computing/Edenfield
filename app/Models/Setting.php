<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Seed Functionality
     *
     * @return void
     */
    public static function seed()
    {
        if (self::count() === 0) {
            return self::create([
                'companyName' => "Venture Africa Safaris",
                'technicalEmail' => 'info@ventureafricasafaris.com',
                'salesEmail' => 'info@ventureafricasafaris.com',
                'supportEmail' => 'info@ventureafricasafaris.com',
                'whatsappNumber' => '254725270930',
                'salesPhoneNumber' => '254725270930',
                'phone' => '254725270930',
                'boxAddress' => '6040',
                'code' => '00100',
                'officeAddress' => 'Hurlingham',
                'town' => 'Nairobi',
                'instagram_link' => "https://instagram.com/ventureafricasafaris",
                'twitter_link' => "https://x.com/ventureafricasafaris",
                'youtube_link' => "https://youtube.com/@ventureafricasafaris?si=dHxj2vMQF4QbCh8B",
                'facebook_link' => "https://www.facebook.com/ventureafricasafaris",
                'tiktok_link' => "https://www.tiktok.com/@ventureafricasafariske",
                'country' => 'Kenya',
                'website' => 'https://ventureafricasafaris.com',
            ]);
        }
    }
    /**
     * Get settings from the database
     *
     * @return void
     */
    public static function getSettings()
    {
        return self::first();
    }
}
