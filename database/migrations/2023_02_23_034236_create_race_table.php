<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('race', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string('name', 255);
			$table->date('race_date');
            $table->dateTime('close_registration_date')->nullable();
            $table->dateTime('open_registration_date')->nullable()->useCurrent();
			$table->tinyInteger('race_type_id')->unsigned();
			$table->integer('address_id')->unsigned();
			$table->integer('payment_address_id')->unsigned()->nullable();
			$table->integer('user_id')->unsigned();
			$table->string('external_url', 2000)->nullable();
            $table->string('registration_url', 2000)->nullable();
			$table->string('custom_url', 125)->nullable()->unique();
			$table->string('facebook_page_url', 255)->nullable();
			$table->integer('race_waiver_id')->unsigned();
			$table->char('youtube_id', 11)->nullable();
			$table->integer('logo_file_id')->unsigned()->nullable();
            $table->integer("banner_file_id")->unsigned()->nullable();
            $table->integer("banner_mobile_file_id")->unsigned()->nullable();
			$table->integer('form_file_id')->unsigned()->nullable();
			$table->string('contact_email', 255);
			$table->boolean('registration_enabled_ind')->default(0);
            $table->boolean("registration_closed_ind")->default(false);
			$table->boolean('draft_ind')->default(1);
			$table->boolean('hide_fee_ind')->default(0);
			$table->boolean('split_fee_ind')->default(0);
			$table->boolean('absorb_fee_ind')->default(0);
			$table->boolean('allow_donations_ind')->default(0);
			$table->boolean('timing_purchased_ind')->default(0);
			$table->boolean('approved_ind')->default(0);
			$table->boolean('shared_fees_ind')->default(0);
			$table->boolean('shared_coupons_ind')->default(0);
			$table->boolean('shared_discounts_ind')->default(0);
			$table->boolean('shared_giveaways_ind')->default(0);
            $table->boolean('teams_enabled_ind')->default(0);
			$table->boolean('force_teams_ind')->default(0);
			$table->boolean('teams_creation_enabled_ind')->default(0);
            $table->boolean("public_registrants_ind")->default(true);
			$table->integer('previous_race_id')->unsigned()->nullable();
			$table->integer('director_info_id')->unsigned()->nullable();
            $table->float("donations_fee", 8, 4)->default("0.05");
            $table->float("processing_fee", 8, 4)->default("0.15");
            $table->dateTime('edit_registrations_end_date');
            $table->tinyInteger('edit_registrations_ind');
            $table->boolean("search_only_list")->default(0);
            $table->boolean("signature_ind")->default(0);

            $table->softDeletes();

			$table->timestamps();

			$table->foreign('race_type_id')->references('id')->on('race_type');
			$table->foreign('address_id')->references('id')->on('address');
			$table->foreign('payment_address_id')->references('id')->on('address')->onDelete('set null');
			$table->foreign('logo_file_id')->references('id')->on('file')->onDelete('set null');
			$table->foreign('form_file_id')->references('id')->on('file')->onDelete('set null');
            $table->foreign('banner_file_id')->references('id')->on('file')->onDelete('set null');
			$table->foreign('banner_mobile_file_id')->references('id')->on('file')->onDelete('set null');
			$table->foreign('race_waiver_id')->references('id')->on('race_waiver');
			$table->foreign('previous_race_id')->references('id')->on('race')->onDelete('set null');
			$table->foreign('user_id')->references('id')->on('user');
            $table->foreign('director_info_id')->references('id')->on('director_payment_info')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race');
    }
};
