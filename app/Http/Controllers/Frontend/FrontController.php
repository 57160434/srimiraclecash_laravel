<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Knowledge;

class FrontController extends Controller
{
    public function index ()
    {
        $knowledges = Knowledge::orderBy('knowledge_created_at','desc')->limit(3)->get();
        return view('Frontend.index',compact('knowledges'));
    }
    public function knowledgeDetail ($id)
    {
        $knowledge = Knowledge::find($id);
        return view('Frontend.Knowledge.knowledgedetail',['knowledge'=>$knowledge]);
    }
    public function customer ()
    {
        return view('Frontend.Customer.customer');
    }
    public function service ()
    {
        return view('Frontend.Service.service');
    }
    public function knowledge ()
    {
        return view('Frontend.Knowledge.knowledge');
    }
    public function document ()
    {
        return view('Frontend.Document.document');
    }
    public function contact ()
    {
        return view('Frontend.Contact.contact');
    }
}
