<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return response()->json(['data'=>$products]);
    }

    public function store(Request $request){

        $this->validate($request,[
            'title_uz'=>'required',
            'title_ru'=>'required',
            'price'=>'required',
            'category_id'=>'required',
            'image'=>'required'
        ]);

        Product::create($request->all());

        return response()->json('post kiritildi');
    }

    public function show(Product $product){

        // $product = Product::find($id);

        return response()->json($product);
    }

    public function update(Request $request, Product $product) {

        $product->update($request->all());

        return response()->json('malumot ozgartirildi');
    }

    public function destroy( Product $product){

        $product->delete();

        return response()->json("product o'chirildi");
    }
}
