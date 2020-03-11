<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('web.Home');
    }
    public function about()
    {
        return view('web.About');
    }

    public function contact()
    {
        return view('web.contact');
    }
}
