@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">EDITAR PRECIOS</p>
        <a href="{{ route('precios.index')}}" class="btn btn-default">Listado</a>
        <h2>
            {{ $cliente->name }}
            
        </h2>
        @include('clientes.aside.error')
        {!! Form::model($cliente,['route'=>['clientes.update',$cliente->id],'method'=>'PUT']) !!}
        
        @include('clientes.aside.form')

        {!! Form::close() !!}

  <div>
  @include('clientes.aside.asaide')
</div>
            
</div>

@endsection