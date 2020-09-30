<div class="form-group">
    {!! Form::label('cinit','Cedula de identidad / NIT') !!}
    {!! Form::text('cinit',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('nombres','Nombre de Distribuidor') !!}
    {!! Form::text('nombres',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('apelidos','Apellido Distribuidor') !!}
    {!! Form::text('apellidos',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('telefono','Número telefonico') !!}
    {!! Form::text('telefono',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('direccion','Direccion') !!}
    {!! Form::textarea('direccion',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ route('clientes.index')}}" class="btn btn-info"> VOLVER</a>
</div>