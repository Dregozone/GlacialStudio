<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title><?= Route::currentRouteName(); ?> - Glacial Studio</title>

        <link rel="stylesheet" type="text/css" href={{ asset('css/about.css') }} />
    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main>
            <h1 class="heading">About</h1>

            <section class="centerContent aboutPara">
                <p class="center">
                    Using a range of the latest technologies and taking a streamlined approach to development with focus on fast,
                    efficient design, I aim to provide sleek web applications with a unique eye for user-experience that will leave your
                    clients fulfilled.
                </p>
            </section>

            <section class="centerContent">
                <ul>
                    <li> Effective solutions </li>
                    <li> Affordable pricing </li>
                    <li> Striving for customer satisfaction </li>
                    <li> Clear timeframes for delivery </li>
                </ul>
            </section>

            <div class="aboutSplitter">

                <div class="technologyTable">
                    <h3>Technologies used:</h3>

                    <table class="technologyTable">
                        <tr>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('images/technologies/php.jpg') }}" alt="PHP Logo" /> </td>
                            <td class="techName">PHP</td>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('images/technologies/aws.jpg') }}" alt="AWS Logo" /> </td>
                            <td class="techName">AWS</td>
                        </tr>
                        <tr>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('images/technologies/laravel.jpg') }}" alt="Laravel Logo" /> </td>
                            <td class="techName">Laravel</td>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('images/technologies/react.jpg') }}" alt="React Logo" /> </td>
                            <td class="techName">React</td>
                        </tr>
                        <tr>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('images/technologies/javascript.jpg') }}" alt="Javascript Logo" /> </td>
                            <td class="techName">Javascript</td>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('images/technologies/bootstrap.jpg') }}" alt="Bootstrap Logo" /> </td>
                            <td class="techName">Bootstrap</td>
                        </tr>
                    </table>
                </div>


                <div class="technologyTable">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('images/Anders.jpg') }}" alt="Photo of Anders">

                        <div class="card-body">
                            <h5 class="card-title">Anders Learmonth</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
