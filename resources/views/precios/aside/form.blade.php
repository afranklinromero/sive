<div class="form-group">
    {!! Form::label('name','Nombre de Distribuidor') !!}
    {!! Form::text('name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('viacha','Precio de viacha') !!}
    {!! Form::number('viacha',null,['step' => 'any','class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('yazul','Precio de Yura Azul') !!}
    {!! Form::number('yazul',null,['step' => 'any','class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('yrojo','Precio de Yura Rojo') !!}
    {!! Form::number('yrojo',null,['step' => 'any','class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ route('precios.index')}}" class="btn btn-info"> VOLVER</a>
</div>