<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact() {
        return view('contact');
    }
    function message(Request $req) {
        $data = $req->all();
        $book = new Contact();
        $book->create($data); 
        return redirect('/');
    }
}
