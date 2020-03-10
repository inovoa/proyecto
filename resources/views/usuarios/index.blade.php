
@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
</div>

@endif

<a href="{{ url('usuarios/create') }}" class="btn btn-success">Agregar usuario</a>
<br/>
<br/>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $usuario->Nombre }} {{ $usuario->Apellidos }}</td>
            <td>{{ $usuario->Correo }}</td>
            <td>{{ $usuario->Telefono }}</td>
            <td>
                
            <a class="btn btn-warning" href="{{ url('/usuarios/'.$usuario->id.'/edit') }}">
            Editar
            </a> 

            <form method="post" action="{{ url('/usuarios/'.$usuario->id) }}" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $usuarios->links() }}
</div>
@endsection
