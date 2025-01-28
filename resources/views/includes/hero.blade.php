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
</section>
