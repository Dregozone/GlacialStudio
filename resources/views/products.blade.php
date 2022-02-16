@extends('layout.app')

@section('title')
    Products
@endsection

@section('content')
    <section>
        <h1>Products</h1>

            <?php 
                // Handle new categories
                $currentCategory = false;    
            ?>

            @foreach ( $products as $product )

                @if ( $currentCategory == false ) 
                    {{-- If this is the first item, display the category info --}}
                    <h2 id="{{ $product->productCategory[0]->tag }}">{{ $product->productCategory[0]->name }}</h2>
                    <h3>{{ $product->productCategory[0]->description }}</h3>
            
                    <section class="productPricing">

                @elseif ( $product->productCategory[0]->name != $currentCategory )
                    {{-- If this is a new category, display the category info --}}
                        </section>
                    </section>

                    <section>
                        <h2 id="{{ $product->productCategory[0]->tag }}" style="padding-top: 0.65%;">{{ $product->productCategory[0]->name }}</h2>
                        <h3>{{ $product->productCategory[0]->description }}</h3>

                        <section class="productPricing">
                @endif

                <?php $currentCategory = $product->productCategory[0]->name; ?>

                <div class="productItem">
                    <div class="card bg-light mb-3">
                        <div class="card-header center">
                            {{ $product->title }}
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title pricings">
                                <small class="text-muted" style="font-size: 40%; margin-left: -15%; line-height: 5px;">from</small>
                                £{{ $product->price }}
                            </h1>

                            <p class="card-text">
                                <ul class="listItems left">

                                    <?php $product->details = explode('|', $product->details) ?>

                                    @foreach ( $product->details as $detail )

                                        <li>
                                            @if ( $detail == 'Most popular' )
                                                <span style="color: #e6b800;">🞲</span> {{ $detail }}
                                            @else
                                                {{ $detail }}
                                            @endif
                                        </li>

                                    @endforeach

                                </ul>
                            </p>

                            <a 
                                href="{{ route('contact') . '?query=' . $product->link }}"
                                style="display: block; width: 100%;"
                            >
                                <button 
                                    type="button" 
                                    class="btn btn-block btn-outline-primary" 
                                    style="width: 100%;"
                                >
                                    Get started
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach

        </section>

        <section class="center" style="padding-top: 0.7%; padding-bottom: 2%;">
            <a href="{{ route('contact') }}">Enquire</a> for an accurate quote or to request more information.
        </section>
    </section>

@endsection
