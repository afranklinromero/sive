@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                     @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador
                            Bienvenido . {{ auth()->user()->name }} </h4>

                        </div>
                    @else 
                        <div>Acceso usuario
                            Bienvenido . {{ auth()->user()->name }} </h4>

                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
