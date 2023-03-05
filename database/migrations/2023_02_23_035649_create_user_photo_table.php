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
        Schema::create('user_photo', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('photo_id')->unsigned();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('user');
			$table->foreign('photo_id')->references('id')->on('photo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_photo');
    }
};
