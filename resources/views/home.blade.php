@extends('layouts.app')

@section('content')
<link rel="icon" href="{{ URL::asset('/css/favicon.png') }}" type="image/x-icon" />
<div class="container">
    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel de control</div>

                </div>
                <br><br>
                <a class="btn btn-primary" href="{{ route('users') }}">{{ __('Ver mis datos') }}</a>
                <a class="btn btn-primary" href="{{ route('citas.index' ) }}">{{ __('Ver mis citas') }}</a>
            </div>
        </div>
    </div>
</div>

@endsection