@extends('layout.app')

@section('title')
    Portfolio
@endsection

@section('content')
    <section>
        <div style="width: 70%; margin-left: 15%;">
            <h1>Portfolio</h1>
            
            <div class="projects">
                <div class="project">
                    <img src="{{ asset('img/portfolio/adscreens.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/FaceFacts.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/i-walk.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/LittleMooreLighting.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/HolisticVision.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/BlingWing.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/ExclusionZone.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/EnergizedGaming.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/PhpChain.jpg') }}" alt="" />
                </div>

                <div class="project">
                    <img src="{{ asset('img/portfolio/BeeActive.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
@endsection
