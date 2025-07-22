<div>
    <!-- Main content -->
    <section id="jumbtron"
        class="z-20 flex justify-center items-center h-[100dvh] md:h-auto mt-0 md:mt-32 lg:mt-82 px-4 md:px-0">
        <div
            class="container tilt-container flex flex-col-reverse md:flex-row items-center justify-center md:justify-around gap-8 md:gap-4 h-full md:h-auto py-20 md:py-0">
            <div class="text-center w-full md:w-auto md:text-left max-w-lg flex flex-col justify-center">
                <div class="text-[#002057] text-3xl md:text-4xl lg:text-[4rem] font-bold mb-3 md:mb-5">
                    {!! __('jumb.hi') !!}
                </div>
                <a href="#about"
                    class="bg-black w-[180px] flex items-center justify-between mx-auto md:mx-0 text-white rounded-xl font-semibold px-4 md:px-8 py-2 cursor-pointer transition hover:scale-110 text-sm md:text-base">
                    {{ __('jumb.about') }}
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5 ms-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                      </svg>
                      
                </a>

                <div class="flex items-center justify-center md:justify-start gap-3 mt-3">
                    <button title="LinkedIn"
                        class="mt-2 cursor-pointer bg-white  p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                        <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('imgs/icon/linkedin.svg') }}" alt="LinkedIn">
                    </button>
                    <button title="GitHub"
                        class="mt-2 cursor-pointer p-2 bg-white rounded-full shadow-md hover:shadow-lg transition-all border">
                        <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('imgs/icon/github.svg') }}" alt="GitHub">
                    </button>
                    <button title="Instagram"
                        class="mt-2 cursor-pointer bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                        <img class="w-5 md:w-7 h-5 md:h-7" src="{{ asset('imgs/icon/instagram.svg') }}" alt="Instagram">
                    </button>
                </div>
            </div>

            <figure
                class="w-full md:w-auto flex justify-center items-center mb-6 md:mb-0 perspective-[800px] cursor-pointer transform-style-preserve-3d transition-transform duration-300">
                <img src="{{ asset('imgs/icon/logo2.png') }}" alt="logo-jumb"
                    class=" w-[250px] h-[250px] md:w-[300px] md:h-[300px] lg:w-[400px] lg:h-[400px]  tilt-element
                    transition rounded-full bg-white border drop-shadow-lg" />
            </figure>
        </div>
    </section>
</div>
