
@extends('base')
@section('title', 'Home')
@section('content')

<div class="center">
    <h1>S'inscrire</h1>

    <form method="POST" action="/register">
    @csrf
    <input type="text" name="name" placeholder="Nom"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Mot de passe"><br>
    <button type="submit">S'inscrire</button>
</form>

</div>

@endsection
