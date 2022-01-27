@extends('layout.app')

@section('title')
    Products
@endsection

@section('content')
    <section>
        <h1>Products</h1>
        
        <h2 id="web" style="margin-top: 1%;">Web-based</h2>
        <h3>For a variety of websites and tools.</h3>

        <section class="productPricing">

            <div class="productItem">
                <div class="card bg-light mb-3">
                    <div class="card-header center">
                        Full website
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title pricings">
                            £24 <small class="text-muted">/ mo</small>
                        </h1>

                        <p class="card-text">
                            <ul class="listItems left">
                                <li> <span style="color: #e6b800;">🞲</span> Most popular</li>
                                <li>Professional websites</li>
                                <li>Personal websites</li>
                            </ul>
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                    </div>
                </div>
            </div>

            <div class="productItem">
                <div class="card bg-light mb-3">
                    <div class="card-header center">
                        Single-page application
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title pricings">
                            £10 <small class="text-muted">/ mo</small>
                        </h1>

                        <p class="card-text">
                            <ul class="listItems left">
                                <li>Landing pages</li>
                                <li>Quality dashboard</li>
                                <li>Wizard applications</li>
                            </ul>
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                    </div>
                </div>
            </div>

            <div class="productItem">
                <div class="card bg-light mb-3">
                    <div class="card-header center">
                        Browser-based game
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title pricings">
                            £19 <small class="text-muted">/ mo</small>
                        </h1>

                        <p class="card-text">
                            <ul class="listItems left">
                                <li>MMORPG</li>
                                <li>Admin dashboards</li>
                                <li>Scalable solution</li>
                            </ul>
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                    </div>
                </div>
            </div>

            <div class="productItem">
                <div class="card bg-light mb-3">
                    <div class="card-header center">
                        eCommerce Shop
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title pricings">
                            £99 <small class="text-muted">/ mo</small>
                        </h1>

                        <p class="card-text">
                            <ul class="listItems left">
                                <li>Online shop</li>
                                <li>Admin dashboards</li>
                                <li>User metrics</li>
                            </ul>
                        </p>

                        <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                    </div>
                </div>
            </div>

        </section>
    </section>

    <section>
        <h2 id="iot" style="padding-top: 0.65%;">IoT/Hybrid</h2>
        <h3>For projects integrating between software and hardware.</h3>

        <section class="productPricing">

            <div class="card bg-light mb-3 productItem">
                <div class="card-header center">
                    IoT project
                </div>
                <div class="card-body">

                    <h1 class="card-title pricing-card-title pricings">
                        £99 <small class="text-muted">/ mo</small>
                    </h1>

                    <p class="card-text">
                        <ul class="listItems left">
                            <li>Web-based</li>
                            <li>Frontend monitors</li>
                            <li>Hardware control</li>
                        </ul>
                    </p>

                    <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                </div>
            </div>

            <div class="card bg-light mb-3 productItem">
                <div class="card-header center">
                    Microcontroller
                </div>
                <div class="card-body">

                    <h1 class="card-title pricing-card-title pricings">
                        £99 <small class="text-muted">/ mo</small>
                    </h1>

                    <p class="card-text">
                        <ul class="listItems left">
                            <li>Full life cycle</li>
                            <li>Comprehensive testing</li>
                            <li>Bring projects to life</li>
                        </ul>
                    </p>

                    <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                </div>
            </div>

        </section>
    </section>

    <section>
        <h2 id="custom" style="padding-top: 0.65%;">Custom</h2>
        <h3>Get in touch to discuss your custom projects.</h3>

        <section class="productPricing">

            <div class="card bg-light mb-3 productItem">
                <div class="card-header center">
                    Custom project
                </div>
                <div class="card-body">

                    <h1 class="card-title pricing-card-title pricings">
                        £<small class="text-muted">TBC</small>
                    </h1>

                    <p class="card-text">
                        Please enquire about custom project requests.
                    </p>

                    <button type="button" class="btn btn-block btn-outline-primary">Get started</button>
                </div>
            </div>

        </section>

        <section class="center" style="padding-top: 0.7%; padding-bottom: 2%;">
            <a href="{{ route('contact') }}">Enquire</a> for an accurate quote or to request more information.
        </section>
    </section>

@endsection
