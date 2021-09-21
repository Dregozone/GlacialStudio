<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title><?= ucfirst(Route::currentRouteName()); ?> - Glacial Studio</title>

        <link rel="stylesheet" type="text/css" href={{ asset('css/contact.css') }} />

    </head>
    <body>

        <!-- Start fb -->
        <div id="fb-root"></div>
        <script
            async
            defer
            crossorigin="anonymous"
            src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0"
            nonce="Gz0KWWNF"
        ></script>
        <!-- End fb -->

        <?php

            echo $name, $email, $reason, $message;

        ?>


        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main>
            <h1 class="heading">Contact</h1>

            <article class="contactContainer">
                <section class="contactContainerLeft">

                    <form action="{{ route('contact') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <p>
                                <label for="name">Name</label>
                                <input class="form-control inputField" type="text" id="name" name="name" placeholder="Your name" value="{{ $name }}" />
                            </p>

                            <p>
                                <label for="email">Email</label>
                                <input class="form-control inputField" type="text" id="email" name="email" placeholder="Email" value="{{ $email }}" />
                            </p>

                            <p>
                                <label for="reason">Reason for contact</label>
                                <select class="form-control inputField" id="reason" name="reason">
                                    <option value="none">-- Please select --</option>
                                    <option value="quote">Quote</option>
                                    <option value="info">More information</option>
                                </select>
                            </p>

                            <p>
                                <label for="message">Message</label>
                                <textarea class="form-control inputField" id="message" name="message">{{ $message }}</textarea>
                            </p>

                            <p>
                                <button class="btn btn-light" onclick="clearForm(event);">Clear</button>
                                <input class="btn btn-light" type="submit" value="Send" aria-label="Submit button" />
                            </p>
                        </fieldset>
                    </form>

                </section>

                <section class="contactContainerRight">
                    Follow GlacialStudio:

                    <div class="socials">
                        <a href="https://www.facebook.com/GlacialStudioWebSolutions" target="_blank">
                            <i class="bi bi-facebook socialsRounded" style="font-size: 1.4rem; color: #3b5998;"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/andreas-learmonth-982318a1/" target="_blank">
                            <i class="bi bi-linkedin socialsRounded" style="font-size: 1.4rem; color: #0077b5;"></i>
                        </a>

                        <a href="https://github.com/Dregozone" target="_blank">
                            <i class="bi bi-github socialsRounded" style="font-size: 1.4rem; color: black;"></i>
                        </a>
                    </div>

                    <div class="fbContainer">
                        <div
                            class="fb-like"
                            data-href="https://www.facebook.com/GlacialStudioWebSolutions"
                            data-width=""
                            data-layout="standard"
                            data-action="like"
                            data-size="large"
                            data-share="false"
                        ></div>

                        <div>
                            <a
                                class="github-button"
                                href="https://github.com/Dregozone"
                                data-color-scheme="no-preference: light; light: dark; dark: dark;"
                                data-size="large"
                                aria-label="Follow on GitHub"
                            >
                                Follow
                            </a>
                            <span class="ghText">
                                on GitHub
                            </span>
                        </div>
                    </div>

                </section>
            </article>


        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
        <script src={{ asset('js/contact.js') }}></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>
