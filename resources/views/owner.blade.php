@extends('layout.app')

@section('title')
    Meet the Owner
@endsection

@section('content')
    <section>
        <div>
            <h1>Meet the Owner</h1>

            <div class="owner-profile">
                <div class="owner-photo">
                    <div class="card" style="max-width: 16rem; margin: auto;">
                        <img class="card-img-top" src="{{ asset('img/Anders.jpg') }}" alt="Photo of Anders Learmonth, founder of Glacial Studio">
                        <div class="card-body" style="padding: 2%;">
                            <h5 class="card-title" style="padding: 0; margin: 0; text-align: center;">Anders Learmonth MSc.</h5>
                            <p class="card-text owner-title">Software Engineer &amp; Founder</p>
                        </div>
                    </div>
                </div>

                <div class="owner-bio">
                    <h3>Hi, I&rsquo;m Anders</h3>

                    <p>
                        I&rsquo;m the founder and lead developer behind Glacial Studio. With a Master&rsquo;s degree in
                        Software Engineering and a genuine passion for building things on the web, I set up Glacial Studio
                        to make high-quality, affordable web solutions accessible to everyone &mdash; from individuals
                        to growing businesses.
                    </p>

                    <p>
                        I believe great software starts with clear communication. That&rsquo;s why I always work closely
                        with clients to understand their goals, set realistic timelines, and deliver results they can be
                        proud of. Whether it&rsquo;s a sleek portfolio site or a fully featured web application, I bring
                        the same care and attention to every project.
                    </p>

                    <p>
                        When I&rsquo;m not working on client projects, you&rsquo;ll find me writing about the technology
                        I use and the things that interest me on my personal blog,
                        <a href="https://www.dregozone.com" target="_blank" rel="noopener noreferrer" class="owner-blog-link">
                            dregozone.com
                        </a>.
                        It&rsquo;s a space where I share thoughts on software, tools, and anything else that catches my
                        eye &mdash; feel free to come and say hello.
                    </p>

                    <div class="owner-cta">
                        <a href="{{ route('contact') }}" class="btn callToAction">
                            Work with me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h3>What I do</h3>

            <section class="centerContent aboutPara">
                <p>
                    Using a range of the latest technologies and taking a streamlined approach to development,
                    I focus on fast, efficient design and a unique eye for user experience that leaves clients
                    and their customers fulfilled.
                </p>
            </section>

            <section class="centerContent">
                <ul style="flex-direction: column; width: 100%;">
                    <li>Effective, bespoke web solutions</li>
                    <li>Affordable, transparent pricing</li>
                    <li>A genuine commitment to client satisfaction</li>
                    <li>Clear deliverables and realistic timeframes</li>
                </ul>
            </section>

            <div class="owner-links">
                <a href="{{ route('about') }}" class="owner-secondary-link">
                    <i class="bi bi-info-circle"></i> About Glacial Studio
                </a>
                <a href="https://www.dregozone.com" target="_blank" rel="noopener noreferrer" class="owner-secondary-link">
                    <i class="bi bi-journal-text"></i> Visit my blog &rarr; dregozone.com
                </a>
            </div>
        </div>
    </section>
@endsection
