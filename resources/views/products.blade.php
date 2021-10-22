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

            <h2 id="web">
                Web-based
                <br />
                <small class="text-muted">
                    For a variety of websites and tools.
                </small>
            </h2>

            <section class="productPricing">

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header center">
                            Full website
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title pricings">
                                £24 <small class="text-muted">/ mo</small>
                            </h1>

                            <p class="card-text">
                                <ul>
                                    <li>Most popular</li>
                                    <li>Professional websites</li>
                                    <li>Personal websites</li>
                                </ul>
                            </p>

                            <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                        </div>
                    </div>
                </div>

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header center">
                            Single-page application
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title pricings">
                                £10 <small class="text-muted">/ mo</small>
                            </h1>

                            <p class="card-text">
                                <ul>
                                    <li>Landing pages</li>
                                    <li>Performance dashboard</li>
                                    <li>Wizard applications</li>
                                </ul>
                            </p>

                            <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                        </div>
                    </div>
                </div>

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header center">
                            Browser-based game
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title pricings">
                                £19 <small class="text-muted">/ mo</small>
                            </h1>

                            <p class="card-text">
                                <ul>
                                    <li>MMORPG</li>
                                    <li>Admin dashboards</li>
                                    <li>Scalable solution</li>
                                </ul>
                            </p>

                            <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                        </div>
                    </div>
                </div>

            </section>

            <hr />

            <h2 id="IoT">
                IoT/Hybrid
                <br />
                <small class="text-muted">
                    For projects integrating between software and hardware.
                </small>
            </h2>

            <section class="productPricing">

                <div class="card bg-light mb-3 productItem">
                    <div class="card-header center">
                        IoT project
                    </div>
                    <div class="card-body">

                        <h1 class="card-title pricing-card-title pricings">
                            £99 <small class="text-muted">/ mo</small>
                        </h1>

                        <p class="card-text">
                            <ul>
                                <li>Web-based</li>
                                <li>Frontend monitors</li>
                                <li>Control hardware</li>
                            </ul>
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                    </div>
                </div>

                <div class="card bg-light mb-3 productItem">
                    <div class="card-header center">
                        Microcontroller
                    </div>
                    <div class="card-body">

                        <h1 class="card-title pricing-card-title pricings">
                            £99 <small class="text-muted">/ mo</small>
                        </h1>

                        <p class="card-text">
                            <ul>
                                <li>Full life cycle</li>
                                <li>Comprehensive testing</li>
                                <li>Bring projects to life</li>
                            </ul>
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                    </div>
                </div>

            </section>

            <hr />
            
            <h2 id="Custom">
                Custom
                <br />
                <small class="text-muted">
                    Get in touch to discuss your custom projects.
                </small>
            </h2>

            <section class="productPricing">

                <div class="card bg-light mb-3 productItem">
                    <div class="card-header center">
                        Custom project
                    </div>
                    <div class="card-body">

                        <h1 class="card-title pricing-card-title pricings">
                            £<small class="text-muted">TBC</small>
                        </h1>

                        <p class="card-text">
                            Please enquire about custom project requests.
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
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
