
@extends('layouts.app')

@section('content')

<link rel="icon" href="{{ URL::asset('/css/favicon.png') }}" type="image/x-icon" />

<div class="container">

<form action="{{ url('/citas/' . $cita->id) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
@include('citas.form', ['Modo' => 'editar'])

</form>

</div>
@endsection
