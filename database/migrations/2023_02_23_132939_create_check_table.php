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
        Schema::create('check', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('check_id')->unsigned();
            $table->integer('race_id')->unsigned()->nullable();
            $table->decimal('amount', 8, 2)->default(0.00);
            $table->date('check_date');
            $table->string('notes', 500)->nullable();
            $table->boolean('sbcs_ind')->default(0);

            $table->foreign("race_id")->references("id")->on("race");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check');
    }
};
