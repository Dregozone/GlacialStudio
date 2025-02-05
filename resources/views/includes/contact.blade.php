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

        <p class="text-base text-center font-light italic p-3 m-5 border border-amber-500 w-10/12 sm:w-6/12 mx-auto shadow-md rounded-md bg-amber-50">
            I am not currently taking on any new projects.
        </p>

        <!--
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
            {{-- Type of form toggle button --}}
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

            {{-- Form to display --}}
            <div class="flex flex-col flex-wrap lg:flex-row lg:space-x-5">

                <div x-show="billing == 'Monthly'">
                    Form: I have a project idea



                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" name="name" id="name" required class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <input type="email" name="email" id="email" required class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="reason" class="block text-sm font-medium text-gray-700">Reason for contact</label>
                            <select name="reason" id="reason" required class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="project">Project Idea</option>
                                <option value="enquiry">General Enquiry</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" id="message" rows="4" required class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Submit
                            </button>
                        </div>
                    </form>





                </div>

                <div x-show="billing == 'Yearly'">
                    Form: General enquiry
                </div>

            </div>
        </div>
        -->

    </div>

</section>
