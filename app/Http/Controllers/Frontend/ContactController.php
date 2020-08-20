<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\apiCustomer;
use App\Seopage;
Use Alert;

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
        
        if(!empty($request->file('folder_path'))) 
        {
            $file = $request->file('folder_path');
            // $filename = $file->getClientOriginalName();
            $filename = base64_encode($file);
            $path = $file->storeAs('public', $filename);

            $customer = new apiCustomer([
                'customer_title'    =>  $request->get('customer_title'),
                'customer_fullname'     =>  $request->get('customer_fullname'),
                'customer_phonenumber'     =>  $request->get('customer_phonenumber'),
                'email'     =>  $request->get('email'),
                'baht'     =>  $request->get('baht'),
                'customer_company'     =>  $request->get('customer_company'),
                'customer_detail'     =>  $request->get('customer_detail'),
                'folder_path'     =>  $filename 
            ]);
        }
        else 
        {
        $customer = new apiCustomer([
            'customer_title'    =>  $request->get('customer_title'),
            'customer_fullname'     =>  $request->get('customer_fullname'),
            'customer_phonenumber'     =>  $request->get('customer_phonenumber'),
            'email'     =>  $request->get('email'),
            'baht'     =>  $request->get('baht'),
            'customer_company'     =>  $request->get('customer_company'),
            'customer_detail'     =>  $request->get('customer_detail'),
            // 'folder_path'     =>  $filename 
        ]);
        }
            // $customer = lastest()->firstOrfail();
            
            $customer->save();
            return redirect('/contact')->with('success', 'ดำเนินการเรียบร้อยแล้ว');

    }
}