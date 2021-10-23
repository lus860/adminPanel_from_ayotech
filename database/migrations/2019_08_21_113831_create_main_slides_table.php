<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateMainSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_slides', function (Blueprint $table) {
            $table->increments('id');
            $table->text('line_1')->nullable();
            $table->text('line_2')->nullable();
            $table->string('image', 64)->nullable();
            $table->boolean('active')->default(1);
            $table->timestamps();
            $table->engine = 'MyISAM';
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_slides');
    }
}