<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sampahLogam = DataSensor::where('id', 1)->limit(5)->get();
        return view('dashboard.index');
    }
}
