<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding bg-white" id="products">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-glacier-900 mb-6">
                Our <span class="gradient-text">Products</span>
            </h2>
            <p class="text-lg text-glacier-600 max-w-3xl mx-auto">
                Discover our portfolio of innovative web applications and digital solutions designed to solve real-world
                problems.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach (\App\Models\Product::where('active', 1)->get() as $product)
                @php $features = explode('|', $product->features); @endphp

                <div class="card group hover:scale-105 transition-all duration-300">
                    {{-- Product Image --}}
                    <div class="relative overflow-hidden rounded-t-xl">
                        @if (file_exists('img/' . $product->img))
                            <img src="{{ asset('img/' . $product->img) }}"
                                class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300"
                                alt="{{ $product->name }}" />
                        @else
                            <div
                                class="w-full h-48 bg-gradient-to-br from-primary-100 to-primary-200 flex items-center justify-center">
                                <div class="text-center">
                                    <i class="fa-solid fa-code text-4xl text-primary-600 mb-2"></i>
                                    <p class="text-primary-700 font-medium">Coming Soon</p>
                                </div>
                            </div>
                        @endif

                        {{-- Status Badge --}}
                        <div class="absolute top-4 right-4">
                            @if (file_exists('img/' . $product->img) && $product->link)
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    Live
                                </span>
                            @else
                                <span class="bg-amber-500 text-white px-3 py-1 rounded-full text-xs font-medium">
                                    Coming Soon
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Product Content --}}
                    <div class="p-6">
                        <h3 class="text-xl font-display font-semibold text-glacier-900 mb-3">
                            {{ $product->name }}
                        </h3>

                        <p class="text-glacier-600 mb-4 leading-relaxed">
                            {{ $product->description }}
                        </p>

                        {{-- Pricing --}}
                        <div class="mb-4">
                            @if ($product->one_time_price == -1)
                                <span class="text-primary-600 font-semibold">Variable costs</span>
                            @elseif ($product->monthly_price == 0)
                                @if ($product->yearly_price !== null)
                                    <span
                                        class="text-primary-600 font-semibold">£{{ str_replace('.00', '', number_format($product->yearly_price, 2)) }}
                                        per year</span>
                                @else
                                    <span class="text-2xl font-bold text-green-600">FREE</span>
                                @endif
                            @else
                                @if ($product->one_time_price !== null)
                                    <span class="text-2xl font-bold text-primary-600">
                                        £{{ number_format($product->one_time_price, 2) }}
                                    </span>
                                @else
                                    <span class="text-primary-600 font-semibold">
                                        £{{ number_format($product->monthly_price, 2) }} per month
                                    </span>
                                @endif
                            @endif
                        </div>

                        {{-- Features --}}
                        @if (count($features) > 0)
                            <div class="mb-6">
                                <h4 class="text-sm font-semibold text-glacier-700 mb-3 uppercase tracking-wide">Features
                                </h4>
                                <ul class="space-y-2">
                                    @foreach ($features as $feature)
                                        <li class="flex items-center text-sm text-glacier-600">
                                            <i class="fa-solid fa-check text-green-500 mr-2"></i>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Action Button --}}
                        <div class="mt-auto">
                            @if (file_exists('img/' . $product->img) && $product->link !== null && $product->link !== '')
                                <a href="{{ $product->link }}" target="_blank" rel="noopener noreferrer"
                                    class="btn-primary w-full justify-center group">
                                    <i
                                        class="fa-solid fa-external-link-alt mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                                    Visit Site
                                </a>
                            @else
                                <button
                                    class="w-full px-4 py-2 bg-glacier-100 text-glacier-500 rounded-lg cursor-not-allowed">
                                    <i class="fa-solid fa-clock mr-2"></i>
                                    Coming Soon
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
