<div>
    <!-- Main content -->
    <section id="jumbtron" class="z-20 flex justify-center items-center h-[100dvh] md:h-auto mt-0 md:mt-32 lg:mt-82 px-4 md:px-0">
        <div class="container tilt-container flex flex-col-reverse md:flex-row items-center justify-center md:justify-around gap-8 md:gap-4 h-full md:h-auto py-20 md:py-0">
            <div class="text-center w-full md:w-auto md:text-left max-w-lg flex flex-col justify-center">
                <div class="text-[#002057] text-2xl md:text-4xl lg:text-[4rem] font-bold mb-3 md:mb-5">
                    Hi There,<br />
                    I'm Salvatore <span class="text-yellow-500">Pitanza</span>
                </div>
                <a href="#about"
                    class="bg-[#002057] w-[180px] flex items-center justify-center mx-auto md:mx-0 text-white rounded-xl font-semibold px-4 md:px-8 py-2 cursor-pointer transition shadow-[#002057] shadow hover:shadow-md text-sm md:text-base">
                    About Me
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 ms-2">
                        <path fill-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                <div class="flex items-center justify-center md:justify-start gap-3 mt-3">
                    <button title="LinkedIn"
                        class="mt-2 cursor-pointer bg-white  p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                        <img class="w-5 md:w-7 h-5 md:h-7" src="{{asset('imgs/icon/linkedin.svg')}}" alt="LinkedIn">
                    </button>
                    <button title="GitHub"
                        class="mt-2 cursor-pointer p-2 bg-white rounded-full shadow-md hover:shadow-lg transition-all border">
                        <img class="w-5 md:w-7 h-5 md:h-7" src="{{asset('imgs/icon/github.svg')}}" alt="GitHub">
                    </button>
                    <button title="Instagram"
                        class="mt-2 cursor-pointer bg-white p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                        <img class="w-5 md:w-7 h-5 md:h-7" src="{{asset('imgs/icon/instagram.svg')}}" alt="Instagram">
                    </button>
                </div>
            </div>

            <figure class="w-full md:w-auto flex justify-center items-center mb-6 md:mb-0 perspective-[800px] cursor-pointer transform-style-preserve-3d transition-transform duration-300">
                <img src="{{asset('imgs/icon/logo2.png')}}" alt="logo-jumb" 
                    class="tilt-element w-[250px] h-[250px] md:w-[300px] md:h-[300px] lg:w-[400px] lg:h-[400px] 
                    transition rounded-full bg-white border drop-shadow-lg" />
            </figure>
        </div>
    </section>
</div>
