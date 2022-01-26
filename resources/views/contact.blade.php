@extends('layout.app')

@section('title')
    Contact
@endsection

@section('content')
    <section>
        <div>
            <h1>Contact</h1>

            @include('forms.contact')
        </div>
    </section>
@endsection
