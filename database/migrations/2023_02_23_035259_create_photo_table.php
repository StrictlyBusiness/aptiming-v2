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
        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('photo_file_id')->unsigned();
			$table->integer('race_id')->unsigned()->nullable();
            $table->boolean('album_cover_ind');
            $table->integer('album_id')->unsigned()->nullable();
			$table->timestamps();

			$table->foreign('photo_file_id')->references('id')->on('file')->onDelete('cascade');
			$table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
