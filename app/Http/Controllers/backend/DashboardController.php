<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // display dashboard page
    public function create()
    {
       return view('backend.dashboard');
    }
}
