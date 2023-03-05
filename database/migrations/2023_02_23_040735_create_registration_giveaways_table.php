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
        Schema::create('registration_giveaways', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('registration_id')->nullable()->unsigned();
            $table->integer('giveaway_id')->nullable()->unsigned();
            $table->integer('giveaway_option_id')->nullable()->unsigned();
            $table->integer('quantity')->default(1);
            
            $table->foreign('registration_id')->references('id')->on('registration')->onDelete('cascade');
            $table->foreign('giveaway_id')->references('id')->on('giveaway')->onDelete('restrict');
            $table->foreign('giveaway_option_id')->references('id')->on('giveaway_option')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_giveaways');
    }
};
