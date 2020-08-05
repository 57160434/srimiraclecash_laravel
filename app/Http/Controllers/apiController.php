<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apiCustomer;
use App\Student;

class apiController extends Controller
{
    public function createCustomer(Request $request) 
    {
        $customer = new apiCustomer();

        $customer->customer_title = $request->input('customer_title');
        $customer->customer_fullname = $request->input('customer_fullname');
        $customer->customer_phonenumber = $request->input('customer_phonenumber');
        $customer->email = $request->input('email');
        $customer->baht = $request->input('baht');
        $customer->customer_company = $request->input('customer_company');
        $customer->customer_detail = $request->input('customer_detail');
        $customer->folder_path = $request->input('folder_path');

        $customer->save();
        return response()->json($customer);
    }
    
    public function getCustomers()
    {
        $customer = apiCustomer::all();
        
        return response()->json($customer);
    }

    public function create(Request $request) 
    {
        $students = new Student();

        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);
    }

}
