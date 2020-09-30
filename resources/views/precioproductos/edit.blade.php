@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">EDITAR PRECIOS</p>
        <a href="{{ route('precioproductos.index')}}" class="btn btn-default">Listado</a>
        <h2>
            {{ $precioproducto->id }}
            
        </h2>
        @include('precioproductos.aside.error')
        {!! Form::model($precioproducto,['route'=>['precioproductos.update',$precioproducto->id],'method'=>'PUT']) !!}
        
        @include('precioproductos.aside.form')

        {!! Form::close() !!}

  <div>
  @include('precioproductos.aside.asaide')
</div>
            
</div>

@endsection