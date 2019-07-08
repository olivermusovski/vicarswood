<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductHeaders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LangCode');
            $table->integer('BaseNBR');
            $table->json('ProdName');
            $table->json('ProdDesc');
            $table->json('ProdProse');
            $table->double('BasePrice');
            $table->double('BaseStdHours');
            $table->double('BaseStdLabor');
            $table->double('BaseStdMaterial');
            $table->double('BaseStdOverhead');
            $table->date('ReleaseDate');
            $table->double('Dim_Width');
            $table->double('Dim_Length');
            $table->double('Dim_Height');
            $table->double('Dim_Weight');
            $table->timestamps();
            $table->integer('UpdatedBy');
            $table->double('LeadTime');
            $table->text('Terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductHeaders');
    }
}
