<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(Request $request)
    {

        $input=$request->all();

        $contact = Contact::create([
            'name' => $input['firstname'],
            'email'=> $input['email'],
            'comments'=> $input['comments'],
        ]);

        return back()->with('success','Item created successfully!');        
    }  
}
