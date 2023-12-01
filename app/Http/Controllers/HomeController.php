<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function get_home() {
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $books = Book::where('user_id', '=', $id_user)->select('id', 'user_id', 'status')->where('status', '<>' , 'Waiting')->get();
            return view('index', ['books' => $books]);
        }
        return view('index');
    }
    public function get_about() {
        return view('about');
    }
}
