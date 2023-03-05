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
        Schema::create('photo_album', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->integer("cover_photo_id")->unsigned()->nullable();
            $table->integer("race_id")->unsigned()->nullable();
            $table->timestamps();

            $table->foreign("cover_photo_id")->references('id')->on('photo')->onDelete('set null');
            $table->foreign("race_id")->references('id')->on('race')->onDelete('cascade');
        });

        Schema::table('photo', function (Blueprint $table) {
            
            $table->foreign('album_id')->references('id')->on('photo_album')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_album');
    }
};
