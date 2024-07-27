<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('subject');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('message');
            $table->boolean('read')->default(0);
            $table->unsignedBigInteger('readBy')->nullable();
            $table->timestamp('readAt')->nullable();
            $table->timestamps();

            // Set Foreign Keys
            $table->foreign('readBy')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
