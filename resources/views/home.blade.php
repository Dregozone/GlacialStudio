<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')
        
        <!-- Page level <head> information -->
        <title>Home - Glacial Studio</title>
        
        
    </head>
    <body>
        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')
            
        <!-- Start dynamic page content -->
        <main>
            Home
        </main>
        <!-- End dynamic page content -->
            
        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
    </body>
</html>
