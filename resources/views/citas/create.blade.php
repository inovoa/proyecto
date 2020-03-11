
@extends('layouts.app')

@section('content')

<link rel="icon" href="{{ URL::asset('/css/favicon.png') }}" type="image/x-icon" />
<div class="container">

@if(count($errors)>0)

<!--<div class="alert alert-danger" role="alert">-->
<div>
    <!--<ul>
        @foreach($errors->all() as $error)

        <li> {{ $error }} </li>

        @endforeach
    </ul>-->

</div>
@endif

<form action="{{ url ('/citas')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

@include('citas.form', ['Modo' => 'crear'])



</form>

</div>
@endsection