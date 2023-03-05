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
        Schema::create('photo_bib', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('photo_id')->unsigned();
			$table->mediumInteger('bib_id')->unsigned();
			$table->timestamps();

			$table->foreign('photo_id')->references('id')->on('photo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_bib');
    }
};
