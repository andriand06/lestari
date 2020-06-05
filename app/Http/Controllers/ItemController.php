<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Items'];
        $items = Item::latest()->get(); 
        return view ('item.index',compact('items'),$data);
    }
    public function add()
    {
        $data = ['title' => 'Add New Items'];
        return view ('item.add',$data);
    }
    public function store(Item $items)
    {
        
    }
}
