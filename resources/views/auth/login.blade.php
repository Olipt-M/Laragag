@extends('layout')
@section('content')
<main>
    <h1>Connexion</h1>

    <form action="{{ route('auth.login') }}" method="post">
        <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" value="{{ old('pseudo') }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail :</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
        </div>

        <input type="submit" value="Connexion">
    </form>
</main>
@endsection
