<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddColumnParentToPage extends Migration
{

    public function up()
    {
        Schema::table('pages', function($table) {
            $table->integer('parent_id')->nullable();
        });
    }
    public function down()
    {
        Schema::table('pages', function($table) {
            $table->dropColumn('parent_id');
        });
    }


}
