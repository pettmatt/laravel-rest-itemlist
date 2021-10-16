<?php

namespace App\Http\Controllers;

use App\models\Item;
use Illuminate\Http\Request;

class ItemsAPIController extends Controller
{
    function index() {
        return Item::all();
    }

    function single($id) {
        return Item::find($id);
    }

    function store() {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'diameter' => 'required',
        ]);
    
        return Item::create([
            'name' => request('name'),
            'description' => request('description'),
            'diameter' => request('diameter'),
        ]);
    }

    function update(Item $item) {
        request()->validate([
            'name' => 'required',
            'description' => 'required',
            'diameter' => 'required',
        ]);
    
        $success = $item->update([
            'name' => request('name'),
            'description' => request('description'),
            'diameter' => request('diameter'),
        ]);
    
        return [
            'success' => $success,
            'method' => 'Update'
        ];
    }

    function delete(Item $item) {
    
        $success = $item->delete();
    
        return [
            'success' => $success,
            'method' => 'Delete'
        ];
    }
}
