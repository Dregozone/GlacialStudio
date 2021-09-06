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
                    <div class="btn callToAction">Enquire to realise your vision</div>
                </a>

                <h3>About</h3>

                <p>"I set up Glacial Studio with a goal to provide affordable, effective web solutions.
                    I strive for customer satisfaction, setting deliverables and clear timeframes upfront
                    and am always working towards your dream solution"
                </p>
                <p class="small">- Anders Learmonth <span class="smaller">MSc.</span> <i class="small">(Software Engineer, Glacial Studio)</i></p>
                
                <hr />

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

                        <!-- 
                        <div class="carousel-item">
                            <div class="carouselFlex">
                                <div>
                                    7
                                </div>
                                <div>
                                    8
                                </div>
                                <div>
                                    9
                                </div>
                            </div>
                        </div>
                        --> 
                    </div>

                    <br />

                    <ol class="carousel-indicators indicatorAdjust">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --> 
                    </ol>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
