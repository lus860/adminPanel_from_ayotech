<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToMainSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_slides', function (Blueprint $table) {
            //
            $table->string('button_url')->nullable();
            $table->text('button')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_slides', function (Blueprint $table) {
            //
            $table->dropColumn('button_url');
            $table->dropColumn('button');
        });
    }
}
