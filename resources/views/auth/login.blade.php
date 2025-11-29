
@extends('base')
@section('title', 'Medecin')
@section('content')

<h1>Login</h1>

<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Mot de passe">
    <button type="submit">Connexion</button>
</form>

@endsection
