<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')
        
        <!-- Page level <head> information -->
        <title>Home - Glacial Studio</title>
        
        <link rel="stylesheet" href="{{ asset('css/products.css') }}" />
        
    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')
            
        <!-- Start dynamic page content -->
        <main>            
            <h1 class="heading">Products</h1>
            
            <article class="product">
                Create a full professional or personal website
            </article>
            
            <article class="product">
                Create a single page site
            </article>
            
            <article class="product">
                Create a browser based game
            </article>
            
            <p class="info">
                Enquire for an accurate quote or to request more information.
            </p>
        </main>
        <!-- End dynamic page content -->
            
        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
