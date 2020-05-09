@extends('layouts.app')

@section('content')
<div class="container">
    <p class="h4 text-success text-center">PRECIOS</p>
        <h2>
            {{ $precios->name }} 
            
        </h2>
        <p>
            <table class="table table-striped">
                <thead>
                  <tr>
                    
                    <th scope="col">Viacha</th>
                    <th scope="col">Yura Azul</th>
                    <th scope="col">Yura Rojo</th>
                          
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $precios->viacha}}
                        </td>
                        <td> {{ $precios->yazul}}
                        </td>
                        <td> {{ $precios->yrojo}}
                        </td>
                       
                    <tr>
                </tbody>
              </table>

            <a href="{{route ('precios.edit', $precios->id)}}"class="btn btn-warning mr-1">EDITAR </a><a href="{{ route('precios.index')}}" class="btn btn-info"> VOLVER</a>
             
        </p>

            
</div>


 

@endsection