<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Brand;


class ProductClientController extends Controller
{
    
    // READ
    public function view() {
        return view('client.product.view', [
            'products' => Product::orderBy('product_name', 'asc')->get()
        ]);
    }
    
    // READ
  //  public function iphone($product) {
  //      $brand = $product->scopePhone;
        
   //     return view('client.product.view', [
   //        'products' => Product::orderBy('product_name', 'asc')->get()
  //    ]);
  //  }
    
    
}
