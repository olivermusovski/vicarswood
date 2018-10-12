<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeOrderlineColumnsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ordb_lines', function (Blueprint $table) {
            $table->integer('LineTypeID')->unsigned()->nullable()->change();
            $table->string('ProductDesc')->nullable()->change();
            $table->string('PartNBR')->nullable()->change();
            $table->string('PartDesc')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ordb_lines', function (Blueprint $table) {
            //
        });
    }
}
