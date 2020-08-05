<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index ()
    {
        return view('Frontend.index');
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
