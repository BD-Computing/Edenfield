<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('appName')->default('Soko Suite');
            $table->string('companyName')->default('TJs Boutique Hotel');
            $table->string('technicalEmail')->nullable();
            $table->string('supportEmail')->nullable();
            $table->string('salesEmail')->nullable();
            $table->string('whatsappNumber')->nullable();
            $table->string('phone')->nullable();
            $table->string('salesPhoneNumber')->nullable();
            $table->string('boxAddress')->nullable();
            $table->string('code')->nullable();
            $table->string('officeAddress')->nullable();
            $table->string('town')->nullable();
            $table->string('country')->nullable();
            $table->string('favicon')->nullable();
            $table->string('darkLogo')->nullable();
            $table->string('lightLogo')->nullable();
            $table->string('website')->nullable();
            $table->integer('stars')->default(4);
            $table->boolean('facebook_login')->default(0);
            $table->boolean('github_login')->default(0);
            $table->boolean('google_login')->default(0);

            // Socials
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('updated_by')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
