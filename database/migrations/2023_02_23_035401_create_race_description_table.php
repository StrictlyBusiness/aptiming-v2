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
        Schema::create('race_description', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('race_id')->unsigned();
			$table->string('name', 255);
			$table->string('description', 4000);
            $table->tinyInteger("ordering")->unsigned()->default(0);
            $table->integer("photo_file_id")->unsigned()->nullable();

            $table->foreign("photo_file_id")->references("id")->on("file")->onDelete('set null');
			$table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_description');
    }
};
