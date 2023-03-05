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
        Schema::create('fee', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->decimal('cost', 8, 2)->default(0.00);
			$table->dateTime('start_time');
			$table->dateTime('end_time')->nullable();
			$table->timestamps();

			$table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee');
    }
};
