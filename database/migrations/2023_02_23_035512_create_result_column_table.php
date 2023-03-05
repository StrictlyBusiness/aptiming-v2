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
        Schema::create('result_column', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('result_id')->unsigned();
			$table->string('name', 255);
			$table->tinyInteger('result_column_type_id')->unsigned();
            $table->tinyInteger('result_column_meta_type_id')->unsigned()->nullable();
			$table->tinyInteger('ordering')->unsigned();

            $table->foreign('result_column_meta_type_id', 'result_column_meta_id_fk')->references('id')->on('result_column_meta_type');
			$table->foreign('result_id')->references('id')->on('result')->onDelete('cascade');
			$table->foreign('result_column_type_id')->references('id')->on('result_column_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_column');
    }
};
