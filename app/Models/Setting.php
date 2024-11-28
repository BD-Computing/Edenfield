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
                'companyName' => "EdenField Media Limited",
                'technicalEmail' => 'info@edenfieldmedia.co.ke',
                'salesEmail' => 'sales@edenfieldmedia.co.ke',
                'supportEmail' => 'info@edenfieldmedia.co.ke',
                'whatsappNumber' => '254779800010',
                'salesPhoneNumber' => '254779800010',
                'phone' => '254714604531',
                'boxAddress' => '6040',
                'code' => '00100',
                'officeAddress' => 'Nine Planets Apartments, Kabarnet Gardens, Suite 2',
                'town' => 'Nairobi',
                'instagram_link' => "https://www.instagram.com/podcastplanet_studio/",
                // 'twitter_link' => "https://x.com/edenfieldmedia",
                // 'youtube_link' => "https://youtube.com/@edenfieldmedia?si=dHxj2vMQF4QbCh8B",
                // 'facebook_link' => "https://www.facebook.com/edenfieldmedia",
                'tiktok_link' => "https://www.tiktok.com/@podcast_planet",
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
