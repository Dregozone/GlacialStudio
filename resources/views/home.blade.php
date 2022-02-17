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

                @foreach ($categories as $category)
                    <div class="product">
                        <h4>{{ $category->name }}</h4>

                        <img src="{{ asset('img/products/' . $category->tag . '.png') }}" class="img" />

                        <a href="{{ route('products') }}#{{ $category->tag }}" class="icon-link">
                            <button class="btn btn-secondary smaller">
                                More info...
                            </button>
                        </a>
                    </div>
                @endforeach

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

            <div class="slideshow-container">

                <div class="mySlides">
                    <div class="carousel-container">
                        <div>
                            <img src="{{ asset('img/portfolio/adscreens.jpg') }}" alt="" />
                        </div>
                        <div>
                            <img src="{{ asset('img/portfolio/LittleMooreLighting.jpg') }}" alt="" />
                        </div>
                        <div>
                            <img src="{{ asset('img/portfolio/i-walk.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
                
                <div class="mySlides">
                    <div class="carousel-container">
                        <div>
                            <img src="{{ asset('img/portfolio/BlingWing.jpg') }}" alt="" />
                        </div>
                        <div>
                            <img src="{{ asset('img/portfolio/EnergizedGaming.jpg') }}" alt="" />
                        </div>
                        <div>
                            <img src="{{ asset('img/portfolio/ExclusionZone.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
                
                <div class="mySlides">
                    <div class="carousel-container">
                        <div>
                            <img src="{{ asset('img/portfolio/HolisticVision.jpg') }}" alt="" />
                        </div>
                        <div>
                            <img src="{{ asset('img/portfolio/FaceFacts.jpg') }}" alt="" />
                        </div>
                        <div>
                            <img src="{{ asset('img/portfolio/PhpChain.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                
                <script>
                    
                </script>



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
