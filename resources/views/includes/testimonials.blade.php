<section class="pt-5 bg-gray-200">
    {{-- Top slant at angle --}}
    <div 
        style="
            width: 105%;
            margin-top: -60px;
            border-bottom: 90px solid rgb(229 231 235);
            transform: rotate(2.5deg);
        "
    ></div>


    {{-- Past work --}}
    <div class="w-full lg:w-[80%] mx-auto mb-10">
        <div id="pastWork" class="relative w-full text-center">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <div class="text-gray-900">
                        <section class="max-w-8xl px-6 pt-0 mx-auto md:px-8">
                            <h1 class="text-4xl font-extrabold sm:text-center text-left text-gray-900 lg:text-5xl">Past Work</h1>

                            <p class="w-full mt-5 text-base text-gray-900 opacity-75 sm:text-center text-left sm:mt-5 sm:text-xl">
                                Take a look at some of our previous work{{-- and what our clients have to say about us --}}
                            </p>

                            <div class="w-full mx-auto mt-7 sm:mt-9 mb-8">
                                <div class="flex justify-start items-start flex-col lg:flex-row lg:space-x-5 overflow-y-auto">

                                    @foreach (\App\Models\PastWork::where("active", 1)->orderBy("order", "ASC")->get() as $pastWork)
                                        <div class="w-full sm:min-w-94 sm:max-w-94 mb-5">
                                            <img src="{{ asset("img/{$pastWork->img}") }}" alt="Project screenshot" class="w-full h-40 object-cover" />

                                            <h4 class="text-center font-semibold text-lg">
                                                {{ $pastWork->name }}
                                            </h4>

                                            <p class="my-5 text-left px-5">
                                                {{ $pastWork->description }}
                                            </p>
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

    <br /><br />

    {{-- <hr class="w-1/2 mx-auto my-8 border-t-2 border-gray-300"> --}}

    {{-- Testimonials --}}
    {{--
    <div class="w-full lg:w-[80%] mx-auto">
        <section id="testimonials">
            <div class="relative flex items-center justify-center pt-0 pb-12 sm:pt-10 md:pb-20 lg:pb-28 min-w-screen">
                <div class="max-w-6xl px-10 pb-12 mx-auto">
                    <div class="flex flex-col items-center lg:flex-row">
                        <div class="flex flex-col justify-center w-full h-full mb-10 lg:pr-8 sm:w-4/5 md:items-center lg:mb-0 lg:items-start md:w-3/5 lg:w-1/2">
                            
                            <p class="mb-2 text-base font-medium tracking-tight text-blue-800 uppercase">
                                Our clients love our products
                            </p>

                            <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-zinc-900 sm:leading-none lg:text-5xl xl:text-6xl">
                                Testimonials
                            </h2>

                            <p class="pr-5 my-6 text-lg text-zinc-600 md:text-center lg:text-left">
                                This is an example section of where you will add your testimonials for your Software as a Service.
                            </p>
                            
                            <div class="overflow-hidden rounded-full">
                                <a 
                                    href="" 
                                    class="block rounded-lg bg-blue-600 hover:bg-blue-500 text-white text-lg px-5 py-3"    
                                >
                                    View All Case Studies
                                </a>
                            </div>
                        </div>

                        <div class="w-full sm:w-4/5 lg:w-1/2">
                            
                            <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 bg-white shadow rounded-xl md:flex-row">
                                <div class="flex flex-col pl-5 md:pr-8">
                                    <div class="relative md:pl-12">
                                        <svg class="absolute left-0 hidden w-10 h-10 text-blue-500 fill-current md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                            <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                        </svg>
                                        <p class="mt-2 text-base text-zinc-600">Wave allowed me to build the Software as a Service of my dreams!
                                        </p>
                                    </div>

                                    <h3 class="mt-3 text-base font-medium leading-5 truncate text-zinc-800 md:pl-12">Jane Cooper <span class="mt-1 text-sm leading-5 truncate text-zinc-500">- CEO SomeCompany</span></h3>
                                    <p class="mt-1 text-sm leading-5 truncate text-zinc-500"></p>
                                </div>
                                <img class="flex-shrink-0 w-24 h-24 rounded-full bg-zinc-300" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="" loading="lazy">
                            </blockquote>

                            <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 my-5 bg-white rounded-lg shadow md:flex-row">
                                <div class="flex flex-col pl-5 md:pr-10">
                                    <div class="relative md:pl-12">
                                        <svg class="absolute left-0 hidden w-10 h-10 text-blue-500 fill-current md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                            <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                        </svg>
                                        <p class="mt-2 text-base text-zinc-600">Wave saved us hundreds of development hours. Creating a Software as a Service is now easier than ever with Wave.</p>
                                    </div>
                                    <h3 class="mt-3 text-base font-medium leading-5 truncate text-zinc-800 md:pl-12">John Doe <span class="mt-1 text-sm leading-5 truncate text-zinc-500">- CEO SomeCompany</span></h3>
                                    <p class="mt-1 text-sm leading-5 truncate text-zinc-500"></p>
                                </div>
                                <img class="flex-shrink-0 w-24 h-24 rounded-full bg-zinc-300" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="" loading="lazy">
                            </blockquote>

                            <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow md:flex-row">
                                <div class="flex flex-col pl-5 md:pr-10">
                                    <div class="relative md:pl-12">
                                        <svg class="absolute left-0 hidden w-10 h-10 text-blue-500 fill-current md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                            <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z"></path>
                                        </svg>
                                        <p class="mt-2 text-base text-zinc-600">This is the best solution available for creating your own Software as a Service!</p>
                                    </div>

                                    <h3 class="mt-3 text-base font-medium leading-5 truncate text-zinc-800 md:pl-12">John Smith <span class="mt-1 text-sm leading-5 truncate text-zinc-500">- CEO SomeCompany</span></h3>
                                    <p class="mt-1 text-sm leading-5 truncate text-zinc-500"></p>
                                </div>
                                <img class="flex-shrink-0 w-24 h-24 rounded-full bg-zinc-300" src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rrb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;aauto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="" loading="lazy">
                            </blockquote>
                            
                        </div>
                    </div>
                </div>

            </div>
        </section>






    </div>
    --}}

</section>
