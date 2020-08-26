@extends('layouts.app')

@section('header') <p class="text_sm"> Cadastre a nova senha. </p> @endsection

@section('content')
    <form method="POST" action="{{ route('password.update') }}"> @csrf
        <fieldset>
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label for="email"> E-mail </label>
                <input id="email" type="email" class="form-control line @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
            </div>

            <div class="form-group">
                <label for="password"> Senha </label>
                <input id="password" type="password" class="form-control line @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm"> Confirme a senha </label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group text-center">
                <div class="form-group">
                    <button type="submit" class="button"> Confirmar </button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
