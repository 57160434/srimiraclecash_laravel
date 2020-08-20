<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Seopage;

class SeoController extends Controller
{
    //
    function listing()
    {
        $seopage = Seopage::all();
        return view('Backend.Seo.seo',compact('seopage'));
    }
}
