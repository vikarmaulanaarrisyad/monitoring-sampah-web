<?php

namespace App\Http\Controllers;

use App\Models\DataSensor;
use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiDataKirimDataController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'sampah_id' => $request->sampah_id,
            'value' => $request->value,
            'kapasitas' => $request->kapasitas,
            'status' => $request->status,
        ];

        DataSensor::create($data);

        $resultOrganik = DataSensor::where('value', 1)->orderBy('id', 'desc')->first();
        $resultAnorganik = DataSensor::where('value', 2)->orderBy('id', 'desc')->first();
        $resultLogam = DataSensor::where('value', 3)->orderBy('id', 'desc')->first();

        return response()->json(['message' => 'Data berhasil disimpan',], 201);
    }

}
