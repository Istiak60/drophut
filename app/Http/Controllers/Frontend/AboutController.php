<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = [
            'title' => 'About'
        ];
        return view('frontend.pages.about.about', $data);
    }
}
