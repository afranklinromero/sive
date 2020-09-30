@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">CREAR</p>
            
    @include('precioproductos.aside.error')
 
    {!! Form::open(['route'=>'precioproductos.store']) !!}
        
        @include('precioproductos.aside.form')

    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#producto_id').change(function(){
            var $route = $('#obtenerpreciocompra').attr('href');
            console.log('ruta:' + $route);
            var producto_id = $('#producto_id').val();
            //$('#preciocompra').val(cliente_id);
            //alert(cliente_id);
            $.get($route, {id: producto_id}, function( data ) {
                $( "#preciocompra" ).val( data );
                //alert( "Load was performed." );
              });
        })
    });
</script>


@endsection

