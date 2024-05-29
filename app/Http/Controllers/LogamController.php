<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use Illuminate\Http\Request;

class LogamController extends Controller
{
    public function data()
    {
        $logam = DataSensor::with('sampah')
            ->where('sampah_id', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return datatables($logam)
            ->addIndexColumn()
            ->escapeColumns([])
            ->make(true);
    }

    public function index()
    {
        return view('logam.index');
    }
}
