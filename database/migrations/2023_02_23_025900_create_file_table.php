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
        Schema::create('file', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->tinyInteger('file_type_id')->unsigned();
			$table->string('name', 255);
			$table->string('file', 55);
			$table->string("mime", 255);
			$table->timestamps();

			$table->foreign('file_type_id')->references('id')->on('file_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file');
    }
};
