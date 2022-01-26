@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <section>
        <div>

            <h1 style="font-size: 400%; margin-top: 1%;">
                Glacial Studio
            </h1>

            <h2 style="font-size: 150%;">
                Innovative Web Solutions
            </h2>
    
            <a href="{{ route('contact') }}">
                <div class="btn callToAction fading">
                    Enquire to realise your vision
                </div>
            </a>
    
            <h3>About</h3>
            <p>
                "I set up Glacial Studio with a goal to provide affordable, effective web solutions. 
                I strive for customer satisfaction, setting deliverables and clear timeframes upfront 
                and am always working towards your dream solution"<br />
                - Anders Learmonth MSc. (Software Engineer, Glacial Studio)
            </p>

        </div>
    </section>
    
    <section>
        <div>
            <h3>Products</h3>



        </div>
    </section>

    <section>
        <div>
            <h3>Portfolio</h3>


            
        </div>
    </section>

    <section>
        <div>
            <h3>Testimonials</h3>


            
        </div>
    </section>

@endsection
