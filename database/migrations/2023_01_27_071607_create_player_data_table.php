<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("image")->nullable();
            $table->string("club")->nullable();
            $table->string("nationality")->nullable();
            $table->string("position")->nullable();
            $table->json("alt_positions")->nullable();
            $table->string("strong_foot")->nullable();
            $table->string("birthdate")->nullable();
            $table->string("height")->nullable();
            $table->string("weight")->nullable();
            $table->text("description")->nullable();
            $table->string("phone")->nullable();
            $table->string("social")->nullable();
            $table->boolean("is_published")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_data');
    }
};
