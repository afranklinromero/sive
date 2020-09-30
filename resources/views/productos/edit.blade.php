@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">EDITAR PRECIOS</p>
        <a href="{{ route('productos.index')}}" class="btn btn-default">Listado</a>
        <h2>
            {{ $producto->nombre }}
            
        </h2>
        @include('productos.aside.error')
        {!! Form::model($producto,['route'=>['productos.update',$producto->id],'method'=>'PUT']) !!}
        
        @include('productos.aside.form')

        {!! Form::close() !!}

  <div>
  @include('productos.aside.asaide')
</div>
            
</div>

@endsection