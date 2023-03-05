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
        Schema::create('result_cell', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('result_row_id')->unsigned();
			$table->integer('result_column_id')->unsigned();
			$table->integer('value_integer')->nullable();
			$table->double('value_double')->nullable();
			$table->string('value_small_text', 100)->nullable();
			$table->string('value_medium_text', 500)->nullable();
			$table->string('value_large_text', 4000)->nullable();
			$table->string('value_time', 15)->nullable();

			$table->foreign('result_row_id')->references('id')->on('result_row')->onDelete('cascade');
			$table->foreign('result_column_id')->references('id')->on('result_column')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_cell');
    }
};
