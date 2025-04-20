@extends('adminlte::page')

@section('content_header')
    <h1>管理ユーザー新規登録</h1>
@stop

@section('content')
<x-adminlte-card>
    <form action="{{ route('admin.user.register') }}" method="post">
        @csrf

        <x-adminlte-input name="name" label="{{ __('Name') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" :value="old('name')" />
        <x-adminlte-input name="email" label="{{ __('Email') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" :value="old('email')" />
        <x-adminlte-input name="password" type="password" label="{{ __('Password') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" />
        <x-adminlte-input name="password_confirmation" type="password" label="{{ __('Confirm Password') }}" fgroup-class="row col-4" label-class="col-3 col-form-label" igroup-class="col-8" />

        <x-adminlte-button label="{{ __('Register') }}" type="submit" />

        @if (session('status') === 'ok')
        <div class="text-sm"><x-adminlte-alert theme="success" title="{{ __('Saved.') }}"  dismissable/></div>
        @endif
    </form>
</x-adminlte-card>
@stop
