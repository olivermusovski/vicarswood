<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaticWebPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StaticWebPages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('LangCode');
            $table->string('PageTitle');
            $table->string('PageSubTitle')->nullable();
            $table->text('PageBody')->nullable();
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
        Schema::dropIfExists('StaticWebPages');
    }
}
