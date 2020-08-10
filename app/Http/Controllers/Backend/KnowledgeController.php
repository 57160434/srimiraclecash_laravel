<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Knowledge;

class KnowledgeController extends Controller
{
    //
    function listing()
    {
        $knowledge = Knowledge::all();
        // return response()->json($knowledge);
        return view('Backend.Knowledge.knowledgelist',['knowledge'=>$knowledge]);
    }
    function create()
    {
        return view('Backend.Knowledge.knowledgecreate');
    }
    function edit()
    {
        return view('Backend.Knowledge.knowledgeedit');
    }

}
