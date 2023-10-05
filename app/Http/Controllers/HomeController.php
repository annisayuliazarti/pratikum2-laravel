<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    public function index() {
        return view('halaman-1');

    }

}