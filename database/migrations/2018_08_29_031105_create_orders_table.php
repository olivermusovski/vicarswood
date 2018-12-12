<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrdA_Hdr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('OrderStatus')->nullable();
            $table->string('OrdLanguage');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('UserEmail')->nullable();
            $table->integer('SoldById')->unsigned()->nullable();
            $table->integer('BillToId')->unsigned()->nullable();
            $table->integer('ShipToId')->unsigned()->nullable();
            $table->string('DiscountCode')->nullable();
            $table->timestamps();
            $table->integer('UpdatedBy')->unsigned();
            $table->dateTime('DateOrdered');
            $table->date('DatePlanned')->nullable();
            $table->date('DatePlanToShip')->nullable();
            $table->date('DateShipped')->nullable();
            $table->date('DateInvoiced')->nullable();
            $table->double('DiscountRate')->nullable();
            $table->double('TaxRate')->nullable();
            $table->string('TaxJurisdiction')->nullable();
            $table->string('ShipVia')->nullable();
            $table->string('TrackingNBR')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrdA_Hdr');
    }
}
