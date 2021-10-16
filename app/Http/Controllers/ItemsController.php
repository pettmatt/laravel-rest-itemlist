<?php

namespace App\Http\Controllers;

use App\models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    function frontpage() {
        return view('frontpage/index');
    }

    function add() {
        return view('form/addNew');
    }

    function list() {
        $items = Item::orderBy('diameter')->get();

        return view('posts/list', [
            'items' => $items,
        ]);
    }

    function single($id) {
        $item = Item::find($id);

        return view('posts/single', [
            'item' => $item,
        ]);
    }

    function updatepage($id) {
        $item = Item::find($id);

        return view('form/update', [
            'item' => $item,
        ]);
    }

    function store() {
        request()->validate([
            'name' => 'required|unique:items|max:50',
            'description' => 'required',
            'diameter' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'name.unique' => 'Name needs to be unique.',
            'name.max' => 'Max lenght of a name is 50 characters.',
            'description.required' => 'Description is required.',
            'diameter.required' => 'Diameter is required.',
        ]);

        $name = request('name');
        $description = request('description');
        $diameter = request('diameter');
    
        Item::create([
            'name' => $name,
            'description' => $description,
            'diameter' => $diameter,
        ]);

        return redirect('/items')->with('added', 'Item "' . $name . '" added to the list.');
    }

    function update(Item $item) {
        request()->validate([
            'name' => 'required|max:40',
            'description' => 'required',
            'diameter' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'name.unique' => 'Name needs to be unique.',
            'name.max' => 'Max lenght of a name is 40 characters.',
            'description.required' => 'Description is required.',
            'diameter.required' => 'Diameter is required.',
        ]);

        $item->update([
            'name' => request('name'),
            'description' => request('description'),
            'diameter' => request('diameter')
        ]);
    
        return redirect('/items')->with('update', 'Item "' . $item->name . '" updated.');
    }

    function delete(Item $item) {
    
        $item->delete();
    
        return redirect('/items')->with('removed', 'Item "' . $item->name . '" removed from the list.');
    }
}
