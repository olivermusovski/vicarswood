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
            $table->string('OrderStatus');
            $table->string('OrdLanguage');
            $table->integer('user_id')->unsigned();
            $table->string('UserEmail');
            $table->integer('SoldById')->unsigned();
            $table->integer('BillToId')->unsigned();
            $table->integer('ShipToId')->unsigned();
            $table->string('DiscountCode');
            $table->timestamps();
            $table->integer('UpdatedBy')->unsigned();
            $table->dateTime('DateOrdered');
            $table->date('DatePlanned');
            $table->date('DatePlanToShip');
            $table->date('DateShipped');
            $table->date('DateInvoiced');
            $table->double('DiscountRate');
            $table->double('TaxRate');
            $table->string('TaxJurisdiction');
            $table->string('ShipVia');
            $table->string('TrackingNBR'); 
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
