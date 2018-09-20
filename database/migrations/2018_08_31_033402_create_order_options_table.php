<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrdC_Opts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderLine_id')->unsigned();
            $table->string('OptCode');
            $table->string('OptPosition');
            $table->string('PositionName');
            $table->string('OptName');
            $table->double('OptPrice');
            $table->double('OptCost');
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
        Schema::dropIfExists('OrdC_Opts');
    }
}
