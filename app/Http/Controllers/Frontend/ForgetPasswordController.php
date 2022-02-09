<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Forget Password'
        ];
        return view('frontend.pages.forget-password.forget-password', $data);
    }
}
