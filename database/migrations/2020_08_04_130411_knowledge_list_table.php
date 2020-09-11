<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KnowledgeListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Knowledge',function (Blueprint $table) {
            $table->increments('id');
            $table->string('knowledge_img_title');
            $table->string('knowledge_heading');
            $table->string('knowledge_description');
            $table->string('knowledge_detail');
            $table->string('knowledge_img_gallery');
            $table->timestamp('knowledge_created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('knowledge_updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->tinyInteger('knowledge_status');
            $table->string('knowledge_meta_title');
            $table->string('knowledge_meta_description');
            $table->string('knowledge_meta_keyword');

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
