<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use \App\User;

class BackController extends Controller
{
    public function index ()
    {
        $customer = User::all();
        // return response()->json($customer);
        
        return view('Backend.index');

    }
    public function home ()
    {
        return view('Backend.Home.home');
        // Log::alert(Session::get("key"));
    }
    public function login(Request $request)
    {
        // return $request->input();

        $request->session()->put('data',$request->input());
        return $request->session()->get('data');
    }

    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('admin/home');
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
    }
    public function successlogin()
    {
        return view('Backend.Home.home');
    }
    public function logout()
    {
     Auth::logout();
     return redirect('admin');
    }
}