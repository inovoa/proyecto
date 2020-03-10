

<div class="form-group">
    
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':'' }}" name="Nombre" id="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:old('Nombre') }}">
{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="Apellidos" class="control-label">{{'Apellidos'}}</label>
<input type="text" class="form-control {{$errors->has('Apellidos')?'is-invalid':'' }}" name="Apellidos" id="Apellidos" value="{{ isset($usuario->Apellidos)?$usuario->Apellidos:old('Apellidos') }}">
{!! $errors->first('Apellidos','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control {{$errors->has('Correo')?'is-invalid':'' }}" name="Correo" id="Correo" value="{{ isset($usuario->Correo)?$usuario->Correo:old('Correo') }}">
{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<input type="tel" class="form-control {{$errors->has('Telefono')?'is-invalid':'' }}" name="Telefono" id="Telefono" value="{{ isset($usuario->Telefono)?$usuario->Telefono:old('Telefono') }}">
{!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}

</div>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

<a href="{{ url('usuarios') }}" class="btn btn-primary">Volver atras</a>
 