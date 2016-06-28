<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableAppDispotition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('app_dispotition', function(Blueprint $table) {
        $table->increments('id');
        $table->bigInteger('id_inbox');
        $table->integer('id_master_dispotition');
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
        //
    }
}
