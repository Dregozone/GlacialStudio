@extends('layout.app')

@section('title')
    Portfolio
@endsection

@section('content')
    <section>
        <div class="projectsContainer">
            <h1>Portfolio</h1>

            <div class="projects">

                @foreach ( $projects as $project )
                    <a href="{{ route('portfolio') }}/{{ $project->name }}">
                        <div class="project">
                            <img src="{{ asset('img/portfolio/' . $project->image) }}" alt="{{ $project->name }} project image" />
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>
@endsection
