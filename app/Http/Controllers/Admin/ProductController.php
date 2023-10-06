<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request){
        $data = $request->all(); 


        if(isset($request->image)){
            $imageName = time().".". $request->image->getClientOriginalName();
            $request->image->move(public_path('rasim'),$imageName);
            $data['image'] = $imageName;
        }


        Product::create($data);

        return redirect('/admin');

    //    Product::create([
    //         'title'=>$request->title,
    //         'image'=>$request->image,
    //         'price'=>$request->price
    //    ]);


    }

    public function destroy($id){
        $product = Product::find($id);

        $product->delete();

        return redirect('/products');
    }


    public function edit($id){
        $product = Product::find($id);
        

        return view('admin.products.update', compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);

        $data = $request->all();

        if(isset($request->image)){
            $imageName = time().".". $request->image->getClientOriginalName();
            $request->image->move(public_path('rasim'),$imageName);
            $data['image'] = $imageName;
        }else{
            $data['image'] = $product->image;
        }





        $product->update($data);

        // $product->title = $request->title;
        // $product->price = $request->price;
        // $product->save();

        return redirect('/products');
     }



}
