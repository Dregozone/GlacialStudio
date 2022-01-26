<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title') - {{ config('app.name') }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel='shortcut icon' type='image/x-icon' href={{ asset('favicon.ico') }} />

        <!-- SEO -->
        <meta name="author" content="Anders Learmonth, Glacial Studio" />
        <meta name="description" content="Creative web solutions, always client-focused with your project in mind. Discover your dream website with Glacial Studio." />
        <meta name="keywords" content="glacial,studio,web,design,solutions,client-focused,programmer,coder,basingstoke,hampshire,england,creative,efficient,browsing,anders,learmonth" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="{{ asset('css/shared.css') }}" />
    </head>
    <body>
    
        <header>
            <section class="logos">
                <a href="{{ route('home') }}">
                    <img class="logoSm fading" src="{{ asset('img/branding/Logo-small.png') }}" alt="Glacial Studio small logo" aria-label="Glacial Studio small logo" />
                </a>
        
                <a href="{{ route('home') }}">
                    <img class="logoLg fading" src="{{ asset('img/branding/Logo.png') }}" alt="Glacial Studio large logo" aria-label="Glacial Studio large logo" />
                </a>
            </section>

            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                    <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>

            <section class="socials">
                <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank" rel="noopener" aria-label="Facebook">
                    <i class="bi bi-facebook socialsRounded fading" style="font-size: 1.4rem; color: #3b5998;"></i>
                </a>
    
                <a href="https://www.linkedin.com/in/andreas-learmonth-982318a1/" target="_blank" rel="noopener" aria-label="LinkedIn">
                    <i class="bi bi-linkedin socialsRounded fading" style="font-size: 1.4rem; color: #0077b5;"></i>
                </a>
    
                <a href="https://github.com/Dregozone" target="_blank" rel="noopener" aria-label="GitHub">
                    <i class="bi bi-github socialsRounded fading" style="font-size: 1.4rem; color: black;"></i>
                </a>
            </section>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <section>
                <ul>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('news') }}">News</a></li>
                </ul>

                <ul>
                    <li><a href="{{ route('tos') }}">Terms of Service</a></li>
                    <li><a href="{{ route('pp') }}">Privacy Policy</a></li>
                    <li><a href="">Site Map</a></li>
                </ul>
            </section>

            <section class="copy">
                Glacial Studio &copy; Copyright {{ now()->year }}
            </section>
        </footer>
    </body>
</html>
