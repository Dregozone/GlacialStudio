<section 
    class="w-full h-[750px] bg-gray-50" 
    style="
        background-image: url('img/hero-top.png');
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
    "
>
    {{-- Animated Polar bear hero image --}}

    {{-- <img 
        src="{{ asset("img/hero.png") }}" 
        class="w-full" 
        alt="Hero image of animated polar bear moving across a mountanous landscape" 
    /> --}}

    

    {{-- Handle flash messages --}}
    @foreach ([
        "success",
        "fail",
        "msg",
    ] as $type)
        @if (Session::has($type))
            <div 
                id="{{ $type }}" 
                @class([
                    "w-full text-center py-2",
                    "bg-green-500 text-white" => $type == "success",
                    "bg-red-500 text-white" => $type == "fail",
                    "bg-sky-500 text-white" => $type == "msg",
                ])
            >
                {{ Session::get($type) }}
            </div>

            <script>
                setTimeout(() => {
                    document.getElementById($type).style.display = "none";
                }, 5000);
            </script>
        @endif
    @endforeach


    <div class="w-full lg:w-7/12 mx-auto h-full flex flex-col lg:flex-row justify-center items-center">
        <a 
            href="#services" 
            class="w-10/12 lg:w-4/12 mx-auto lg:-mt-10 rounded-lg px-8 py-6 text-4xl text-center shadow-lg opacity-100 hover:opacity-80 text-blue-900" 
            style="background: rgba(255, 255, 255, 0.5);"
        >
            <i class="fa-regular fa-handshake mr-2"></i>
            Hire me
        </a>

        <a 
            href="#products" 
            class="w-10/12 lg:w-4/12 mx-auto mt-10 lg:-mt-10 rounded-lg px-8 py-6 text-4xl text-center shadow-lg opacity-100 hover:opacity-80 text-indigo-900" 
            style="background: rgba(255, 255, 255, 0.5);"
        >
            <i class="fa-solid fa-hammer mr-2"></i>
            See my work
        </a>
    </div>



</section>
