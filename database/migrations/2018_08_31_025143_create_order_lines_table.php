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
            $table->integer('LineTypeID')->unsigned();
            $table->integer('BaseNBR')->unsigned();
            $table->double('BasePrice');
            $table->double('BaseCost');
            $table->integer('Qty');
            $table->tinyInteger('Taxable');
            $table->string('ProductDesc');
            $table->string('PartNBR');
            $table->string('PartDesc');
            $table->double('PartPrice');
            $table->double('ExtPartPrice');
            $table->double('PartCost');
            $table->double('ExtPartCost');
            $table->tinyInteger('SalesTax');
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
