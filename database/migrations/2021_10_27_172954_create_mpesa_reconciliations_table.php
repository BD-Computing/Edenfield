<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesaReconciliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesa_reconciliations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mpesa_transaction')->unique();
            $table->string('billRefNo');
            $table->timestamps();

            $table->foreign('mpesa_transaction')->references('id')->on('mpesa_transactions')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesa_reconciliations');
    }
}
