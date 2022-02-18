@extends('layout.app')

@section('title')
    Portfolio
@endsection

@section('content')
    <section>
        <div class="projectsContainer">
            <h1>Portfolio</h1>

            <h2>{{ $project }}</h2>

            <section class="detailsProjectContainer">
                <div>
                    <h3>About the company</h3>
                    ...

                    <h3>About the solution</h3>
                    {{ $projectDetails->description }}
                </div>
                <div>
                    <img 
                        class="detailsProjectImage"
                        src="{{ asset('img/portfolio/' . $projectDetails->image) }}" 
                        alt="{{ $project }} project image"    
                    />

                    <div class="detailsProjectPills">
                        {{ $projectDetails->tags }}
                    </div>
                </div>
            </section>

            <a href="{{ route('portfolio') }}">
                <div>
                    Return to portfolio
                </div>
            </a>
        </div>
    </section>
@endsection
