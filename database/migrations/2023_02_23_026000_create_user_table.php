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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string('email', 255)->unique();
			$table->string('password', 255)->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('first_name', 35);
			$table->string('last_name', 35);
			$table->date('birthdate')->nullable();
			$table->string('phone', 20)->nullable();
			$table->char('gender', 1)->nullable();
			$table->integer('address_id')->unsigned()->nullable();
			$table->tinyInteger('user_role_id')->unsigned();
			$table->string('provider', 12)->nullable();
			$table->string('provider_id', 255)->unique()->nullable();
			$table->boolean('confirmed_ind')->default(0);
			$table->boolean('marketing_ind')->default(0);
            $table->boolean('director_banned_ind')->default(0);
			$table->boolean('banned_ind')->default(0);
			$table->integer("profile_photo_file_id")->unsigned()->nullable();
			$table->string("favorite_place", 255)->nullable();
			$table->string("favorite_race", 255)->nullable();
			$table->string("about_me", 1000)->nullable();
			$table->string("bragging_rights_text", 500)->nullable();
            $table->string("why_run_text", 750)->nullable();
			$table->boolean("forgot_pw_ind")->default(false);
            
			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('address_id')->references('id')->on('address')->onDelete('set null');
			$table->foreign('user_role_id')->references('id')->on('user_role');
			$table->foreign("profile_photo_file_id")->references('id')->on('file')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
