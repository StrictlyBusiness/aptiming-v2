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
        Schema::create('ad', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer("race_id")->unsigned()->nullable();
			$table->integer("file_id")->unsigned()->nullable();
			$table->string("name");
			$table->dateTime("start_time");
			$table->dateTime("end_time");
            $table->boolean('mobile_ind')->default(0);
			$table->timestamps();

			$table->foreign("race_id")->references("id")->on("race");
			$table->foreign("file_id")->references("id")->on("file");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad');
    }
};
