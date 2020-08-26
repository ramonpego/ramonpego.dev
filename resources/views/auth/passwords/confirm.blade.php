@extends('auth.layout')

@section('header') <p class="text_sm"> Confirme sua senha antes de prosseguir. </p> @endsection

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}"> @csrf
        <fieldset>
            <div class="form-group">
                <label for="password"> Senha </label>
                <input id="password" type="password" class="form-control line @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
            </div>

            <div class="row p-2">
                <div class="form-group col text-right">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}"> Esqueceu a senha? </a>
                    @endif
                </div>
            </div>

            <div class="form-group text-center">
                <div class="form-group">
                    <button type="submit" class="button"> Confirmar </button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
