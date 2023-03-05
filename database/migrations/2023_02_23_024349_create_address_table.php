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
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id')->unsigned();
			$table->string('address1', 150)->nullable();
			$table->string('address2', 150)->nullable();
			$table->string('city', 50)->nullable();
			$table->tinyInteger('state_id')->nullable()->unsigned();
			$table->string('zip', 18)->nullable();
			$table->float('lat', 10, 6)->nullable();
			$table->float('lng', 10, 6)->nullable();
			$table->timestamps();

			$table->foreign('state_id')->references('id')->on('state');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
