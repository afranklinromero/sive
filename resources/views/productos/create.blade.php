@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">CREAR</p>
      
            
    @include('productos.aside.error')


 
{!! Form::open(['route'=>'productos.store']) !!}
        
@include('productos.aside.form')

{!! Form::close() !!}
@endsection

</div>