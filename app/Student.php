<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $table = 'students';
    protected $fillable = ['fname',
                            'lname',
                            'email',
                            'password',
                            ];
                            
}
