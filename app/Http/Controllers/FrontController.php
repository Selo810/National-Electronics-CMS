<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\Http\Requests;

class FrontController extends Controller
{
    public function index() {
        $products = Product::orderBy('product_name', 'asc')->distinct('brand_id')->take(5)->get();
        $brands = Brand::orderBy('brand_name', 'asc')->get();
        return view('home', compact('products'), compact('brands'));
    }
    
    
    // get about page
    public function about(){
        return view('client.about');
    }
    
    
    // get details page
    public function details(){
        return view('client.details');
    }
    
    // get service page
    public function service(){
        return view('client.service');
    }
    
}
