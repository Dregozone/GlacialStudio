<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
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
            
            a {
                text-decoration: none !important;
            }
            
            header { 
                grid-area: header; 
                display: flex;
                flex-direction: row;
                justify-content: center; 
                align-content: space-between;
                background: #adcce6;
            }
                header > .logo {
                    width: 25%;
                    padding: 0.5%;
                }
                    img.gsLogoSmall {
                        width: 10%;
                        margin-left: 2%;
                    }
                    img.gsLogo {
                        width: 60%;
                    }
                header > nav {
                    width: 50%;
                    text-align: center;
                    color: darkslategrey !important;
                }
                    header > nav > a {
                        color: darkslategrey !important;
                    }
                    header > nav > a:hover {
                        color: black !important;
                    }
                header > .socialMedia {
                    display: block;
                    width: 25%;
                    text-align: center;
                }
            
            main { grid-area: main; }
            
            footer { 
                grid-area: footer; 

            }
                footer > .links {
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-content: space-around;
                    background: #adcce6;
                    text-align: center;
                    padding: 2vmin;
                }
                    footer > .links > .linksLeft, footer > .links > .linksRight {
                        width: 50%;
                    }
                    .linksLeft > div > a, .linksRight > div > a {
                        display: block;
                        color: darkslategrey !important;
                    }
                        .linksLeft > div > a:hover, .linksRight > div > a:hover {
                            color: black !important;
                        }
            
                footer > .copy {
                    background: #95bad8;
                    text-align: center;
                    padding: 1vmin;
                    color: black;
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
            
            /* FOR MOBILE */
            @media only screen and (max-width: 600px) {
                header {
                    flex-direction: column;
                }
                    header > .logo {
                        width: 100%;
                        text-align: center;
                    }
                    header > nav {
                        width: 100%;
                    }
                    header > .socialMedia {
                        display: none;
                    }
                
                footer > .links {
                    flex-direction: column;
                }
                    footer > .links > .linksLeft, footer > .links > .linksRight {
                        width: 100%;
                    }
            }
            
        </style>
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
            
            
        <div class="grid-container">
            <header>
                <section class="logo">
                    <a href="home">
                        <img src={{ asset('images/Logo-small.png') }} class="gsLogoSmall" alt="Glacial Studio Logo" aria-label="Glacial Studio Logo" />
                        <img src={{ asset('images/Logo.png') }} class="gsLogo" alt="Glacial Studio Logo" aria-label="Glacial Studio Logo" />
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
                        <div><a href="about">About</a></div>
                        <div><a href="contact">Contact</a></div>
                        <div><a href="news">News</a></div>
                    </section>

                    <section class="linksRight">
                        <div><a href="termsofservice">Terms of service</a></div>
                        <div><a href="privacypolicy">Privacy policy</a></div>
                        <div><a href="">Site map</a></div>
                    </section>
                </section>
                
                <section class="copy">
                    &copy; Copyright <?= date('Y'); ?>
                </section>
            </footer>
        </div>
            

    </body>
</html>
