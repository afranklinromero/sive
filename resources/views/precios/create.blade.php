@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">CREAR</p>
      
            
    @include('precios.aside.error')


 
{!! Form::open(['route'=>'precios.store']) !!}
        
@include('precios.aside.form')

{!! Form::close() !!}
@endsection

</div>