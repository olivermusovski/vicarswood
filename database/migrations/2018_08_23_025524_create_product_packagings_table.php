<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPackagingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductPackagings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LangCode');
            $table->integer('BaseNBR');
            $table->string('Caption');
            $table->integer('CartonNBR');
            $table->integer('Pck_Width');
            $table->integer('Pck_Length');
            $table->integer('Pck_Height');
            $table->integer('Pck_Weight');
            $table->timestamps();
            $table->integer('UpdatedBy');
            $table->string('CaptionWidth');
            $table->string('CaptionLength');
            $table->string('CaptionHeight');
            $table->string('CaptionWeight');
            $table->string('CaptionCarton');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductPackagings');
    }
}
