<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $feedbacks =  Contact::get();
        

        $data = [
            'title' => 'Contact'
        ];
        return view('frontend.pages.contact.contact', $data,compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required',
            'email'         => 'required',
            'msg'           => 'required' 
        ]);
        $contact = new Contact($request->all());
        
        if ($contact->save()) {
            return back();
        }
    }


}
