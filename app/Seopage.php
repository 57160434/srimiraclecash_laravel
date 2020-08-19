<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seopage extends Model
{
    //
    protected $table = 'seopage';
    protected $fillable = ['meta_title',
                            'meta_description',
                            'meta_keyword',
                            ];
}