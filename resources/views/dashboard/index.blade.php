@extends('layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    @includeIf('dashboard.grafik_chart')
@endsection
