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
        Schema::create('result', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('event_id')->unsigned();
            $table->string('video');
            $table->integer('video_offset');
            $table->integer('team_file_id')->unsigned()->nullable();
            $table->integer('pdf_file_id')->unsigned()->nullable();

            $table->timestamps();

            $table->foreign('team_file_id')->references('id')->on('file')->onDelete('set null');            
			$table->foreign('pdf_file_id')->references('id')->on('file')->onDelete('set null');
			$table->foreign('event_id')->references('id')->on('event');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result');
    }
};
