<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Privacy-Policy'
        ];
        return view('frontend.pages.privacy-policy.privacy-policy', $data);
    }
}
