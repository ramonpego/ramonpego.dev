@extends('layouts.app')

@section('header') <p class="text_sm"> Informe o e-mail para uma nova senha. </p> @endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert"> {{ session('status') }} </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}"> @csrf
        <fieldset>
            <div class="form-group">
                <label for="email"> E-mail </label>
                <input id="email" type="email" class="form-control line @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email') <span class="invalid-feedback" role="alert"> <strong> {{ $message }} </strong> </span> @enderror
            </div>

            <div class="form-group text-center">
                <div class="form-group">
                    <button type="submit" class="button"> Enviar link </button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
