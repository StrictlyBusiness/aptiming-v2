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
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('race_id')->unsigned();
			$table->string('name', 100);
			$table->string('description', 400)->nullable();
			$table->integer('user_id')->unsigned();
			$table->tinyInteger('team_type_id')->unsigned();
			$table->timestamps();

			$table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
			$table->foreign('user_id')->references('id')->on('user');
			$table->foreign('team_type_id')->references('id')->on('team_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
