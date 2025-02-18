<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\ProductList;

class ProductController extends Controller
{
    public function index(){
        $products = session('products', []);
        return view('product', compact('products'));
    }
    public function add_product(Request $req){

        $categoryName = $req->category_name;
        $productNames = $req->product_name;


        $products = session('products', []);
        $products[] = [
            'category_name' => $categoryName,
            'product_names' => $productNames,
        ];
        session(['products' => $products]);


        $category = new Category();
        $category->name = $categoryName;
        $category->save();

        foreach ($productNames as $value) {
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id;
            $product->save();
        }

        
        return redirect('/product');
    }

}
