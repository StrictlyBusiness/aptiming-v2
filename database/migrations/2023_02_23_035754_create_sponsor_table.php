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
        Schema::create('sponsor', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('race_id')->unsigned();
			$table->string('name');
            $table->string('url')->nullable();
			$table->integer('file_id')->unsigned()->nullable();
			$table->timestamps();

			$table->foreign('race_id')->references('id')->on('race');
			$table->foreign('file_id')->references('id')->on('file')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsor');
    }
};
