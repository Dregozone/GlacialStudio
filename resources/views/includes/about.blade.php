<section class="pt-5 pb-32 bg-gray-200">
    {{-- Top slant at angle --}}
    <div 
        style="
            width: 100%;
            margin-top: -60px;
            border-bottom: 90px solid rgb(229 231 235);
            transform: rotate(-2.5deg);
        "
    ></div>

    <div class="w-full lg:w-[60%] mx-auto">

        <h1 class="text-4xl font-extrabold sm:text-center text-left text-gray-900 lg:text-5xl">About</h1>

        <div class="flex flex-col md:flex-row justify-evenly items-center md:items-start gap-2 mt-5">
            <div class="w-3/12">
                <img src="" style="width: 220px; height: 300px; border: 1px solid gray;" alt="Picture of founder" />
            </div>

            <div class="w-9/12">
                <p class="my-4 ml-2">
                    Some key info about company aim/objectives and what its all about
                </p>

                <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 md:flex-row">
                    <div class="flex flex-col pl-5 md:pr-8">
                        <div class="relative md:pl-12">
                            {{-- Quote mark --}}
                            <svg class="absolute left-0 hidden w-10 h-10 text-blue-500 fill-current md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                            </svg>

                            <p class="mt-2 text-base text-zinc-600">
                                I set up Glacial Studio with a goal to provide affordable, effective web solutions. 
                                I strive for customer satisfaction, setting deliverables and clear timeframes upfront and 
                                always working towards your dream solution
                            </p>
                        </div>

                        <h3 class="mt-3 text-base font-medium leading-5 truncate text-zinc-800 md:pl-12">
                            Anders Learmonth 
                            <span class="mt-1 text-sm leading-5 truncate text-zinc-500">- Founder (Glacial Studio)</span>
                        </h3>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>

</section>
