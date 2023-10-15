@extends('layout')
@section('content')
<main>
    <h1>Inscription</h1>

    <form action="{{ route('auth.register') }}" method="post">
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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

        <div class="form-group">
            <label for="confirmedPassword">Confirmation du mot de passe :</label>
            <input type="password" name="confirmedPassword" id="confirmedPassword" value="{{ old('confirmedPassword') }}">
        </div>

        <input class="btn-form" type="submit" value="S'inscrire">
    </form>
</main>
@endsection
