<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductOptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LangCode');
            $table->integer('BaseNBR');
            $table->string('OptCode');
            $table->string('OptPosition');
            $table->string('PositionName');
            $table->string('OptName');
            $table->double('OptPrice');
            $table->double('OptStdHours');
            $table->double('OptStdLabor');
            $table->double('OptStdMaterial');
            $table->double('OptStdOverhead');
            $table->timestamps();
            $table->integer('UpdatedBy');
            $table->boolean('Default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductOptions');
    }
}
