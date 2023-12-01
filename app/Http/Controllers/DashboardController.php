<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function get_dashboard() {
        $books = Book::get();
        $admin_users_count = User::where('role', 'admin')->count();
        $non_admin_users_count = User::where('role', 'user')->count();
        $all_users_count = User::count();
        return view('admin.dashboard', [
            'books' => $books,
            'all_users' => $all_users_count,
            'admin_users' => $admin_users_count,
            'non_admin_users' => $non_admin_users_count
        ]);
    }
    function status_booking($status, $id) {
        $book = Book::findorfail($id);
        if($status=='Accepted'){
            $message = 'Your Booking is Accepted';
        }else {
            $message = 'Your Booking is Rejected';
        }
        $book->status = $status;
        $book->save();
        return redirect('/');
    }
}
