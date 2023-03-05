<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('director_payment_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payable_to');
            $table->integer('address_id')->unsigned()->nullable();
            $table->boolean('nonprofit_ind');
            $table->integer('nonprofit_file_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('address_id')->references('id')->on('address');
            $table->foreign('nonprofit_file_id')->references('id')->on('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('director_payment_info');
    }
};
