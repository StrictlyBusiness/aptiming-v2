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
        Schema::create('race_view', function (Blueprint $table) {
            $table->integer('race_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->date('view_date');

            $table->foreign("race_id")->references("id")->on("race");
            $table->foreign("user_id")->references("id")->on("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('race_view');
    }
};
