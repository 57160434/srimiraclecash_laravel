<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Knowledge;
use App\Seopage;

class FrontController extends Controller
{
    public function index ()
    {
        $seopage = Seopage::where('id',1)->get();
        $knowledges = Knowledge::orderBy('knowledge_created_at','desc')->limit(3)->get();
        return view('Frontend.index',compact('knowledges','seopage'));
    }
    public function customer ()
    {
        $seopage = Seopage::where('id',2)->get();
        return view('Frontend.Customer.customer',compact('seopage'));
    }
    public function service ()
    {
        $seopage = Seopage::where('id',3)->get();
        return view('Frontend.Service.service',compact('seopage'));
    }
    public function knowledge ()
    {
        $seopage = Seopage::where('id',4)->get();
        return view('Frontend.Knowledge.knowledge',compact('seopage'));
    }
    public function document ()
    {
        $seopage = Seopage::where('id',5)->get();
        return view('Frontend.Document.document',compact('seopage'));
    }
    public function knowledgeDetail ($id)
    {
        $knowledge = Knowledge::find($id);
        return view('Frontend.Knowledge.knowledgedetail',['knowledge'=>$knowledge]);
    }
}
