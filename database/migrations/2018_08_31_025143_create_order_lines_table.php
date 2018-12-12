<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrdB_Lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('LineTypeID')->unsigned()->nullable();
            $table->integer('BaseNBR')->unsigned()->nullable();
            $table->double('BasePrice');
            $table->double('BaseCost');
            $table->integer('Qty');
            $table->tinyInteger('Taxable')->nullable();
            $table->string('ProductDesc')->nullable();
            $table->string('PartNBR')->nullable();
            $table->string('PartDesc')->nullable();
            $table->double('PartPrice')->nullable();
            $table->double('ExtPartPrice')->nullable();
            $table->double('PartCost')->nullable();
            $table->double('ExtPartCost')->nullable();
            $table->tinyInteger('SalesTax')->nullable();
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
        Schema::dropIfExists('OrdB_Lines');
    }
}
