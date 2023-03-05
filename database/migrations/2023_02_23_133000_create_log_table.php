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
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action', 100);
            $table->string('type', 35);
            $table->text('data');
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("user");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log');
    }
};
