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
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('race_id')->unsigned();
			$table->string('name', 255);
			$table->time('start_time');
			$table->float('distance');
			$table->tinyInteger('distance_unit_id')->unsigned();
			$table->tinyInteger('min_age')->unsigned()->nullable();
			$table->tinyInteger('max_age')->unsigned()->nullable();
			$table->char('gender_requirement', 1)->nullable();
			$table->mediumInteger('max_participants')->unsigned()->nullable();
			$table->integer('gps_file_id')->unsigned()->nullable();
			$table->integer('course_id')->unsigned()->nullable();
			$table->boolean('giveaway_ind')->default(0);
            $table->boolean("results_uploaded_ind")->default(false);
			$table->timestamps();

			$table->foreign('distance_unit_id')->references('id')->on('distance_unit');
			$table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
			$table->foreign('gps_file_id')->references('id')->on('file')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
