<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    //
    public $timestamps = false;
    protected $table = 'knowledge';
    protected $fillable = ['knowlege_img_title',
                            'knowledge_heading',
                            'knowledge_description',
                            'knowledge_detail',
                            'knowledge_img_gallery',
                            'knowledge_status',
                            'knowledge_created_at',
                            'knowledge_updated_at',
                            'knowledge_meta_title',
                            'knowledge_meta_description',
                            'knowledge_meta_keyword'];
}
