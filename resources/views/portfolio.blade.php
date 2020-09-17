<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title><?= Route::currentRouteName(); ?> - Glacial Studio</title>

        <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" />

    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main>
            <h1 class="heading">Portfolio</h1>

            <section class="projectGroup">

                <article class="project">
                    <img class="project" src="{{ asset('images/adscreens.jpg') }}" alt="adscreens portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/FaceFacts.jpg') }}" alt="Face facts clinic portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/i-walk.jpg') }}" alt="i-walk portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/HolisticVision.jpg') }}" alt="Holistic Vision portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/Dregozone.jpg') }}" alt="Dregozone portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/BlingWing.jpg') }}" alt="Bling Wing portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/MutualAssuredDestruction.jpg') }}" alt="Mutual Assured Destruction portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/EnergizedGaming.jpg') }}" alt="Energized Gaming portfolio" />
                </article>

                <article class="project">
                    <img class="project" src="{{ asset('images/Dregonia.jpg') }}" alt="Dregonia portfolio" />
                </article>

            </section>
        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
