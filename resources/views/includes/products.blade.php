<section class="pt-5 pb-32 bg-gray-50" id="products">
    {{-- Top slant at angle --}}
    <div 
        style="
            width: 100%;
            margin-top: -60px;
            border-bottom: 90px solid rgb(249 250 251);
            transform: rotate(2.5deg);
        "
    ></div>

    <div class="w-full lg:w-[80%] mx-auto">
        
        <h1 class="text-4xl font-extrabold sm:text-center text-left text-gray-900 lg:text-5xl">Products</h1>

        <p>
            Products
        </p>



        @php 
            $features = ["First", "Second", "Third",];
        @endphp
        <div
            class="flex-1 px-0 mx-auto mb-6 w-full sm:max-w-lg lg:mb-0 @if(false) lg:scale-105 @endif" {{-- if (isHighlightedProject) --}}
        >
            <div class="relative flex flex-col h-full mb-10 bg-white border rounded-lg shadow-xl border-zinc-200 text-zinc-800 sm:mb-0">                                            
                <div class="px-10 pt-7">
                    <div class="absolute right-0 inline-block mr-6 transform">
                        <h2 class="
                            relative z-20 w-full h-full px-2 py-1 text-xs font-bold leading-tight tracking-wide text-center uppercase bg-white border-2 
                            @if(true){{ 'border-blue-600 text-blue-600' }}@else{{ 'border-zinc-900 text-zinc-800' }}@endif rounded {{-- if (isHighlightedProject) --}}
                        ">
                            PlanName
                        </h2>
                    </div>
                </div>

                <div class="px-8 mt-5">
                    @if (false) {{-- if (price == 0) --}}
                        <span class="font-mono text-blue-600 text-5xl font-bold">FREE</span>
                    @else
                        <span class="font-mono text-5xl font-bold">£<span>?.??</span></span>
                        <span class="text-xl font-bold text-gray-500"><span>per month</span></span>
                    @endif
                </div>

                <div class="px-8 mt-3">
                    <p class="text-base leading-7 text-gray-500">PlanDescription</p>
                </div>

                <div class="p-8 mt-auto rounded-b-lg">
                    <ul class="flex flex-col">
                        @foreach($features as $feature)
                            <li class="mt-1">
                                <span class="flex items-center text-green-500">
                                    <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                                    <span class="text-gray-700">
                                        @if (strpos($feature, "dagger") !== false)
                                            {{ explode("<sup>&dagger;</sup>", $feature)[0] }}<sup>&dagger;</sup>
                                            {{ explode("<sup>&dagger;</sup>", $feature)[1] }}
                                        @else
                                            {{ $feature }}
                                        @endif
                                    </span>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="overflow-hidden rounded-b-lg">
                    <a 
                        href=""
                        class="w-full rounded-tl-none rounded-tr-none block bg-blue-600 hover:bg-blue-500 rounded-b-lg text-white w-full text-xl text-center py-3"
                        target="_blank"
                        rel="noreferrer"
                    >
                        Go to site
                    </a>
                </div>
            </div>
        </div>




    </div>

</section>
