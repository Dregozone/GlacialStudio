<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            
            header { 
                grid-area: header; 
                display: flex; 
                justify-content: center; 
                align-content: space-between; 
                height: 10vmin;
                background: lightblue;
            }
                header > .logo {
                    width: 25%;
                }
                img.gsLogo {
                    /*  */
                }
                header > nav {
                    width: 50%;
                }
                header > .socialMedia {
                    width: 25%;
                }
            
            main { grid-area: main; }
            
            footer { 
                grid-area: footer; 

            }
                footer > .links {
                    display: flex;
                    justify-content: center;
                    align-content: space-around;
                    height: 10vmin;
                    background: lightblue;
                    text-align: center;
                }
                    footer > .links > * {
                        width: 50%;
                    }
                    .linksLeft > a, .linksRight > a {
                        display: block;
                    }
            
                footer > .copy {
                    height: 4vmin;
                    background: blue;
                    text-align: center;
                }
            
            .grid-container {
                display: grid;
                grid-template-areas: 'header' 'main' 'footer';
                grid-gap: 0;
                padding: 0;
            }
            
            .grid-container > * {
                /*  */
            }
            
        </style>
    </head>
    <body>
            
            
        <div class="grid-container">
            <header>
                <section class="logo">
                    <a href="home">
                        <img src="" class="gsLogo" alt="Glacial Studio Logo" aria-label="Glacial Studio Logo" />
                    </a>
                </section>
                
                <nav>
                    <a href="about">About</a>
                    <a href="products">Products</a>
                    <a href="portfolio">Portfolio</a>
                    <a href="contact">Contact</a>
                </nav>
                
                <section class="socialMedia">
                    Social media
                </section>
            </header>
            
            <main>Main</main>
            
            <footer>
                
                <section class="links">
                    <section class="linksLeft">
                        <a href="about">About</a>
                        <a href="contact">Contact</a>
                        <a href="news">News</a>
                    </section>

                    <section class="linksRight">
                        <a href="termsofservice">Terms of service</a>
                        <a href="privacypolicy">Privacy policy</a>
                        <a href="">Site map</a>
                    </section>
                </section>
                
                <section class="copy">
                    &copy; Copyright 2020
                </section>
            </footer>
        </div>
            

    </body>
</html>
