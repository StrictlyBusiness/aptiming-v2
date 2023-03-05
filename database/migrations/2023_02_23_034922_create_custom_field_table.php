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
        Schema::create('custom_field', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('race_id')->unsigned();
			$table->string('name', 255)->nullable();
			$table->string('description', 500);
			$table->tinyInteger('custom_field_type_id')->unsigned();
			$table->decimal('extra_price', 8, 2)->default(0.00);
            $table->integer("photo_file_id")->unsigned()->nullable();;
			$table->timestamps();

			$table->foreign('race_id')->references('id')->on('race')->onDelete('cascade');
			$table->foreign('custom_field_type_id')->references('id')->on('custom_field_type');
            $table->foreign("photo_file_id")->references('id')->on('file')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_field');
    }
};
