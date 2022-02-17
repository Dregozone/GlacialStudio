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
                    <div class="project">
                        <img src="{{ asset('img/portfolio/' . $project->image) }}" alt="{{ $project->name }} project image" />
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
