<div class="relative max-h-screen overflow-hidden">

    <!-- Particles background -->
    <div id="particles-js" class="absolute inset-0" style="pointer-events: all; z-index: 1;"></div>

    <!-- Content wrapper -->
    <div class="relative h-screen" style="z-index: 2;">
        <header x-data="{ isOpen: false, activeTab: 'home' }" class="fixed top-0 left-0 right-0 px-5 py-3 z-50">

            <!-- Navigation bar -->
            <div
                class="flex flex-col md:flex-row items-center justify-between bg-white shadow-lg border rounded-xl px-4 md:px-10 py-3 mx-4 md:mx-10 lg:mx-40">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <button class="flex items-center">
                        <figure class="w-8 md:w-10 h-8 md:h-10">
                            <img class="w-full h-full" src="{{asset('imgs/icon/logo2.png')}}" alt="">
                        </figure>
                        <div class="font-bold pl-2 text-start leading-tight text-[#002057]">
                            Salvatore<br>
                            Pitanza
                        </div>
                    </button>

                    <!-- Menu hamburger per mobile -->
                    <button @click="isOpen = !isOpen" class="md:hidden cursor-pointer" aria-label="Toggle menu">
                        <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#002057]"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-16 6h16" />
                        </svg>
                        <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#002057]"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="w-full md:w-auto">
                    <ul class="hidden md:flex md:flex-row justify-center items-center text-base md:text-lg gap-5 md:gap-8"
                        :class="{ '!flex flex-col text-start': isOpen }">
                        <li>
                            <button @click="activeTab = 'home'"
                                :class="{'underline underline-offset-10 text-blue-500': activeTab === 'home'}"
                                class="cursor-pointer font-bold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">Home</button>
                        </li>
                        <li>
                            <button @click="activeTab = 'about'"
                                :class="{'underline underline-offset-10 text-blue-500': activeTab === 'about'}"
                                class="cursor-pointer font-semibold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">About</button>
                        </li>
                        <li>
                            <button @click="activeTab = 'skills'"
                                :class="{'underline underline-offset-10 text-blue-500': activeTab === 'skills'}"
                                class="cursor-pointer font-semibold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">Skills</button>
                        </li>
                        <li>
                            <button @click="activeTab = 'education'"
                                :class="{'underline underline-offset-10 text-blue-500': activeTab === 'education'}"
                                class="cursor-pointer font-semibold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">Education</button>
                        </li>
                        <li>
                            <button @click="activeTab = 'work'"
                                :class="{'underline underline-offset-10 text-blue-500': activeTab === 'work'}"
                                class="cursor-pointer font-semibold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">Work</button>
                        </li>
                        <li>
                            <button @click="activeTab = 'experience'"
                                :class="{'underline underline-offset-10 text-blue-500': activeTab === 'experience'}"
                                class="cursor-pointer font-semibold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">Experience</button>
                        </li>

                        <li class="mb-5 md:m-0">
                            @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/dashboard') }}"
                                class="cursor-pointer font-bold hover:underline hover:underline-offset-10 hover:text-blue-500 transition-all">
                                Dashboard
                            </a>
                            @else
                            <a href="{{ route('login') }}"
                                class="cursor-pointer font-bold   hover:text-blue-500 transition-all border-2 border-blue-500 text-blue-500 px-5 py-2 rounded-lg">
                                Log in
                            </a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="cursor-pointer font-bold  px-5 py-2 rounded-lg ms-5 bg-blue-500 text-white hover:bg-blue-600 transition-all">
                                Register
                            </a>
                            @endif
                            @endauth
                            @endif
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main content -->
        <section id="jumbtron" class="z-20 flex justify-center mt-30 md:mt-32 lg:mt-82 px-4 md:px-0">
            <div
                class="container tilt-container flex flex-col-reverse md:flex-row items-center justify-around gap-8 md:gap-4">
                <div class="text-center md:text-left">
                    <p class="text-[#002057] text-3xl md:text-4xl lg:text-[4rem] font-bold mb-5">
                        Hi There, <br />
                        I'm Salvatore <span class="text-yellow-500">Pitanza</span>
                    </p>
                    <button
                        class="bg-[#002057] flex items-center justify-center mx-auto md:mx-0 text-white rounded-xl font-semibold px-6 md:px-8 py-3 cursor-pointer transition shadow-[#002057] shadow hover:shadow-md text-sm md:text-base">About
                        Me
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="size-6 ms-2">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-.53 14.03a.75.75 0 0 0 1.06 0l3-3a.75.75 0 1 0-1.06-1.06l-1.72 1.72V8.25a.75.75 0 0 0-1.5 0v5.69l-1.72-1.72a.75.75 0 0 0-1.06 1.06l3 3Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <div class="flex items-center justify-center md:justify-start gap-4 mt-5">
                        <button title="LinkedIn"
                            class="mt-4 cursor-pointer bg-slate-100 p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                            <img class="w-6 md:w-7 h-6 md:h-7" src="{{asset('imgs/icon/linkedin.svg')}}" alt="LinkedIn">
                        </button>
                        <button title="GitHub"
                            class="mt-4 cursor-pointer bg-slate-100 p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                            <img class="w-6 md:w-7 h-6 md:h-7" src="{{asset('imgs/icon/github.svg')}}" alt="GitHub">
                        </button>
                        <button title="Instagram"
                            class="mt-4 cursor-pointer bg-slate-100 p-2 rounded-full shadow-md hover:shadow-lg transition-all border">
                            <img class="w-6 md:w-7 h-6 md:h-7" src="{{asset('imgs/icon/instagram.svg')}}"
                                alt="Instagram">
                        </button>
                    </div>
                </div>

                <figure
                    class="perspective-[800px] cursor-pointer transform-style-preserve-3d transition-transform duration-300">
                    <img src="{{asset('imgs/icon/logo2.png')}}" alt="logo-jumb" class="tilt-element w-[200px] h-[200px] md:w-[300px] md:h-[300px] lg:w-[400px] lg:h-[400px] 
                    transition rounded-full bg-white border
                    drop-shadow-lg " />
                </figure>
            </div>
        </section>
    </div>
</div>



@assets
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
@endassets

@script
<script>
    const tiltElement = document.querySelector('.tilt-element');

            tiltElement.addEventListener('mousemove', function(e) {
                    const rect = tiltElement.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = ((y - centerY) / centerY) * -20;
                    const rotateY = ((x - centerX) / centerX) * 20;
                    
                    tiltElement.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                });

                tiltElement.addEventListener('mouseleave', function() {
                    tiltElement.style.transform = 'rotateX(0) rotateY(0)';
                });

                 particlesJS("particles-js", {
                    particles: {
                        number: {
                            value: 200,
                            density: {
                                enable: true,
                                value_area: 2000
                            }
                        },
                        color: {
                            value: "#002057"
                        },
                        shape: {
                            type: "circle"
                        },
                        opacity: {
                            value: 0.5,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 3,
                            random: true
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#002057",
                            opacity: 0.2,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 1,
                            direction: "none",
                            random: true,
                            straight: false,
                            out_mode: "bounce",
                            bounce: true,
                            attract: {
                                enable: true,
                                rotateX: 600,
                                rotateY: 1200
                            }
                        }
                    },
                    interactivity: {
                        detect_on: "window",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "bubble"
                            },
                            onclick: {
                                enable: true,
                                mode: "repulse"
                            },
                            resize: true
                        },
                        modes: {
                            bubble: {
                                distance: 200,
                                size: 6,
                                duration: 2,
                                opacity: 0.8,
                                speed: 3
                            },
                            repulse: {
                                distance: 200,
                                duration: 2
                            }
                        }
                    },
                    retina_detect: true
                });

</script>
@endscript