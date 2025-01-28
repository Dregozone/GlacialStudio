<section class="pt-5 pb-24 bg-gray-50" id="products">
    {{-- Top slant at angle --}}
    <div 
        style="
            width: 105%;
            margin-top: -60px;
            border-bottom: 90px solid rgb(249 250 251);
            transform: rotate(-2.5deg);
        "
    ></div>

    <div class="w-full lg:w-[80%] mx-auto pb-10">
        <h1 class="text-4xl font-extrabold sm:text-center text-left text-gray-900 lg:text-5xl">Products</h1>

        <p class="w-full mt-5 text-base text-gray-900 opacity-75 sm:text-center text-left sm:mt-5 sm:text-xl">
            Scroll through some of the recent projects that Glacial Studio has been working on
        </p>

        <div class="w-full mx-auto mt-12 mb-8 overflow-x-auto pb-7">
            <div class="flex flex-col lg:flex-row lg:space-x-5">
                
                @foreach(\App\Models\Product::where('active', 1)->get() as $plan)
                    @php $features = explode('|', $plan->features); @endphp

                    <div class="flex-1 px-0 mx-auto mb-6 w-full sm:min-w-80 sm:max-w-80 lg:mb-0 @if($plan->default) lg:scale-105 @endif" x-cloak>
                        <div class="relative flex flex-col h-full mb-10 bg-white border rounded-lg shadow-xl border-zinc-200 text-zinc-800 sm:mb-0">                                            
                            <div class="px-10 pt-3">
                                <div class="absolute right-0 inline-block mr-6 transform">
                                    <h2 class="
                                        relative z-20 w-full h-full px-2 py-1 text-xs font-bold leading-tight tracking-wide text-center uppercase bg-white border-2 
                                        @if($plan->default){{ 'border-blue-800 text-blue-800' }}@else{{ 'border-zinc-900 text-zinc-800' }}@endif rounded
                                    ">
                                        {{ $plan->name }}
                                    </h2>
                                </div>
                            </div>

                            <div class="px-8 mt-9 border">
                                <img src="{{ asset('img/' . $plan->image) }}" class="w-full min-h-40 object-cover" alt="{{ $plan->name }}" />
                            </div>

                            <div class="px-8 mt-2">
                                @if ($plan->one_time_price == -1)
                                    <span class="font-mono text-blue-600 text-xl font-bold">Variable costs</span>

                                @elseif ($plan->monthly_price == 0)
                                    @if ($plan->yearly_price !== NULL)
                                        <span class="text-blue-600 font-mono text-2xl font-bold">£{{ str_replace(".00", "", number_format($plan->yearly_price, 2)) }} per year</span>
                                    @else
                                        <span class="font-mono text-blue-600 text-5xl font-bold">FREE</span>
                                    @endif
                                @else
                                    @if ($plan->one_time_price !== NULL)
                                        <span class="text-blue-600 font-mono text-5xl font-bold">
                                            £{{ number_format($plan->one_time_price, 2) }}
                                        </span>
                                    @else
                                        <span class="text-blue-600 font-mono text-2xl font-bold">
                                            £{{ number_format($plan->monthly_price, 2) }} per month
                                            {{-- <br />
                                            <span class="text-blue-600 italic text-sm font-thin">or</span>
                                            <br />
                                            £{{ number_format($plan->yearly_price, 2) }} per year --}}
                                        </span>
                                    @endif
                                @endif
                            </div>

                            <div class="px-8 mt-3">
                                <p class="text-base leading-7 text-gray-500">{{ $plan->description }}</p>
                            </div>

                            <div class="p-8 mt-auto rounded-b-lg">
                                <ul class="flex flex-col">
                                    @foreach($features as $feature)
                                        <li class="mt-1">
                                            <span class="flex items-center text-green-500">
                                                <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path>
                                                </svg>
                                                
                                                <span class="text-gray-700">
                                                    {{ $feature }}
                                                </span>
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="overflow-hidden rounded-b-lg">
                                <a 
                                    class="block w-full rounded-tl-none rounded-tr-none bg-blue-600 hover:bg-blue-500 text-white py-2 text-center" 
                                    href="{{ $plan->link }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    Go to {{ $plan->name }} site
                            </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>

    </div>
</section>
