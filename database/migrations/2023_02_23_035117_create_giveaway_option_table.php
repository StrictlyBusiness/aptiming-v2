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
        Schema::create('giveaway_option', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('giveaway_id')->unsigned();
			$table->string('name', 255);
			$table->decimal('extra_price', 8, 2)->default(0.00);
			$table->mediumInteger('max_allowed')->unsigned()->nullable();
			$table->tinyInteger('ordering')->unsigned();
            $table->decimal('add_on_price');
			$table->timestamps();

			$table->foreign('giveaway_id')->references('id')->on('giveaway')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giveaway_option');
    }
};
