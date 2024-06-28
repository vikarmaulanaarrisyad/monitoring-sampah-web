@extends('layouts.app')

@section('title', 'Data Sensor Sampah Logam')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Sensor Sampah Logam</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <x-card>
                <x-slot name="header">
                    Data Sensor Sampah Logam
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Data Sensor (Cm)</th>
                        <th>Kapasitas %</th>
                        <th>Status</th>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
@endsection
@include('logam.scripts')
