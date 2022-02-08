<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index(){
        $data = [
            'title' => 'Tracking'
        ];
        return view('frontend.pages.tracking.tracking', $data);
    }}
