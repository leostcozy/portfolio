<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shop;

class ShopController extends Controller
{
    public function getShopslist(Shop $shop)
    {
        return view('shops.list')->with(['shops' => $shop->getPaginateByLimit()]);
    }
    
    public function show(Shop $shop)
    {
        return view('shops.show')->with(['shop' => $shop]);
    }
    
    public function create()
    {
        return view('shops.create');
    }
}
