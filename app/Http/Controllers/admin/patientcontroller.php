<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class patientcontroller extends Controller
{
    //

        public function storePatientInfo(Request $request)
    {
        // Validate the request...
        $request->Validate([
        	'name'=>'required|alpha',
        	'email'=>'required|unique|email',
        	'password'=>'required',
        	'confirmpassword'=>'same:password',
        	'mobile'=>'nullable|numeric|size:14',
        	'date'=>'nullable|date|before:today',
        	'gender'=>'required|nullable|in(['male','female'])'
        ]);
         $connection='MasterClinic';
         $patient = new Patient ;
         $patient->name=$request->name;
v        $patient->email=$request->email;
         $patient->mobile=$request->mobile;
         $patient->name=$request->name;
         $patient->date_of_birth=$request->date;
         $patient->$gender = something;=$request->gender;  
         $patient->save();
    }


}
