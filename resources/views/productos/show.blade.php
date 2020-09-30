@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">PRODUCTO</p>
        <h2>
            {{ $producto->nombre }} 
            
        </h2>
        <p>
            <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th scope="col">Precio compra</th>
                    <th scope="col">Fecha creacion</th>
                    <th scope="col">Fecha modificacion</th>
                    <th scope="col">estado</th>
                          
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $producto->preciocompra}}</td>
                        <td> {{ $producto->created_at}}</td>
                        <td> {{ $producto->updated_at}}</td>
                        <td> {{ $producto->estado}}</td>
                    <tr>
                </tbody>
              </table>

            <a href="{{route ('productos.edit', $producto->id)}}"class="btn btn-warning mr-1">EDITAR </a><a href="{{ route('productos.index')}}" class="btn btn-info"> VOLVER</a>
             
        </p>

            
</div>


 

@endsection