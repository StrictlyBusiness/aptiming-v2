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
        Schema::create('coupon', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->string('keyword', 100);
			$table->decimal('discount', 8, 2)->default(0.00);
			$table->dateTime('start_time');
			$table->dateTime('end_time')->nullable();
            $table->integer('max_amount')->unsigned()->nullable();
            $table->string('type')->nullable();
            $table->integer('amount_used')->unsigned()->nullable()->default(0);
			$table->timestamps();

			$table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon');
    }
};
