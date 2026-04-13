{{-- resources/views/layouts/app.blade.php --}}
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'École privée chrétienne')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="{{ route('home') }}">
            <img class="brand__logo" src="{{ asset('images/logo.png') }}" alt="Logo école">
            <span class="brand__name">Ecole chrétienne la Côte</span>
        </a>

        <nav class="nav">
            <a class="nav__link" href="#accueil">Accueil</a>
            <a class="nav__link" href="#notre-ecole">Notre école</a>
            <a class="nav__link" href="#infos-pratiques">Infos pratiques</a>
            <a class="nav__link" href="#contact">Contact</a>
        </nav>

        <div class="nav-actions">
            <a class="btn btn--primary btn--header" href="{{ route('inscription') }}">
                Inscription
            </a>

            <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false">
                ☰
            </button>
        </div>

        
    </div>
</header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container footer-wrap">
            <p>© {{ date('Y') }} — École privée chrétienne</p>
        </div>
    </footer>
</body>
</html>