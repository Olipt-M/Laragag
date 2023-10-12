@extends('layout')
@section('content')
<main>
    <h1>Inscription</h1>

    <form action="{{ route('auth.register') }}" method="post">
        <div class="form-group">
            <label for="pseudo">Pseudo :</label>
            <input type="text" name="pseudo" id="pseudo" value="{{ old('pseudo') }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail :</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="confirmedEmail">Confirmation de l'e-mail :</label>
            <input type="email" name="confirmedEmail" id="confirmedEmail" value="{{ old('confirmedEmail') }}">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" value="{{ old('password') }}">
        </div>

        <div class="form-group">
            <label for="confirmedPassword">Confirmation du mot de passe :</label>
            <input type="confirmedPassword" name="confirmedPassword" id="confirmedPassword" value="{{ old('confirmedPassword') }}">
        </div>

        <input type="submit" value="S'inscrire">
    </form>
</main>
@endsection
