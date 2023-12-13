<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function get_user($id) {
        $user = User::findorfail($id);
        return view('auth.user', ['user'=>$user]);
    }
    function update($id) {
        $user = User::findorfail($id);
        return view('auth.updateProfile', ['user'=>$user]);
    }
    function edit_profile(Request $req) {
        $data = $req->all();
        $imgHolder = "";
        if($req->hasFile('image')){
            $image = $req->file('image');
            $name = time() . "_product_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $data['image'] = $imgHolder;
        }else {
            $data['image'] = "uploads/default-profile.jpg";
        }
        // $id = $req->input('id');
        $id = Auth::id();
        // dd($id);
        $user = User::find($id);
        // dd($user);
        $user->update($data);
        return view('auth.user', ['user'=>$user]);
    } 

    function edit_pass(Request $req) {
        $old_pass = $req->input('old-pass');
        $user = Auth::user();
        $hash_old = Hash::check($old_pass, $user->password);
        // dd($user->password, $hash_old);
        if($hash_old == true){
            $hash_new = Hash::make($req->input('new-pass'));
            $user = User::find($user->id);
            $user->update(['password'=>$hash_new]);
            return view('auth.user', ['user'=>$user]);
        }else {
            dd("error");
        }
        // $id = $req->input('id');
        // $user = User::find($id);
        // $user->update($data);
        // return view('auth.user', ['user'=>$user]);
    }

    function test() {
        dd("hello");
    }
}
