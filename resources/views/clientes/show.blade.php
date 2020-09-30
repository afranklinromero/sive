@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">PRECIOS</p>
        <h2>
            {{ $cliente->apellidos }}, {{ $cliente->nombres }} 
            
        </h2>
        <p>
            <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th scope="col">Id</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                          
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $cliente->id}}
                        </td>
                        </td>
                        <td> {{ $cliente->telefono}}
                        </td>
                        <td> {{ $cliente->direccion}}
                        </td>
                       
                    <tr>
                </tbody>
              </table>

            <a href="{{route ('clientes.edit', $cliente->id)}}"class="btn btn-warning mr-1">EDITAR </a><a href="{{ route('clientes.index')}}" class="btn btn-info"> VOLVER</a>
             
        </p>

            
</div>


 

@endsection