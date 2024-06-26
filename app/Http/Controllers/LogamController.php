<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use Illuminate\Http\Request;

class LogamController extends Controller
{
    public function data()
    {
        $logam = DataSensor::with('sampah')
            ->where('sampah_id', 3)
            ->orderBy('created_at', 'desc')
            ->get();

        return datatables($logam)
            ->addIndexColumn()
            ->editColumn('tanggal', function ($q) {
                return date('d-m-Y', strtotime($q->created_at));
            })
            ->editColumn('jam', function ($q) {
                return date('H:i:s', strtotime($q->created_at));
            })
            ->editColumn('value', function ($q) {
                return $q->value . ' Cm';
            })
            ->editColumn('kapasitas', function ($q) {
                return $q->kapasitas . ' %';
            })
            ->editColumn('status', function ($q) {
                if ($q->status == 'Penuh') {
                    return '<span class="badge badge-danger">' . $q->status . '</span>';
                } else if ($q->status == 'Sedang') {
                    return '<span class="badge badge-warning">' . $q->status . '</span>';
                } else {
                    return '<span class="badge badge-success">' . $q->status . '</span>';
                }
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function index()
    {
        return view('datajenissampah.logam.index');
    }
}
