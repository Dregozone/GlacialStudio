@extends('layout.app')

@section('title')
    Contact
@endsection

@section('content')
    <section>
        <div>
            <h1>Contact</h1>

            @if ( session('message') )
                <div class="successMessage">
                    {{ session('message') }}
                </div>
            @endif

            @include('forms.contact')
        </div>
    </section>
@endsection
