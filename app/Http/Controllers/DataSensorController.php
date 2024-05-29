<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use Illuminate\Http\Request;

class DataSensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datasensor.index');
    }

    public function data()
    {
        $query = DataSensor::all();
        return datatables($query)
            ->addIndexColumn()
            ->addColumn('action', function () {
                return '';
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataSensor $dataSensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataSensor $dataSensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataSensor $dataSensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataSensor $dataSensor)
    {
        //
    }
}
