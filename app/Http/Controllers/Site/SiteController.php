<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $products = Product::all();
        
        return view('site.index', compact('products'));
    }
}
