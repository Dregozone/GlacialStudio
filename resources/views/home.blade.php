<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title>Glacial Studio - Web Solutions</title>

        <link rel="stylesheet" type="text/css" href={{ asset('css/home.css') }} />
    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main class="center">

            <section class="gradient">
                <h1>Glacial Studio</h1>

                <h2>Innovative Web Solutions</h2>

                <a href="contact">
                    <div class="btn callToAction socialsRounded">
                        Enquire to realise your vision
                    </div>
                </a>

                <div class="py-3">
                    <h3>About</h3>

                    <blockquote class="blockquote">
                        <p class="mb-0 small">
                            "I set up Glacial Studio with a goal to provide affordable, effective web solutions.
                            I strive for customer satisfaction, setting deliverables and clear timeframes upfront
                            and am always working towards your dream solution"
                        </p>

                        <footer class="blockquote-footer smaller">
                            <cite title="Source Title">
                                Anders Learmonth
                            </cite>

                            MSc. (Software Engineer, Glacial Studio)
                        </footer>
                    </blockquote>
                </div>

            </section>

            <section class="gradient">

                <div class="container px-4 py-3" id="featured-3">

                    <h3>Products</h3>

                    <div class="row g-4 row-cols-1 row-cols-lg-3 productShowArea">

                        <div class="feature col productItem">
                            <h4>Product 1</h4>
                            
                            <p>
                                Explain product 1.
                            </p>
                            
                            <a href="#" class="icon-link">
                                <button class="btn btn-secondary smaller">
                                    More info...
                                </button>
                            </a>
                        </div>

                        <div class="feature col productItem">
                            <h4>Product 2</h4>
                            
                            <p>
                                Explain product 2.
                            </p>
                            
                            <a href="#" class="icon-link">
                                <button class="btn btn-secondary smaller">
                                    More info...
                                </button>
                            </a>
                        </div>

                        <div class="feature col productItem">
                            <h4>Product 3</h4>
                            
                            <p>
                                Explain product 3.
                            </p>
                            
                            <a href="#" class="icon-link">
                                <button class="btn btn-secondary smaller">
                                    More info...
                                </button>
                            </a>
                        </div>

                    </div>

                    <div class="productsSeeAll">
                        <a href="products">
                            See all
                        </a>
                    </div>

                </div>

            </section>

            <section class="gradient">
                <h3>Portfolio</h3>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carouselFlex">
                                <div>
                                    <img class="project" src="{{ asset('images/adscreens.jpg') }}" alt="adscreens portfolio" />
                                </div>
                                <div>
                                    <img class="project" src="{{ asset('images/FaceFacts.jpg') }}" alt="Face facts clinic portfolio" />
                                </div>
                                <div>
                                    <img class="project" src="{{ asset('images/i-walk.jpg') }}" alt="i-walk portfolio" />
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carouselFlex">
                                <div>
                                    <img class="project" src="{{ asset('images/HolisticVision.jpg') }}" alt="Holistic Vision portfolio" />
                                </div>
                                <div>
                                    <img class="project" src="{{ asset('images/BlingWing.jpg') }}" alt="Bling Wing portfolio" />
                                </div>
                                <div>
                                    <img class="project" src="{{ asset('images/ExclusionZone.jpg') }}" alt="Exclusion zone MMORPG portfolio" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <br />

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon nextPrev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon nextPrev" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

            <section class="gradient">
                <h3>Reviews</h3>


                
            </section>

        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
