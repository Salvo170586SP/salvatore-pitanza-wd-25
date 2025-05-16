<div>
    <section id="skills" class="min-h-screen w-full mx-auto flex flex-col py-10 md:py-25 items-center bg-[#022d75]">
        <div class="text-center w-full py-5 md:py-10">
            <h2 class="font-bold text-3xl md:text-4xl text-white flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7 md:size-9">
                    <path fill-rule="evenodd"
                        d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm14.25 6a.75.75 0 0 1-.22.53l-2.25 2.25a.75.75 0 1 1-1.06-1.06L15.44 12l-1.72-1.72a.75.75 0 1 1 1.06-1.06l2.25 2.25c.141.14.22.331.22.53Zm-10.28-.53a.75.75 0 0 0 0 1.06l2.25 2.25a.75.75 0 1 0 1.06-1.06L8.56 12l1.72-1.72a.75.75 0 1 0-1.06-1.06l-2.25 2.25Z"
                        clip-rule="evenodd" />
                </svg>

                <div>
                    Skills &
                    <span class="text-yellow-300">Abilities</span>
                </div>
            </h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-7 text-center text-white gap-3 md:gap-5 mx-4 md:m-10 bg-blue-800 p-5 md:p-20 rounded-2xl md:rounded-3xl shadow-2xl overflow-auto">
           
           {{-- card --}}
            <div
                class="w-full h-40 md:w-40 md:h-40 flex flex-col justify-center items-center bg-[#02112b] hover:shadow-lg shadow-[#02112b] transition rounded-xl text-base">
                <figure class="w-[40px] h-[40px] md:w-[50px] md:h-[50px]">
                    <img src="{{asset('/imgs/icon/laravel-icon.png')}}" alt="laravel"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-sm md:text-md">
                       Laravel
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/php.svg')}}" alt="php"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       PHP
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/livewire.svg')}}" alt="livewire"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Livewire
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/alpinejs.png')}}" alt="alpinejs"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Alpinejs
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/mysql.svg')}}" alt="mysql"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       MySQL
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/tailwind.png')}}" alt="tailwind"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Tailwind
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/bootstrap.svg')}}" alt="Bootstrap"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Bootstrap
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/html.png')}}" alt="html"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       HTML5
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/css.svg')}}" alt="css3"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       CSS3
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/sass.png')}}" alt="Sass"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Sass
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/js.svg')}}" alt="javascript"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Javascript
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/jquery.svg')}}" alt="jquery"
                        class="w-full h-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       JQuey
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/git.svg')}}" alt="Git"
                        class="w-full h-full  rounded-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       Git
                    </span>
                </div>
            </div>
            <div
                class="w-40 h-40 flex flex-col justify-center items-center hover:shadow-lg  shadow-[#02112b] transition bg-[#02112b] rounded-xl text-base">
                <figure class="w-[50px] h-[50px] lg:h-[50px] lg:w-[50px]">
                    <img src="{{asset('/imgs/icon/github.svg')}}" alt="GitHub"
                        class="w-full h-full bg-white rounded-full" />
                </figure>  
                <div class="w-full my-2">
                    <span class="font-medium text-md">
                       GitHub
                    </span>
                </div>
            </div>
        </div>
    </section>
</div>