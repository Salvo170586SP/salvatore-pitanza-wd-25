<div>
    <section id="about" class="w-full container mx-auto flex flex-col py-10 md:py-25 items-center">
        <div class="text-center w-full py-15 md:py-0 md:pb-10">
            <h2 class="font-bold text-3xl md:text-4xl flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-7 md:size-9">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                        clip-rule="evenodd" />
                </svg>
                <div>
                   About <span class='text-gray-500'>Me</span>
                </div>
            </h2>
        </div>
        <div class="flex justify-center items-center flex-col lg:flex-row text-center gap-5 px-4 md:px-0">
            @if($biographies->isEmpty())
            <div class="text-gray-600 font-medium">
                <p class="text-medium">No biography available at the moment.</p>
            </div>
            @else
            @foreach($biographies as $biography)
            <figure class="w-[350px] h-[350px] md:w-[350px] md:h-[350px] lg:h-[400px] lg:w-[400px] lg:me-20">
                <img src="@if($biography->img_url){{asset('storage/'. $biography->img_url)}} @else https://savefumisteria.it/wp-content/uploads/2023/09/placeholder-711.png @endif"
                    alt="profile-photo"
                    class="w-full h-full object-cover rounded-2xl md:rounded-3xl border shadow-xl md:shadow-2xl filter grayscale hover:grayscale-0 transition-all duration-300" />
            </figure>
            <div
                class="w-full md:w-2/3 lg:w-1/3 flex flex-col justify-center items-center text-justify text-sm lg:text-base mt-5 lg:mt-0 px-4 md:px-0">
                <p class="font-semibold">
                    @if($biography->description)
                    {!! $biography->description !!}
                    @else
                    <span class="text-gray-700">Coming soon...</span>
                    @endif
                </p>
                <div class="w-full my-4 md:my-5 lg:mt-10">
                    <button wire:navigate href="/documents"
                        class="bg-[#002057] w-[180px] md:w-[200px] flex items-center justify-center md:mx-0 text-white rounded-xl font-semibold px-4 md:px-6 py-2 md:py-3 cursor-pointer transition shadow-[#002057] shadow hover:shadow-md text-sm md:text-base">
                          Details
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 ms-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </section>
</div>