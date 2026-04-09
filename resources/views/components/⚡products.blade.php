<?php

use Livewire\Component;

new class extends Component {};

?>

<section class="section-padding scroll-mt-20 lg:scroll-mt-24 bg-glacier-950" id="products">
    <div class="container-custom" x-data="{ shown: false }" x-intersect.once="shown = true">
        {{-- Section Header --}}
        <div class="text-center mb-16 lg:mb-20">
            <div
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                class="transition-all duration-700"
            >
                <span class="section-label">
                    <i class="fa-solid fa-box text-[10px]" aria-hidden="true"></i>
                    Products
                </span>
            </div>
            <h2
                class="text-3xl sm:text-4xl md:text-5xl font-display font-bold text-white mb-6"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 100ms;"
            >
                Our <span class="gradient-text">Products</span>
            </h2>
            <p
                class="text-lg text-glacier-400 max-w-3xl mx-auto leading-relaxed"
                :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
                style="transition: all 0.7s ease; transition-delay: 200ms;"
            >
                Discover our portfolio of innovative web applications and digital solutions designed to solve real-world problems.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach (\App\Models\Product::where('active', 1)->get() as $index => $product)
                @php $features = explode('|', $product->features); @endphp

                <div
                    class="glass-card group flex flex-col overflow-hidden"
                    :class="shown ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                    style="transition: all 0.7s ease; transition-delay: {{ 300 + ($index * 100) }}ms;"
                >
                    {{-- Product Image --}}
                    <div class="relative overflow-hidden">
                        @if (file_exists('img/' . $product->img))
                            <img src="{{ asset('img/' . $product->img) }}"
                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-700"
                                alt="{{ $product->name }}" />
                            <div class="absolute inset-0 bg-gradient-to-t from-glacier-950/80 via-glacier-950/20 to-transparent"></div>
                        @else
                            <div class="w-full h-48 bg-gradient-to-br from-primary-500/10 to-cyan-500/10 flex items-center justify-center">
                                <div class="text-center">
                                    <i class="fa-solid fa-code text-3xl text-primary-400/60 mb-2" aria-hidden="true"></i>
                                    <p class="text-primary-400/80 font-medium text-sm">Coming Soon</p>
                                </div>
                            </div>
                        @endif

                        {{-- Status Badge --}}
                        <div class="absolute top-4 right-4">
                            @if (file_exists('img/' . $product->img) && $product->link)
                                <span class="inline-flex items-center gap-1.5 bg-green-500/90 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse" aria-hidden="true"></span>
                                    Live
                                </span>
                            @else
                                <span class="bg-amber-500/90 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold">
                                    Coming Soon
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Product Content --}}
                    <div class="p-6 flex flex-col flex-1">
                        <h3 class="text-xl font-display font-semibold text-white mb-3">
                            {{ $product->name }}
                        </h3>

                        <p class="text-glacier-400 mb-5 leading-relaxed text-sm flex-1">
                            {{ $product->description }}
                        </p>

                        {{-- Pricing --}}
                        <div class="mb-5">
                            @if ($product->one_time_price == -1)
                                <span class="text-primary-400 font-semibold">Variable costs</span>
                            @elseif ($product->monthly_price == 0)
                                @if ($product->yearly_price !== null)
                                    <span class="text-primary-400 font-semibold">£{{ str_replace('.00', '', number_format($product->yearly_price, 2)) }} per year</span>
                                @else
                                    <span class="text-2xl font-bold text-green-400 font-sans">FREE</span>
                                @endif
                            @else
                                @if ($product->one_time_price !== null)
                                    <span class="text-2xl font-bold text-primary-400 font-sans">
                                        £{{ number_format($product->one_time_price, 2) }}
                                    </span>
                                @else
                                    <span class="text-primary-400 font-semibold">
                                        £{{ number_format($product->monthly_price, 2) }} <span class="text-glacier-500 text-sm">/ month</span>
                                    </span>
                                @endif
                            @endif
                        </div>

                        {{-- Features --}}
                        @if (count($features) > 0 && $features[0] !== '')
                            <div class="mb-6">
                                <h4 class="text-xs font-semibold text-glacier-500 mb-3 uppercase tracking-widest font-sans">Features</h4>
                                <ul class="space-y-2">
                                    @foreach ($features as $feature)
                                        <li class="flex items-center text-sm text-glacier-400">
                                            <i class="fa-solid fa-check text-primary-400 mr-2.5 text-xs" aria-hidden="true"></i>
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
                                    class="btn-primary w-full group">
                                    <i class="fa-solid fa-external-link-alt mr-2 group-hover:scale-110 transition-transform duration-200" aria-hidden="true"></i>
                                    Visit Site
                                </a>
                            @else
                                <button disabled
                                    class="w-full px-5 py-3 bg-white/5 text-glacier-500 rounded-xl border border-white/[0.06] cursor-not-allowed text-sm font-medium" aria-disabled="true">
                                    <i class="fa-solid fa-clock mr-2" aria-hidden="true"></i>
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
