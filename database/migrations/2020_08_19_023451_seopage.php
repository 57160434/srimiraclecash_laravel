<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Seopage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Seopage',function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_page');
            $table->string('metatitle');
            $table->string('metadescription');
            $table->string('metakeyword');
            // $table->timestamps()
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
        Schema::drop('flights');
    }
}
