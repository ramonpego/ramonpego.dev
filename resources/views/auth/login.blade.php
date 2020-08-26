@extends('auth.layout')

@section('header') <p class="text_sm"> Informe suas credenciais para logar. </p> @endsection

@section('content')
    <form method="POST" action="{{ route('login') }}"> @csrf
        <fieldset>
            <div class="form-group">
                <label for="email"> E-mail </label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
            </div>

            <div class="form-group">
                <label for="password"> Senha </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
            </div>

            <div class="row p-2">
                <div class="form-group col">
                    <div class="checkbox_ custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember"> Lembrar-me </label>
                    </div>
                </div>

                <div class="form-group col text-right">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}"> Esqueceu a senha? </a>
                    @endif
                </div>
            </div>

            <div class="form-group text-center">
                <div class="form-group">
                    <button type="submit" class="button button_solid"> Logar </button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
