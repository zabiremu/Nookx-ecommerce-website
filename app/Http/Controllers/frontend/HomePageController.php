<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //Display home page 
    public function create()
    {
        return view('frontend.homePage');
    }
}
