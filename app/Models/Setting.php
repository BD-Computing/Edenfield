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
                'companyName' => "EdenField Media",
                'technicalEmail' => 'info@edenfieldmedia.co.ke',
                'salesEmail' => 'info@edenfieldmedia.co.ke',
                'supportEmail' => 'info@edenfieldmedia.co.ke',
                'whatsappNumber' => '254725270930',
                'salesPhoneNumber' => '254725270930',
                'phone' => '254725270930',
                'boxAddress' => '6040',
                'code' => '00100',
                'officeAddress' => 'Kabarnet Gardens, Hurlingham',
                'town' => 'Nairobi',
                'instagram_link' => "https://instagram.com/edenfieldmedia",
                'twitter_link' => "https://x.com/edenfieldmedia",
                'youtube_link' => "https://youtube.com/@edenfieldmedia?si=dHxj2vMQF4QbCh8B",
                'facebook_link' => "https://www.facebook.com/edenfieldmedia",
                'tiktok_link' => "https://www.tiktok.com/@edenfieldmediake",
                'country' => 'Kenya',
                'website' => 'https://edenfieldmedia.co.ke',
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
