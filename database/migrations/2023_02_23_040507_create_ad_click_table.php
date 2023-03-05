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
        Schema::create('ad_click', function (Blueprint $table) {
            $table->integer('ad_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->date('click_date');

            $table->foreign("ad_id")->references("id")->on("ad");
            $table->foreign("user_id")->references("id")->on("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_click');
    }
};
