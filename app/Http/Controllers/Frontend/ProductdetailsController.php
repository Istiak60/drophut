<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductdetailsController extends Controller
{
    public function show($id){
        
        $product = Product::where('id', $id)->find($id);
        // dd($product);

        $data = [
            'title' => 'Product-Details'
        ];
        return view('frontend.pages.product-details.product-details', $data, compact('product'));
    }
}
