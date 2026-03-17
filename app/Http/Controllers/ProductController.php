<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $productList = Product::limit(10)->orderBy('id', 'desc')->get();

        $product1 = $productList[0];

        return view('product.index', [
            'misProductos' => $productList
        ]);
    }

    public function create(){

        $categoryList = Category::all();

        return view('product.create', [
            'categoryList' => $categoryList
        ]);
    }

    
    public function store(Request $request){
        //VALIDACION
        $request->validate([
            'name' => 'required|min:3|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
            'imagen' => 'required|image',
            'state' => 'required|exists:categories,id'
        ]);


        //dd($request->all());

        $newProduct = new Product();
        $newProduct->name = $request->get('name');
        $newProduct->description = $request->get('description');
        $newProduct->price = $request->get('price');
        $newProduct->category_id = $request->get('state');

        if($request->hasFile('imagen')) {
            $ruta = $request->file('imagen')->store('images', 'public');
            $newProduct->image = $ruta;
        }

        $newProduct->save();

        return redirect()->route('product.index');

    }

    public function show($producto){
        $product = Product::findOrFail($producto);
        return view('product.show', compact('product'));
    }

    public function destroy(Product $producto){
        $producto->delete();
        return redirect()->route('product.index');
    }
}