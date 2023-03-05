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
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->integer('registering_user_id')->unsigned();
			$table->string('first_name', 35);
			$table->string('last_name', 35);
			$table->date('birthdate')->nullable();
            $table->integer("age")->nullable();
			$table->char('gender', 1);
			$table->string('email')->nullable();
			$table->integer('team_id')->unsigned()->nullable();
			$table->integer('payment_id')->unsigned()->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('address_id')->unsigned()->nullable();
            $table->boolean('mail_ind');
            $table->boolean("email_photos_enabled")->default(false);
            $table->boolean("email_results_enabled")->default(false);
            $table->unsignedBigInteger("fb_user_id")->nullable();
            $table->boolean("fb_photos_enabled")->default(false);
            $table->boolean("fb_results_enabled")->default(false);
            $table->boolean("fb_photos_posted")->default(false);
            $table->boolean("email_results_sent")->default(false);
            $table->boolean("email_photos_sent")->default(false);
            $table->date('registration_date')->default(date("Y-m-d H:i:s"));
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->boolean("text_enabled")->default(0);
            
			$table->timestamps();

			$table->foreign('event_id')->references('id')->on('event');
			$table->foreign('registering_user_id')->references('id')->on('user');
			$table->foreign('team_id')->references('id')->on('team')->onDelete('set null');
			$table->foreign('payment_id')->references('id')->on('payment');
            $table->foreign('coupon_id')->references('id')->on('coupon')->onDelete('set null');
            $table->foreign('address_id')->references('id')->on('address')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
