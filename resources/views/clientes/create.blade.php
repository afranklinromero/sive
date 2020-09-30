@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">CREAR</p>
      
            
    @include('clientes.aside.error')


 
{!! Form::open(['route'=>'clientes.store']) !!}
        
@include('clientes.aside.form')

{!! Form::close() !!}
@endsection

</div>