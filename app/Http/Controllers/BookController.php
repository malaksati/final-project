<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    function book() {
        if(Auth::user()){
            return view('menu.book');
        }else {
            $message = 'Your not logged in, Log in first';
            return view('auth.login', ['message'=>$message]);
        }
    }
    function table(Request $req) {
        $data = $req->all();
        $book = new Book();
        $book->create($data); 
        return redirect('/');
    }
    function get_bookings() {
        if(Auth::user()){
            $id_user = Auth::user()->id;
            $books = Book::where('user_id', '=', $id_user)->get();
            return view('menu.bookings', ['books'=>$books]);
        }
    }
}
