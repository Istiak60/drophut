<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function index($id){

        $blog = Blog::where('id', $id)->find($id);

        $blogs = Blog::all()->where('trash','0');

        $data = [
            'title' => 'Blog Details'
        ];
        
        return view('frontend.pages.blog-details.blog-details', $data, compact('blog','blogs'));
    }
}
