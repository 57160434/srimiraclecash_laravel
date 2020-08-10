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
            $table->increments('knowledge_id');
            $table->string('knowledge_heading');
            $table->string('knowledge_detail');
            $table->string('folder_path');
            $table->timestamp('knowledge_created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('knowledge_updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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
