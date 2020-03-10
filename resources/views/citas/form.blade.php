

<div class="form-group">
    
<label for="Dia" class="control-label">{{'Dia'}}</label>
<input type="text" class="form-control {{$errors->has('Dia')?'is-invalid':'' }}" name="Dia" id="Dia" value="{{ isset($cita->Dia)?$cita->Dia:old('Dia') }}">
{!! $errors->first('Dia','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="Hora" class="control-label">{{'Hora'}}</label>
<input type="text" class="form-control {{$errors->has('Hora')?'is-invalid':'' }}" name="Hora" id="Hora" value="{{ isset($cita->Hora)?$cita->Hora:old('Hora') }}">
{!! $errors->first('Hora','<div class="invalid-feedback">:message</div>') !!}
</div>

<div class="form-group">
<label for="MarcaModeloCoche" class="control-label">{{'Marca y modelo del coche'}}</label>
<input type="text" class="form-control {{$errors->has('MarcaModeloCoche')?'is-invalid':'' }}" name="MarcaModeloCoche" id="MarcaModeloCoche" value="{{ isset($cita->MarcaModeloCoche)?$cita->MarcaModeloCoche:old('MarcaModeloCoche') }}">
{!! $errors->first('MarcaModeloCoche','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="AñoCoche" class="control-label">{{'Año del coche'}}</label>
<input type="text" class="form-control {{$errors->has('AñoCoche')?'is-invalid':'' }}" name="AñoCoche" id="AñoCoche" value="{{ isset($cita->AñoCoche)?$cita->AñoCoche:old('AñoCoche') }}">
{!! $errors->first('AñoCoche','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="Color" class="control-label">{{'Color del coche'}}</label>
<input type="text" class="form-control {{$errors->has('Color')?'is-invalid':'' }}" name="Color" id="Color" value="{{ isset($cita->Color)?$cita->Color:old('Color') }}">
{!! $errors->first('Color','<div class="invalid-feedback">:message</div>') !!}

</div>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

<a href="{{ url('citas') }}" class="btn btn-primary">Volver atras</a>
 