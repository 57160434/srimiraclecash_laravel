<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer',function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('customer_title');
            $table->string('customer_fullname');
            $table->string('customer_phonenumber');
            $table->string('email')->nullable();
            $table->integer('baht');
            $table->string('customer_company');
            $table->text('customer_detail');
            $table->string('folder_path');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

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
    }
}