<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){

        $products = Product::all()->where('trash','0');

        $sliders = Slider::all()->where('trash','0');

        $data = [
            'title' => 'Home'
        ];
        return view('frontend.pages.home.index', $data, compact('products','sliders'));
    }
}
