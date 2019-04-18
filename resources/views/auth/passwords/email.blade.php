@extends('layouts.app')

@section('content')
<section class="auth-page">
    <h1>Restaurar Senha</h1>
    <p>
        Use o formulário abaixo para solicitar uma recuperação de senha.
    </p>
    
    <form id="login-form" method="POST" action="{{ route('password.email') }}">
        @csrf
 
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>Email não encontrado</strong>
                    </span>
                @endif
            </div>
        </div>

        <div style="text-align: center">
            <button type="submit" class="btn btn-primary">
                Solicitar Recuperação
            </button>
        </div>
    
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                Email de recuperação enviado com sucesso
            </div>
        @endif
    </form>
</section>
@endsection
@section('dependencies')
<link href="{{ asset('css/pages/authentication.css') }}" rel="stylesheet" />
<script src="{{ asset('js/app.js') }}"></script>
@endsection