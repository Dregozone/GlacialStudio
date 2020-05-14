<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')
        
        <!-- Page level <head> information -->
        <title>Home - Glacial Studio</title>
        
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
                
                <h2>About</h2>

                <p>"I set up Glacial Studio with a goal to provide affordable, effective web solutions. 
                    I strive for customer satisfaction, setting deliverables and clear timeframes upfront 
                    and am always working towards your dream solution"
                </p>
                <p>- Anders Learmonth (Software Engineer)</p>

                <p>
                    Using a range of the latest technologies and taking a streamlined approach to development with focus on fast,
                    efficient design, I aim to provide sleek web applications with a unique eye for user-experience that will leave your
                    clients fulfilled.
                </p>
                <p>
                    <a href="about">
                        Find out more...
                    </a>
                </p>
            </section>
            
            <section class="gradient">
                <h2>Portfolio</h2>

                <p>
                    Scroll project portfolio here...
                </p>
            </section>
            
        </main>
        <!-- End dynamic page content -->
            
        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
