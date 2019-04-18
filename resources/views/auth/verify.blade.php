@extends('layouts.app')

@section('content')
<section class="auth-page">
    <h1>Conta Não Verificada</h1>
    <p>
        Antes de continuar, por favor acesse o link enviado para seu email para verificar a conta. <br />
        Se você não recebeu o email, <a href="{{ route('verification.resend') }}">clique aqui para solicitar outro</a>.
    </p>

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            Um novo link de verificação foi enviado para seu email.
        </div>
    @endif
</section>
@endsection

@section('dependencies')
<link href="{{ asset('css/pages/authentication.css') }}" rel="stylesheet" />
@endsection