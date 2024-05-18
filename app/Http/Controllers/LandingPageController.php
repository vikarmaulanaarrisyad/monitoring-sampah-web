<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landingpage.index');
    }

    public function monitoring()
    {
        return view('landingpage.monitoring.index');
    }
}
