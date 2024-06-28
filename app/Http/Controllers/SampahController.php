<?php

namespace App\Http\Controllers;

use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sampah.index');
    }

    public function data()
    {
        $query = Sampah::all();
        return datatables($query)
            ->addIndexColumn()
            ->editColumn('category', function ($query) {
                return $query->category->name;
            })
            ->addColumn('action', function ($query) {
                return '
                    <button onclick="editForm(`' . route('trash.show', $query->id) . '`)" class="btn btn-link text-primary"><i class="fas fa-pencil-alt"></i></button>
                ';
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
    public function show($id)
    {
        $sampah = Sampah::findOrfail($id);
        return response()->json(['data' => $sampah]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sampah $sampah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors(), 'message' => 'Maaf, terjadi kesalahan inputan'], 422);
        }

        $sampah = Sampah::findOrfail($id);
        $sampah->update($request->all());
        return response()->json(['message' => 'Data sampah berhasil diperbarui']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sampah $sampah)
    {
        //
    }
}
