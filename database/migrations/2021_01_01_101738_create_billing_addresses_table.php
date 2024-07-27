<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('businessName')->nullable();
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('streetAddress');
            $table->string('city');
            $table->string('comment')->nullable();
            $table->unsignedBigInteger('createdBy');
            $table->timestamps();

            // Add foreign keys
            $table->foreign('userId')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('createdBy')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billing_addresses');
    }
}
