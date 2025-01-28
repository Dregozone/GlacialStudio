<section class="pt-5 pb-32 bg-gray-50 z-70" id="services">
    {{-- Top slant at angle --}}
    <div 
        style="
            width: 100%;
            margin-top: -60px;
            border-bottom: 90px solid rgb(249 250 251);
            transform: rotate(-2.5deg);
        "
    ></div>

    <div class="w-full lg:w-[80%] mx-auto">
        {{-- Pricing start --}}
        <div id="pricing" class="relative w-full text-center">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <div class="text-gray-900">
                        <section class="max-w-8xl px-6 pt-0 mx-auto md:px-8">
                            <h1 class="text-4xl font-extrabold sm:text-center text-left text-gray-900 lg:text-5xl">Services</h1>

                            <p class="w-full mt-5 text-base text-gray-900 opacity-75 sm:text-center text-left sm:mt-5 sm:text-xl">
                                Some of the services offered by Glacial Studio to help get your projects off the ground
                            </p>

                            <div class="w-full mx-auto mt-7 sm:mt-9 mb-8">
                                <div class="flex flex-col flex-wrap lg:flex-row lg:space-x-5">
                                    
                                    @foreach(\App\Models\Service::where('active', 1)->get() as $plan)
                                        {{-- @php $features = explode('|', $plan->features); @endphp --}}

                                        <div class="flex-1 px-0 mx-auto mb-6 w-full sm:max-w-lg lg:mb-0 @if($plan->default) lg:scale-105 @endif" x-cloak>
                                            <div class="relative flex flex-col h-full mb-10 bg-white border rounded-lg shadow-xl border-zinc-200 text-zinc-800 sm:mb-0">                                            
                                                <div class="px-10">
                                                    <div class="absolute right-0 inline-block mr-6 top-1 transform">
                                                        <h2 class="
                                                            relative z-20 w-full h-full px-2 py-1 text-base font-bold leading-tight tracking-wide text-center uppercase bg-white border-2 
                                                            @if($plan->default){{ 'border-blue-800 text-blue-800' }}@else{{ 'border-zinc-900 text-zinc-800' }}@endif rounded
                                                        ">
                                                            {{ $plan->name }}
                                                        </h2>
                                                    </div>
                                                </div>

                                                <img src="{{ asset('img/' . $plan->img) }}" class="w-full h-44 object-cover rounded-t-lg" alt="{{ $plan->name }}" />

                                                <div class="px-8 mt-2">
                                                    @if ($plan->one_time_price == -1)
                                                        <span class="font-mono text-blue-600 text-xl font-bold">Variable costs</span>

                                                    @elseif ($plan->monthly_price == 0 && $plan->one_time_price === NULL)
                                                        <span class="font-mono text-blue-600 text-5xl font-bold">FREE</span>
                                                    
                                                    @else
                                                        @if ($plan->one_time_price !== NULL)
                                                            <span class="text-gray-600 font-mono text-lg font-bold">
                                                                from
                                                            </span>
                                                            
                                                            <span class="text-blue-600 font-mono text-5xl font-bold">
                                                                £{{ $plan->one_time_price }}
                                                            </span>
                                                        @else
                                                            <span class="text-blue-600 font-mono text-2xl font-bold">
                                                                £{{ $plan->monthly_price }} per month
                                                                {{-- <br />
                                                                <span class="text-blue-600 italic text-sm font-thin">or</span>
                                                                <br />
                                                                £{{ $plan->yearly_price }} per year --}}
                                                            </span>
                                                        @endif
                                                    @endif
                                                </div>

                                                <div class="px-8 my-5">
                                                    <p class="text-base leading-7 text-gray-500">{{ $plan->description }}</p>
                                                </div>

                                                {{-- <div class="p-8 mt-auto rounded-b-lg">
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
                                                </div> --}}

                                                <div class="overflow-hidden rounded-b-lg">
                                                    <a 
                                                        class="block w-full rounded-tl-none rounded-tr-none bg-blue-600 hover:bg-blue-500 text-white py-2" 
                                                        href="#contact"
                                                    >
                                                        Get Started
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
