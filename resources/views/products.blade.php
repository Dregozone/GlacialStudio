<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title><?= Route::currentRouteName(); ?> - Glacial Studio</title>

        <link rel="stylesheet" href="{{ asset('css/products.css') }}" />

    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main>
            <h1 class="heading">Products</h1>

            <h2>
                Web-based
                <br />
                <small class="text-muted">
                    For websites and tools.
                </small>
            </h2>

            <section class="productPricing">

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header">
                            Full website
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">
                                Professional or personal websites.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header">
                            Single-page application
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header">
                            Browser-based game
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Light card title</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>

            </section>

            <hr />

            <h2>
                IoT/Hybrid
                <br />
                <small class="text-muted">
                    For projects integrating between software and hardware.
                </small>
            </h2>

            <section class="productPricing">

                <div class="card bg-light mb-3 productItem">
                    <div class="card-header">
                        IoT project
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">
                            Web-based front-end monitors and controls hardware.
                        </p>
                    </div>
                </div>

                <div class="card bg-light mb-3 productItem">
                    <div class="card-header">
                        Microcontroller
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">
                            Design, build, programming and test to bring your microcontroller project to life.
                        </p>
                    </div>
                </div>

            </section>

            <hr />
            
            <h2>
                Custom
                <br />
                <small class="text-muted">
                    Get in touch to discuss your custom projects.
                </small>
            </h2>

            <section class="productPricing">

                <div class="card bg-light mb-3 productItem">
                    <div class="card-header">
                        Custom project
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Light card title</h5>
                        <p class="card-text">
                        Please enquire about custom project requests.
                        </p>
                    </div>
                </div>

            </section>


            <p class="info">
                <a href="contact">
                    Enquire
                </a>

                for an accurate quote or to request more information.
            </p>

        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
