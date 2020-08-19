<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Knowledge;
Use App\Seopage;

class KnowledgeController extends Controller
{
    //
    function listing()
    {
        $seopage = Seopage::where('id',4)->get();
        $knowledges = Knowledge::orderBy('knowledge_created_at','desc')->paginate(9);
        // return response()->json($knowledge);
        return view('Frontend.Knowledge.knowledge',compact('knowledges','seopage'));
    }
    public function knowledgeDetail ($id)
    {
        $knowledge = Knowledge::find($id);
        return view('Frontend.Knowledge.knowledgedetail',['knowledge'=>$knowledge]);
    }

    // function fetch_data(Request $request)
    // {
    //  if($request->ajax())
    //  {
    //   $knowledge = Knowledge::paginate(5);
    //   return view('Frontend.Knowledge.knowledge', compact('knowledge'))->render();
    //  }
    // }
}
