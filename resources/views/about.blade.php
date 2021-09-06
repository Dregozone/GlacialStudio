<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title><?= Route::currentRouteName(); ?> - Glacial Studio</title>

    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main>
            <h1 class="heading">About</h1>

            <p class="center">
                Using a range of the latest technologies and taking a streamlined approach to development with focus on fast,
                efficient design, I aim to provide sleek web applications with a unique eye for user-experience that will leave your
                clients fulfilled.
            </p>

            <ul>
                <li> Effective solutions </li>
                <li> Affordable pricing </li>
                <li> Striving for customer satisfaction </li>
                <li> Clear timeframes for delivery </li>
            </ul>

        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
