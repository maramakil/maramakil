<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductSiteController extends Controller
{
    public function getAllProducts(){
        $products = Product::paginate(6);
        return view("pages.products" , ["products" => $products]);
    }
    public function showProduct($id) {
        $product = Product::where("id" , $id)->first();
        return view("pages.product_info" , ["product" => $product]);
    }
}