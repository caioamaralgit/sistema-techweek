@extends('layouts.app')

@section('content')
<section id="register-page">
    <h1>Registro de Usuário</h1>
    <p>
        Caso ainda não tenha um usuário, cadastre-se no formulário abaixo. <br />
        Caso já possua, mas esqueceu a senha, <a href="/password/reset">clique aqui</a>.
    </p>
    <form id="register-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Insira seu nome..." required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" onblur="checkEmail()" class="form-control" name="email" value="{{ old('email') }}" placeholder="Insira seu email..." required>
                <span class="invalid-feedback" role="alert">
                    <strong>Email já utilizado!</strong>
                </span>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

            <div class="col-md-6">
                <input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Deve ter pelo menos 6 caracteres' : ''); if (this.checkValidity()) form.password_confirmation.pattern = this.value;" placeholder="Insira sua senha..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Senha</label>

            <div class="col-md-6">
                <input id="password-confirm" class="form-control" name="password_confirmation" type="password" pattern="^\S{6,}$" onblur="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor coloque a mesma senha' : '');" placeholder="Confirme a senha..." required>
            </div>
        </div>

        <div style="text-align: center">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</section>
@endsection
@section('dependencies')
<link href="{{ asset('css/pages/register.css') }}" rel="stylesheet" />
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/pages/register.js') }}"></script>
@endsection