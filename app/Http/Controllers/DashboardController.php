<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;


class DashboardControllers extends Controller
{
    public function index() {
        return view('dashboard');
        
    }

}