<div>
    <section id="about" class="h-screen w-full container mx-auto flex flex-col py-25 items-center">
        <div class="text-center w-full {{-- mb-5 --}} py-10">
            <h2 class="font-bold text-4xl flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    fill="currentColor" class="size-9">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                    About 
                    <span class="text-blue-600">Me</span>
                </div>
            </h2>
        </div>
        <div class="flex justify-center items-center flex-col lg:flex-row text-center gap-5 mt-10">
            <figure class="w-[250px] h-[250px] lg:h-[400px] lg:w-[400px] lg:me-20">
                <img src="{{asset('imgs/img2.jpg')}}" {{--
                    src="https://s3.eu-central-1.amazonaws.com/uploads.mangoweb.org/shared-prod/visegradfund.org/uploads/2021/08/placeholder-male.jpg"
                    --}} alt="logo-jumb"
                    class="w-full h-full object-cover rounded-3xl border shadow-2xl filter grayscale hover:grayscale-0 transition-all duration-300" />
            </figure>
            <div
                class="w-1/2 lg:w-1/3 flex flex-col justify-center items-center text-left text-sm lg:text-base mt-5 lg:mt-0">
                <p>
                    <span class="font-bold text-3xl">I'm Salvatore Pitanza </span> <br>
                    <span class="font-bold text-md">Full Stack Developer</span>
                    <br>
                    <br>
                    <span class="font-medium text-md">
                        I am a Full-Stack developer based in Pune, India. I am an Information Technology undergraduate
                        from SPPU. I
                        am very passionate about improving my coding skills & developing applications & websites. I
                        build WebApps
                        and Websites using MERN Stack. Working for myself to improve my skills. Love to build Full-Stack
                        clones.
                    </span>
                    <br>
                    <br>
                    <span class="font-medium text-md text-blue-600">
                        Place : Palermo, Italy - 90125
                    </span>
                </p>
                <div class="w-full my-5 lg:mt-10">
                    <button
                        class="bg-[#002057] w-[200px] flex items-center justify-center  md:mx-0 text-white rounded-xl font-semibold px-6 md:px-8 py-3 cursor-pointer transition shadow-[#002057] shadow hover:shadow-md text-sm md:text-base">Resume
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 ms-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>