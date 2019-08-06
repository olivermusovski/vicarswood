<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinishConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductFinishConfig', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('AccentCode')->unsigned();
            $table->json('Config');
            $table->json('Option');
            $table->json('Desc');
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
        Schema::dropIfExists('ProductFinishConfig');
    }
}
