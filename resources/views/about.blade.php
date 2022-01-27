@extends('layout.app')

@section('title')
    About
@endsection

@section('content')
    <section>
        <div>
            <h1>About</h1>
            
            



            <section class="centerContent aboutPara">
                <p>
                    Using a range of the latest technologies and taking a streamlined approach to development with focus on fast,
                    efficient design, I aim to provide sleek web applications with a unique eye for user-experience that will leave your
                    clients fulfilled.
                </p>
            </section>

            <section class="centerContent">
                <ul style="flex-direction: column; width: 100%;">
                    <li> Effective solutions </li>
                    <li> Affordable pricing </li>
                    <li> Striving for customer satisfaction </li>
                    <li> Clear timeframes for delivery </li>
                </ul>
            </section>

            <div class="aboutSplitter">
                <div class="technologyTable">
                    <h3>Technologies used:</h3>

                    <table class="technologyTable">
                        <tr>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('img/technologies/php.jpg') }}" alt="PHP Logo" /> </td>
                            <td class="techName">PHP</td>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('img/technologies/aws.jpg') }}" alt="AWS Logo" /> </td>
                            <td class="techName">AWS</td>
                        </tr>
                        <tr>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('img/technologies/laravel.jpg') }}" alt="Laravel Logo" /> </td>
                            <td class="techName">Laravel</td>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('img/technologies/react.jpg') }}" alt="React Logo" /> </td>
                            <td class="techName">React</td>
                        </tr>
                        <tr>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('img/technologies/javascript.jpg') }}" alt="Javascript Logo" /> </td>
                            <td class="techName">Javascript</td>
                            <td class="techLogo"> <img class="techLogo" src="{{ asset('img/technologies/bootstrap.jpg') }}" alt="Bootstrap Logo" /> </td>
                            <td class="techName">Bootstrap</td>
                        </tr>
                    </table>
                </div>

                <div class="technologyTable">
                    <div class="card" style="max-width: 15rem; margin: auto;">
                        <img class="card-img-top" src="{{ asset('img/Anders.jpg') }}" alt="Photo of Anders">

                        <div class="card-body" style="padding: 2%;">
                            <h5 class="card-title" style="padding: 0; margin: 0; text-align: center;">Anders Learmonth MSc.</h5>
                        </div>
                    </div>
                </div>
            </div>










        </div>
    </section>
@endsection
