@extends('adminlte::page')

@section('content_header')
    <h1>管理ユーザー一覧</h1>
@stop

@section('content')
<x-adminlte-card>
    <x-adminlte-datatable id="table1" :heads="$heads" :config="$config" />
</x-adminlte-card>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
