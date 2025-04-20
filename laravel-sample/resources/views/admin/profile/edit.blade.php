@extends('adminlte::page')

@section('content_header')
    <h1>ユーザー設定</h1>
@stop

@section('content')
<x-adminlte-card>
@include('admin.profile.partials.update-profile-information-form')
@include('admin.profile.partials.update-password-form')
</x-adminlte-card>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop
