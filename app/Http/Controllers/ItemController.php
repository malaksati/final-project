<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function get_menu() {
        $items = Item::get();
        return view("menu.menu", ['items'=> $items]);
    }
    function create() {
        return view('menu.create');
    }
    function store(Request $req) {
        $imgHolder = "";
        $data = $req->all();
        $item = new Item();
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
        return redirect('/menu');  
    }
    function update($id) {
        $item = Item::findorfail($id);
        return view('menu.update', ['item' => $item]);
    }
    function edit(ItemRequest $req) {
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
            $data['image'] = "uploads/default-dish.avif";
        }
        $id = $req->input('id');
        $item = Item::find($id);
        $item->update($data);
        return redirect('/menu');
    }
    function delete(Item $id) {
        $id->delete();
        return redirect('/menu');
    }
}
