<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PromoOffers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promo_history_id')->unsigned();
            $table->string('PromoCode')->nullable();
            $table->integer('user_id')->unsigned();
            $table->datetime('OfferUsed')->nullable();
            $table->boolean('OfferConveyed');
            $table->boolean('FlaggedToEmail');
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
        Schema::dropIfExists('PromoOffers');
    }
}
