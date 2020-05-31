<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')
        
        <!-- Page level <head> information -->
        <title>Home - Glacial Studio</title>
        
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
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
                <article class="project">
                    <img class="project" src="" alt="" />
                </article>
                
            </section>
        </main>
        <!-- End dynamic page content -->
            
        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
