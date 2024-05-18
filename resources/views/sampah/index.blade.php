@extends('layouts.app')

@section('title', 'Data Sampah')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <x-card>
                <x-slot name="header">
                    Master Data Sampah
                </x-slot>

                <x-table class="table-sampah">
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Kapasitas</th>
                            <th>Ketinggian</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
@endsection

@include('sampah.scripts')
