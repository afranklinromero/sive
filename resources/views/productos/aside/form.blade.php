<div class="form-group">
    {!! Form::label('nombre','Descripcion producto') !!}
    {!! Form::text('nombre',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('preciocompra','Precio de compra') !!}
    {!! Form::number('preciocompra',null,['step' => 'any','class'=>'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR',['step' => 'any','class'=>'btn btn-success']) !!}
    <a href="{{ route('productos.index')}}" class="btn btn-info"> VOLVER</a>
</div>