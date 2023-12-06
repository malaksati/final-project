<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
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
    function editt(UserRequest $req) {
        $data = $req->all();
        dd($data);
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
        $id = $req->input('id');
        $user = User::find($id);
        $user->update($data);
        return redirect('/profile', $id);
    } 
    function edit_pass(UserRequest $req) {
        $data = $req->all();
        $data['new-pass']= Hash::make($data['new-pass']);
        $id = $req->input('id');
        $user = User::find($id);
        $user->update($data);
        return redirect('/profile', $id);
    }
}
