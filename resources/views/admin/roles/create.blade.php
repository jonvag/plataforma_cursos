@extends('adminlte::page')
@section('title', 'Sanar')
@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
                @include('admin.roles.partials.form')
                

                {!! Form::submit('Crear Role', ['class' => 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>

       {{--  <x-alert /> --}}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')

@stop