<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Login'
        ];
        return view('frontend.pages.login.login', $data);
    }
}
