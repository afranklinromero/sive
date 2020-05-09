@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">EDITAR PRECIOS</p>
        <a href="{{ route('precios.index')}}" class="btn btn-default">Listado</a>
        <h2>
            {{ $precios->name }}
            
        </h2>
        @include('precios.aside.error')
        {!! Form::model($precios,['route'=>['precios.update',$precios->id],'method'=>'PUT']) !!}
        
        @include('precios.aside.form')

        {!! Form::close() !!}

  <div>
  @include('precios.aside.asaide')
</div>
            
</div>

@endsection