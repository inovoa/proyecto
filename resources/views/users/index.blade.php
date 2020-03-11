
@extends('layouts.app')

@section('content')

<div class="container">

<table class="table table-light table-hover">
                    <thead class="thead-light">
                        <tr>
                            <!--<th>#</th>-->
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <!--<td>{{$loop->iteration}}</td>-->
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</div>
@endsection
