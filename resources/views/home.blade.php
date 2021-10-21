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

                <div class="container">

                    <div class="review-list">
                        <ul>
                            <li>
                                <div class="d-flex">
                                    <div class="left">
                                        <span>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="profile-pict-img img-fluid" alt="" />
                                        </span>
                                    </div>
                                    <div class="right">
                                        <h4>
                                            Askbootstrap
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                                    <path
                                                        fill="currentColor"
                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                                                    ></path>
                                                </svg>
                                                5.0
                                            </span>
                                        </h4>

                                        <div class="country d-flex align-items-center">
                                            <span>
                                                <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Flag" />
                                            </span>
                                            <div class="country-name font-accent">India</div>
                                        </div>

                                        <div class="review-description">
                                            <p>
                                                The process was smooth, after providing the required info, Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                                            </p>
                                        </div>
                                        <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>

                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="d-flex">
                                    <div class="left">
                                        <span>
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="profile-pict-img img-fluid" alt="" />
                                        </span>
                                    </div>
                                    <div class="right">
                                        <h4>
                                            Askbootstrap
                                            <span class="gig-rating text-body-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792" width="15" height="15">
                                                    <path
                                                        fill="currentColor"
                                                        d="M1728 647q0 22-26 48l-363 354 86 500q1 7 1 20 0 21-10.5 35.5t-30.5 14.5q-19 0-40-12l-449-236-449 236q-22 12-40 12-21 0-31.5-14.5t-10.5-35.5q0-6 2-20l86-500-364-354q-25-27-25-48 0-37 56-46l502-73 225-455q19-41 49-41t49 41l225 455 502 73q56 9 56 46z"
                                                    ></path>
                                                </svg>
                                                5.0
                                            </span>
                                        </h4>

                                        <div class="country d-flex align-items-center">
                                            <span>
                                                <img class="country-flag img-fluid" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Flag" />
                                            </span>
                                            <div class="country-name font-accent">India</div>
                                        </div>

                                        <div class="review-description">
                                            <p>
                                                The process was smooth, after providing the required info, Pragyesh sent me an outstanding packet of wireframes. Thank you a lot!
                                            </p>
                                        </div>
                                        <span class="publish py-3 d-inline-block w-100">Published 4 weeks ago</span>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </section>

        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
