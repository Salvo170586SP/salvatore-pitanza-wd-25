<div>
    <header x-data="{ isOpen: false, activeTab: window.location.pathname === '/all-projects' ? 'Projects' : (window.location.pathname === '/documents' ? 'documents' : (window.location.pathname === '/drawings' ? 'Drawings' : 'home')) }" x-init="$watch('activeTab', value => {
        console.log('Active tab changed:', value);
    });"
        class="fixed top-0 left-0 right-0 px-3 py-2 z-50 lg:-mx-20 transition-all duration-300 ">

        <!-- Navigation bar -->
        <div
            class=" flex flex-col xl:flex-row items-center justify-between bg-white/90 backdrop-blur-md shadow-lg border rounded-lg px-3 md:px-10 py-2 mx-2 md:mx-10 lg:mx-40 transition-all duration-300">
            <div class="flex items-center justify-between w-full">

                <button class="flex items-center">
                    <figure class="w-7 md:w-10 h-7 md:h-10">
                        <img class="w-full h-full" src="{{ asset('imgs/icon/logo2.png') }}" alt="">
                    </figure>
                    <div class="font-bold pl-2 text-start leading-tight text-[#002057] text-sm">
                        Salvatore<br>
                        Pitanza
                    </div>
                </button>

                <!-- Menu hamburger per mobile -->
                <button @click="isOpen = !isOpen" class="xl:hidden cursor-pointer" aria-label="Toggle menu">
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

            <nav class="w-full lg:flex lg:flex-row justify-center items-center ">
                <ul class="w-full hidden xl:flex lg:flex-row justify-end items-center text-base"
                    :class="{ '!flex flex-col text-start py-2 space-y-2 md:space-y-0': isOpen }">

                    <li class="w-full lg:me-1 lg:mb-0 mb-4 mt-3 md:mt-0 lg:mt-0">
                        <a @click="activeTab = 'home'; isOpen = false" wire:navigate.replace href="/#home"
                            :class="{ 'bg-gray-100': activeTab === 'home' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">
                            Home
                        </a>
                    </li>
                    <li class="w-full lg:me-1 lg:mb-0 mb-4">
                        <a @click="activeTab = 'about'; isOpen = false" wire:navigate.replace href="/#about"
                            :class="{ 'bg-gray-100': activeTab === 'about' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg flex items-center transition-all whitespace-nowrap">{{ __('navbar.about') }}</a>
                    </li>
                    <li class="w-full lg:me-1 lg:mb-0 mb-4">
                        <a @click="activeTab = 'skills'; isOpen = false" wire:navigate.replace href="/#skills"
                            :class="{ 'bg-gray-100': activeTab === 'skills' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">{{ __('navbar.skills') }}</a>
                    </li>
                    <li class="w-full lg:me-1 mb-4 lg:mb-0">
                        <a @click="activeTab = 'education'; isOpen = false" wire:navigate.replace href="/#education"
                            :class="{ 'bg-gray-100': activeTab === 'education' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">{{ __('navbar.trainings') }}</a>
                    </li>
                    <li class="w-full mb-4 lg:me-1 lg:mb-0">
                        <a @click="activeTab = 'work'; isOpen = false" wire:navigate.replace href="/#work"
                            :class="{ 'bg-gray-100': activeTab === 'work' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">{{ __('navbar.works') }}</a>
                    </li>
                    <li class="w-full lg:me-1 lg:mb-0 mb-4 pe-2">
                        <a @click="activeTab = 'experience'; isOpen = false" wire:navigate.replace href="/#experience"
                            :class="{ 'bg-gray-100': activeTab === 'experience' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">{{ __('navbar.experiences') }}</a>
                    </li>
                  
                    <li class="lg:me-1 lg:mb-0 mb-4 lg-me-0 lg:ps-2 pt-2 lg:pt-0 w-full border-gray-300 lg:border-s lg:border-t-0 border-t">
                        <a @click="activeTab = 'Projects'; isOpen = false" wire:navigate href="/all-projects"
                            :class="{ 'bg-gray-100': activeTab === 'Projects' }"
                            class="cursor-pointer font-semibold  hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">
                            {{ __('navbar.projects') }}
                        </a>
                    </li>
                    <li class="w-full lg:me-1 lg:mb-0 mb-4">
                        <a @click="activeTab = 'Drawings'; isOpen = false" wire:navigate href="/drawings"
                            :class="{ 'bg-gray-100': activeTab === 'Drawings' }"
                            class="cursor-pointer font-semibold hover:bg-gray-100 p-2 rounded-lg transition-all flex items-center">
                            {{ __('navbar.drawings') }}</a>
                    </li>
                    <li class="lg:me-1 lg:mb-0 mb-4 lg:pe-2 pb-2 lg:pb-0 w-full border-gray-300 lg:border-e lg:border-b-0 border-b">
                        <a @click="activeTab = 'documents'; isOpen = false" wire:navigate href="/documents"
                            :class="{ 'bg-gray-100': activeTab === 'documents' }"
                            class="cursor-pointer font-semibold  hover:bg-gray-100 p-2 rounded-lg transition-all flex  items-center">
                            {{ __('navbar.cv') }}
                        </a>
                    </li>
                    
                    <li class="w-full">
                        <livewire:language-switcher />
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>
