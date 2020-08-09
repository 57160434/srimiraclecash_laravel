<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KnowleadgeController extends Controller
{
    //
    function listing()
    {
        return view('Backend.Knowleadge.knowleadgelist');
    }
    function create()
    {
        return view('Backend.Knowleadge.knowleadgecreate');
    }
    function edit()
    {
        return view('Backend.Knowleadge.knowleadgeedit');
    }
}
