@extends('layouts.app')

@section('content')

<link rel="icon" href="{{ URL::asset('/css/favicon.png') }}" type="image/x-icon" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('El email de verificación ha sido enviado a su correo.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor, busca en tu email tu enlace de verificación.') }}
                    {{ __('Si no recibiste el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Pincha aquí para enviar otro email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
