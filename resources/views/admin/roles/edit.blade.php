@extends('adminlte::page')
@section('title', 'Sanar')
@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            @include('admin.roles.partials.form')
            

            {!! Form::submit('Actualizar Role', ['class' => 'btn btn-primary mt-2']) !!}

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
<script>
    @if(session('info'))
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: ' El Rol se actualizó correctamente!! ' ,
        showConfirmButton: false,
        timer: 1500
      })
    @endif
</script>
@stop