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
        Schema::create('team_scores', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('result_id')->unsigned();
             $table->string('team_name', 500);
             $table->integer('team_score');
 
             $table->foreign("result_id")->references("id")->on("result");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_scores');
    }
};
