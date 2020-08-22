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
        // return response()->json($knowledge);
        $knowledge = Knowledge::orderBy('knowledge_created_at','desc')->paginate(10);
        return view('Backend.Knowledge.knowledgelist',['knowledge'=>$knowledge]);
    }

    function createKnowledgeByAPI(Request $request) 
    {
        $knowledge = new Knowledge();

        $knowledge->knowledge_img_title = $request->input('knowledge_img_title');
        $knowledge->knowledge_heading = $request->input('knowledge_heading');
        $knowledge->knowledge_description = $request->input('knowledge_description');
        $knowledge->knowledge_detail = $request->input('knowledge_detail');
        $knowledge->knowledge_img_gallery = $request->input('knowledge_img_gallery');
        $knowledge->knowledge_status = $request->input('knowledge_status');
        $knowledge->knowledge_meta_title = $request->input('knowledge_meta_title');
        $knowledge->knowledge_meta_description = $request->input('knowledge_meta_description');
        $knowledge->knowledge_meta_keyword = $request->input('knowledge_meta_keyword');

        $knowledge->save();
        return response()->json($knowledge);
    }

    function getKnowledgeByAPI()
    {
        $knowledge = Knowledge::all();
         return response()->json($knowledge);
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
