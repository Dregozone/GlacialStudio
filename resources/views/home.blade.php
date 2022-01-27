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
    
            <div class="btn callToAction fading">
                <a href="{{ route('contact') }}">
                    Enquire to realise your vision
                </a>
            </div>
    
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

            <div class="products">
                <div class="product">
                    <h4>Website</h4>

                    <img src="{{ asset('img/products/website.png') }}" class="img" />

                    <a href="{{ route('products') }}#web" class="icon-link">
                        <button class="btn btn-secondary smaller">
                            More info...
                        </button>
                    </a>
                </div>

                <div class="product">
                    <h4>IoT</h4>

                    <img src="{{ asset('img/products/iot.png') }}" class="img" />

                    <a href="{{ route('products') }}#iot" class="icon-link">
                        <button class="btn btn-secondary smaller">
                            More info...
                        </button>
                    </a>
                </div>

                <div class="product">
                    <h4>Custom</h4>

                    <img src="{{ asset('img/products/custom.png') }}" class="img" />

                    <a href="{{ route('products') }}#custom" class="icon-link">
                        <button class="btn btn-secondary smaller">
                            More info...
                        </button>
                    </a>
                </div>
            </div>

            <div class="seeAll">
                <a href="{{ route('products') }}">
                    <div>
                        See all
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h3>Portfolio</h3>





            <div class="seeAll">
                <a href="{{ route('portfolio') }}">
                    <div>
                        See all
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{--
    <section>
        <div>
            <h3>Testimonials</h3>


            
        </div>
    </section>
    --}} 

    <section>
        <div>
            <h3>Get in touch</h3>

            @include('forms.contact')
        </div>
    </section>

@endsection
