@extends('layouts.app')

@section('title', 'Data Jenis Sampah')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item">Data Jenis Sampah</li>
    <li class="breadcrumb-item active">Organik</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <x-card>
                <x-slot name="header">
                    Data Jenis Sampah Organik
                </x-slot>
                <x-table class="table-sampah">
                    <x-slot name="thead">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Data Sensor (Cm)</th>
                            <th>Ketinggian %</th>
                            <th>Status</th>
                        </tr>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
@endsection
@include('includes.datatable')

@push('scripts')
    <script>
        let table;
        let modal = '#modal-form';
        let button = '#submitBtn';

        $(function() {
            $('#spinner-border').hide();
        });

        table = $('.table').DataTable({
            processing: false,
            serverSide: true,
            autoWidth: false,
            responsive: true,
            ajax: {
                url: '{{ route('organik.data') }}',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'tanggal',
                },
                {
                    data: 'jam',
                },
                {
                    data: 'value',
                },
                {
                    data: 'kapasitas',
                },
                {
                    data: 'status',
                },
            ]
        });
    </script>
@endpush
