<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCaptionFieldsToProductheaders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ProductHeaders', function (Blueprint $table) {
            $table->string('CaptionDim')->after('UpdatedBy');
            $table->string('CaptionPrice')->after('CaptionDim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ProductHeaders', function (Blueprint $table) {
            $table->dropColumn('CaptionDim');
            $table->dropColumn('CaptionPrice');
        });
    }
}
