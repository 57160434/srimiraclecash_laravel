<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\apiCustomer;
use App\Seopage;

class ContactController extends Controller
{
    public function contact ()
    {
        $seopage = Seopage::where('id',6)->get();
        return view('Frontend.Contact.contact',compact('seopage'));
    }
    //
    function createCustomer (Request $request)
    {
        $this->validate($request, [
            'customer_title'    =>  'required',
            'customer_fullname'     =>  'required',
            'customer_phonenumber'     =>  'required',
            'email'     =>  'required',
            'baht'     =>  'required',
            'customer_company'     =>  'required',
            'customer_detail'     =>  'required',
            // 'folder_path'     =>  'required'
        ]);
        $customer = new apiCustomer([
            'customer_title'    =>  $request->get('customer_title'),
            'customer_fullname'     =>  $request->get('customer_fullname'),
            'customer_phonenumber'     =>  $request->get('customer_phonenumber'),
            'email'     =>  $request->get('email'),
            'baht'     =>  $request->get('baht'),
            'customer_company'     =>  $request->get('customer_company'),
            'customer_detail'     =>  $request->get('customer_detail'),
            // 'folder_path'     =>  $request->get('folder_path')
        ]);
            // $customer->customer_title = $request->input('customer_title');
            // $customer->customer_fullname = $request->input('customer_fullname');
            // $customer->customer_phonenumber = $request->input('customer_phonenumber');
            // $customer->email = $request->input('email');
            // $customer->baht = $request->input('baht');
            // $customer->customer_company = $request->input('customer_company');
            // $customer->customer_detail = $request->input('customer_detail');
            // $customer->folder_path = $request->input('folder_path');

            $customer->save();
            return redirect()->back()->with('success', 'Data Added');

    }
}
