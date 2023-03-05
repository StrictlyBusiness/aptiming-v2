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
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->decimal('amount', 8, 2)->default(0.00);
			$table->decimal('total_event_price', 8, 2)->default(0.00);
			$table->decimal('total_extra_price', 8, 2)->default(0.00);
			$table->decimal('total_fee_price', 8, 2)->default(0.00);
			$table->decimal('total_donation_price', 8, 2)->default(0.00);
			$table->decimal('total_discount_value', 8, 2)->default(0.00);
			$table->decimal('total_coupon_value', 8, 2)->default(0.00);
			$table->tinyInteger('payment_type_id')->unsigned();
            $table->boolean("rtb_ind")->default(0);
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('user');
			$table->foreign('payment_type_id')->references('id')->on('payment_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
