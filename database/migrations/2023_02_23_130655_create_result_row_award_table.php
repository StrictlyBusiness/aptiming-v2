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
        Schema::create('result_row_award', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('result_row_id')->unsigned();
            $table->tinyInteger('result_award_type_id')->unsigned();
            $table->integer("result_award_place")->unsigned();

            $table->foreign('result_award_type_id')->references('id')->on('result_award_type');
      		$table->foreign('result_row_id')->references('id')->on('result_row');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_row_award');
    }
};
