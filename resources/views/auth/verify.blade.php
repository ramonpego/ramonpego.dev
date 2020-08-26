@extends('auth.layout')

@section('header') <p class="text_sm"> Verifique seu endereço de e-mail. </p> @endsection

@section('content')
    <div class="">
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                <p class="text"> Um novo link de verificação foi enviado para o seu endereço de e-mail. </p>
            </div>
        @endif

        <p class="text"> Antes de continuar, verifique seu e-mail para obter um link de verificação. </p>
        <p class="text"> Se você não recebeu o email </p>

        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}"> @csrf
            <button type="submit" class="button"> clique aqui para solicitar outro </button>.
        </form>
    </div>
@endsection
