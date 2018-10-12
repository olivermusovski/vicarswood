<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeOrderColumnsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orda_hdr', function (Blueprint $table) {
            $table->string('OrderStatus')->nullable()->change();
            $table->integer('user_id')->unsigned()->nullable()->change();
            $table->string('UserEmail')->nullable()->change();
            $table->integer('SoldById')->unsigned()->nullable()->change();
            $table->integer('BillToId')->unsigned()->nullable()->change();
            $table->integer('ShipToId')->unsigned()->nullable()->change();
            $table->string('DiscountCode')->nullable()->change();
            $table->date('DatePlanned')->nullable()->change();
            $table->date('DatePlanToShip')->nullable()->change();
            $table->date('DateShipped')->nullable()->change();
            $table->date('DateInvoiced')->nullable()->change();
            $table->string('TaxJurisdiction')->nullable()->change();
            $table->string('ShipVia')->nullable()->change();
            $table->string('TrackingNBR')->nullable()->change(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orda_hdr', function (Blueprint $table) {
            //
        });
    }
}
