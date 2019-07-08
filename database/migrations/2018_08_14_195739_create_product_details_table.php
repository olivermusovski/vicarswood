<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LangCode');
            $table->integer('BaseNBR');
            $table->integer('ObjectSequence');
            $table->json('ObjectName');
            $table->string('ObjectFile');
            $table->timestamps();
            $table->integer('UpdatedBy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductDetails');
    }
}
