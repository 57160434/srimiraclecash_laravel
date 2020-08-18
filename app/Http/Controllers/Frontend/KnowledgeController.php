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
        $knowledges = Knowledge::all();
        // return response()->json($knowledge);
        return view('Frontend.Knowledge.knowledge',['knowledges'=>$knowledges]);
    }
    public function knowledgeDetail ($id)
    {
        $knowledge = Knowledge::find($id);
        return view('Frontend.Knowledge.knowledgedetail',['knowledge'=>$knowledge]);
    }
}
