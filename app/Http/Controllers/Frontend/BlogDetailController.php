<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Blog Details'
        ];
        return view('frontend.pages.blog-details.blog-details', $data);
    }
}
