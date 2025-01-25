<section class="pt-5 pb-32 bg-gray-200" id="contact">
    {{-- Top slant at angle --}}
    <div 
        style="
            width: 100%;
            margin-top: -60px;
            border-bottom: 90px solid rgb(229 231 235);
            transform: rotate(2.5deg);
        "
    ></div>

    <div class="w-full lg:w-[80%] mx-auto">
        
        <h1 class="text-4xl font-extrabold sm:text-center text-left text-gray-900 lg:text-5xl">Contact</h1>

        <div x-data="{ on: false, billing: 'Monthly',
                toggleRepositionMarker(toggleButton){
                    this.$refs.marker.style.width=toggleButton.offsetWidth + 'px';
                    this.$refs.marker.style.height=toggleButton.offsetHeight + 'px';
                    this.$refs.marker.style.left=toggleButton.offsetLeft + 'px';
                }
            }" 
            x-init="
                    setTimeout(function(){ 
                        toggleRepositionMarker($refs.monthly); 
                        $refs.marker.classList.remove('opacity-0');
                        setTimeout(function(){ 
                            $refs.marker.classList.add('duration-300', 'ease-out');
                        }, 10); 
                    }, 1);
            "
            class="w-full mx-auto my-12" x-cloak
        >
            <div class="relative flex items-center justify-start pb-5 -translate-y-2 sm:justify-center">
                <div class="relative inline-flex items-center justify-center w-auto p-1 text-center -translate-y-3 border-2 border-blue-600 rounded-full sm:mx-auto">
                    <div x-ref="monthly" x-on:click="billing='Monthly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Monthly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 text-gray-900 rounded-full duration-300 ease-out cursor-pointer">
                        I have a project idea
                    </div>
                    <div x-ref="yearly" x-on:click="billing='Yearly'; toggleRepositionMarker($el)" :class="{ 'text-white': billing == 'Yearly' }" class="relative z-20 px-3.5 py-1 text-sm font-medium leading-6 text-gray-900 rounded-full duration-300 ease-out cursor-pointer">
                        General enquiry
                    </div>
                    <div x-ref="marker" class="absolute left-0 z-10 w-1/2 h-full opacity-0" x-cloak>
                        <div class="w-full h-full bg-blue-600 rounded-full shadow-sm"></div>
                    </div>
                </div>  
            </div>

            <div class="flex flex-col flex-wrap lg:flex-row lg:space-x-5">

                <div x-show="billing == 'Monthly'">
                    Form: I have a project idea
                </div>

                <div x-show="billing == 'Yearly'">
                    Form: General enquiry
                </div>

            </div>
        </div>


    </div>

</section>
