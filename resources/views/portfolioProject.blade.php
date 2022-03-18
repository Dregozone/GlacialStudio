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
                    <h3>About {{ $project }}</h3>
                    {{ $projectDetails->about }}

                    <h3 style="margin-top: 3%;">The solution</h3>
                    {{ $projectDetails->description }}
                </div>
                <div>
                    <img 
                        class="detailsProjectImage"
                        src="{{ asset('img/portfolio/' . $projectDetails->image) }}" 
                        alt="{{ $project }} project image"    
                    />

                    <div class="detailsProjectPills">

                        @if ( sizeof($tags) > 0 )
                            <ul class="nav nav-pills" style="width: auto;">
                            @foreach ( $tags as $tag )

                                @if ( substr($tag, 0, 5) == "tech_" )
                                    <li class="nav-item tag tagTech">
                                        {{ substr($tag, 5, 99) }}
                                    </li>
                                @else
                                    <li class="nav-item tag tagType">
                                        {{ $tag }}
                                    </li>
                                @endif

                            @endforeach
                            </ul>
                        @endif

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
