<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Project level <head> information -->
        @include('includes.htmlHead')

        <!-- Page level <head> information -->
        <title><?= ucfirst(Route::currentRouteName()); ?> - Glacial Studio</title>


    </head>
    <body>


        <?php

            echo $name, $email, $reason, $message;

        ?>


        <!-- Show header bar including logo, nav and social media -->
        @include('includes.header')

        <!-- Start dynamic page content -->
        <main>
            <h1 class="heading">Contact</h1>

            <form action="{{ route('contact') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <p>
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name" value="{{ $name }}" />
                    </p>

                    <p>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" value="{{ $email }}" />
                    </p>

                    <p>
                        <label for="reason">Reason for contact</label>
                        <select id="reason" name="reason">
                            <option value="">1</option>
                        </select>
                    </p>

                    <p>
                        <label for="message">Message</label>
                        <textarea id="message" name="message">{{ $message }}</textarea>
                    </p>

                    <p>
                        <button class="btn btn-light" onclick="clearForm(event);">Clear</button>
                        <input class="btn btn-light" type="submit" value="Send" aria-label="Submit button" />
                    </p>
                </fieldset>
            </form>
        </main>
        <!-- End dynamic page content -->

        <!-- Show footer bars including quicklinks and copyright -->
        @include('includes.footer')
        <script src={{ asset('js/contact.js') }}></script>
    </body>
</html>
