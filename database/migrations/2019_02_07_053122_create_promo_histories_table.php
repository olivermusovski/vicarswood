<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PromoHistory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PromoCode');
            $table->string('LangCode');
            $table->string('PromoName');
            $table->date('DateStarted');
            $table->date('DateClosed');
            $table->boolean('Internal');
            $table->double('Discount');
            $table->string('Authorization')->nullable();
            $table->boolean('Launch');
            $table->text('LaunchEmail');
            $table->string('FromName');
            $table->string('FromEmail');
            $table->string('FromPhone');
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
        Schema::dropIfExists('PromoHistory');
    }
}
