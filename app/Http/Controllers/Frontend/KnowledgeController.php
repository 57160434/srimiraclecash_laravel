<?php

namespace App\Http\Controllers\Frontend;

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
        return view('Frontend.Knowledge.knowledge',['knowledge'=>$knowledge]);
    }
}
