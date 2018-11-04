<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->tinyInteger('AddressDisabled')->default(0);
            $table->string('AddressType')->nullable();
            $table->string('CompanyShortName')->nullable();
            $table->string('CompanyLegalName')->nullable();
            $table->string('CompanyWeb')->nullable();
            $table->string('Attention')->nullable();
            $table->string('Street1')->nullable();
            $table->string('Street2')->nullable();
            $table->string('City')->nullable();
            $table->string('Province')->nullable();
            $table->string('PostalCode')->nullable();
            $table->string('Country')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->timestamps();
            $table->integer('UpdatedBy')->nullable();
            $table->string('LogoLocation1')->nullable();
            $table->string('LogoLocation2')->nullable();
            $table->integer('LeadTime')->nullable();
            $table->string('QB_Type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
