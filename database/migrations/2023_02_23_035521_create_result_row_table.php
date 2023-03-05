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
        Schema::create('result_row', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('result_id')->unsigned();

			$table->foreign('result_id')->references('id')->on('result')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_row');
    }
};
