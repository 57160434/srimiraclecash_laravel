<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apiCustomer extends Model
{
    public $timestamps = false;
    protected $table = 'customers';
    protected $fillable = ['customer_title',
                            'customer_fullname',
                            'customer_phonenumber',
                            'email',
                            'baht',
                            'customer_company',
                            'customer_detail',
                            'folder_path'];
}
