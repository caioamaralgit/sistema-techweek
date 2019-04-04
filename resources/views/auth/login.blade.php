@extends('layouts.app')

@section('content')
<section id="login-page">
    <h1>Login</h1>
    <p>
        Acesse sua conta, atividades e certificados.
    </p>
    
    <form id="login-form" method="POST" action="{{ route('login') }}">
        @csrf
 
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>Email ou senha incorreta</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        Lembrar-me
                    </label>
                </div>
            </div>
        </div>

        <div style="text-align: center">
            <button type="submit" class="btn btn-primary">
                Login
            </button>

            @if (Route::has('password.request'))
                <br />
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Esqueceu sua senha?
                </a>
            @endif
        </div>
    </form>
</section>
@endsection
@section('dependencies')
<link href="{{ asset('css/pages/authentication.css') }}" rel="stylesheet" />
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/pages/login.js') }}"></script>
@endsection