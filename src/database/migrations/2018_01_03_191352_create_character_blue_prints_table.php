<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacterBluePrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('character_blue_prints', function (Blueprint $table) {

            $table->bigInteger('item_id')->primary()->unique();

            $table->integer('character_id')->primary();
            $table->integer('type_id')->primary();
            $table->string('location_flag');
            $table->integer('quantity');
            $table->integer('time_efficiency');
            $table->integer('material_efficiency');
            $table->integer('runs');

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

        Schema::dropIfExists('character_blue_prints');
    }
}
