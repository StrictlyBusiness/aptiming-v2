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
        Schema::create('custom_field_registration', function (Blueprint $table) {
            $table->increments('id');

            $table->integer("registration_id")->unsigned();
            $table->foreign("registration_id")->references("id")->on("registration")->onDelete("cascade");

            $table->integer("custom_field_id")->unsigned();
            $table->foreign("custom_field_id")->references("id")->on("custom_field")->onDelete("cascade");

            $table->boolean("response_bool");
            $table->string("response_short", 500)->nullable();
            $table->string("response_long", 5000)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_field_registration');
    }
};
