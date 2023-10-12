<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Laragag</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}">Laragag</a>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('auth.loginForm') }}">Connexion</a></li>
                <li><a href="{{ route('auth.registerForm') }}">Inscription</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>@copyright Babar 2023</p>
    </footer>
</body>
</html>
