
@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
</div>

@endif

<a href="{{ url('citas/create') }}" class="btn btn-success">Agregar cita</a>
<br/>
<br/>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <!--<th>#</th>-->
            <th>Dia</th>
            <th>Hora</th>
            <th>Marca y modelo del coche</th>
            <th>Año del coche</th>
            <th>Color del coche</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($citas as $cita)
        <tr>
            <!--<td>{{$loop->iteration}}</td>-->
            <td>{{ $cita->Dia }}</td>
            <td>{{ $cita->Hora }}</td>
            <td>{{ $cita->MarcaModeloCoche }}</td>
            <td>{{ $cita->AñoCoche }}</td>
            <td>{{ $cita->Color }}</td>
            <td>{{ $cita->Telefono }}</td>
            <td>
                
            <a class="btn btn-primary" href="{{ url('/citas/'.$cita->id.'/edit') }}">
            Editar
            </a> 

            <form method="post" action="{{ url('/citas/'.$cita->id) }}" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $citas->links() }}
</div>
@endsection
