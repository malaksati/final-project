<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function get_blogs() {
        $blogs = Blog::get();
        return view('blogs.blogs', ['blogs'=> $blogs]);
    }
    function create() {
        return view('blogs.create');
    }
    function store(Request $req) {
        $imgHolder = "";
        $data = $req->all();
        $item = new Blog();
        if($req->hasFile('image')){
            $image = $req->file('image');
            $name = time() . "_item_" . "." . $image->getClientOriginalExtension();
            $destination = public_path("/uploads");
            $image->move($destination, $name);
            $imgHolder = "uploads/{$name}";
            $data['image'] = $imgHolder;
        }else {
            $data['image'] = "uploads/default-dish.avif";
        }
        $item->create($data);
        return redirect('/blogs');  
    }
    function get_details($id){
        $article = Blog::findorfail($id); 
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        return view('blogs.details', ['article'=> $article, 'blogs'=>$blogs]);
    }
}
