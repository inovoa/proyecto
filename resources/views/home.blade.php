@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Panel de control</div>

            </div>
            <br><br>
            <a class="btn btn-primary" href="{{ route('home') }}">{{ __('Ver mis datos') }}</a>
            <a class="btn btn-primary" href="{{ route('citas.index') }}">{{ __('Ver mis citas') }}</a>
        </div>
    </div>
</div>
</div>
@endsection