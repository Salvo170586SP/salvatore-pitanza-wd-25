<div>
    <section id="experience" class="min-h-screen w-full container mx-auto flex flex-col py-10 md:py-25 items-center ">
        <div class="text-center w-full pb-10  md:p-0">
            <h2 class="font-bold text-3xl md:text-4xl flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9">
                    <path fill-rule="evenodd"
                        d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                        clip-rule="evenodd" />
                    <path
                        d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                </svg>

                <div>
                    My <span class='text-gray-500'>Experience</span>
                </div>
            </h2>
            <p class="font-medium text-sm mt-2">My main work experiences and socially dedicated actions.</p>
        </div>
        <div class="flex justify-center items-center flex-col flex-wrap lg:flex-row  mt-5 md:mt-10 px-4 md:px-0">
            @forelse($experiences->take(5) as $experience)
            {{-- card --}}
            <div class="flex flex-col justify-center items-center">
                <div
                    class="w-100 md:w-150 md:h-30 lg:h-30 lg:w-250 overflow-hidden bg-gray-50 flex flex-col border md:flex-row justify-center items-center hover:shadow-lg shadow transition rounded-xl">
                    <div class="w-full my-2 px-5">
                        <p class="text-xl font-bold">@if($experience->title){{$experience->title}}@endif</p>
                        <p class="text-md font-bold">@if($experience->subtitle){{$experience->subtitle}}@endif</p>
                        <p class="font-medium text-sm md:text-md">
                            @if($experience->description){{$experience->description}}@endif
                        </p>
                    </div>
                </div>
                @if(!$loop->last)
                <div class="w-1 h-8 bg-gray-600"></div>
                @endif
            </div>
            @empty

            <div class="flex flex-col justify-center items-center">
                <div
                    class="w-100 md:w-150 md:h-30 lg:h-30 lg:w-250 overflow-hidden bg-gray-50 flex flex-col border md:flex-row justify-center items-center hover:shadow-lg shadow transition rounded-xl">
                    <div class="w-full my-2 px-5">
                        <p class="text-xl font-bold">Non sono presenti esperienze</p>
                        <p class="font-medium text-sm md:text-md">
                            Non sono presenti esperienze lavorative o azioni dedite al sociale.
                        </p>
                    </div>
                </div>
                <div class="w-1 h-8 bg-gray-600"></div>
            </div>
            @endforelse

            {{-- <div class="flex flex-col justify-center items-center">
                <div
                    class="w-100 md:w-150 md:h-30 lg:h-30 lg:w-250 overflow-hidden  flex flex-col md:flex-row border justify-center items-center hover:shadow-lg shadow transition rounded-xl bg-gray-50">
                    <div class="w-full my-2 px-5">
                        <p class="text-xl font-bold">Laravel Developer</p>
                        <p class="text-md font-bold">Aqua Consulting</p>
                        <p class="font-medium text-sm md:text-md">
                            Laravel Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vitae iste dolorem
                            laborum
                            molestiae optio in omnis accusantium suscipit sint facere fuga maxime voluptatum
                            perspiciatis
                            sapiente, deserunt mollitia iure ex.
                        </p>
                    </div>
                </div>
                <div class="w-1 h-8 bg-gray-600"></div>
            </div> --}}

            {{-- <div class="flex flex-col justify-center items-center">
                <div
                    class="w-100 md:w-150 md:h-30 lg:h-30 lg:w-250 overflow-hidden  flex flex-col md:flex-row border justify-center items-center hover:shadow-lg shadow transition rounded-xl bg-gray-50">
                    <div class="w-full my-2 px-5">
                        <p class="text-xl font-bold">Full Stack Web Developer</p>
                        <p class="text-md font-bold">Boolean Careers</p>
                        <p class="font-medium text-sm md:text-md">
                            Laravel Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vitae iste dolorem
                            laborum
                            molestiae optio in omnis accusantium suscipit sint facere fuga maxime voluptatum
                            perspiciatis
                            sapiente, deserunt mollitia iure ex.
                        </p>
                    </div>
                </div>
                <div class="w-1 h-8 bg-gray-600"></div>
            </div> --}}

            {{-- <div class="flex flex-col justify-center items-center">
                <div
                    class="w-100 md:w-150 md:h-30 lg:h-30 lg:w-250 overflow-hidden flex flex-col md:flex-row border justify-center items-center hover:shadow-lg shadow transition rounded-xl bg-gray-50">
                    <div class="w-full my-2 px-5">
                        <p class="text-xl font-bold">Operatore Socio Sanitario</p>
                        <p class="font-medium text-sm md:text-md">
                            Laravel Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vitae iste dolorem
                            laborum
                            molestiae optio in omnis accusantium suscipit sint facere fuga maxime voluptatum
                            perspiciatis
                            sapiente, deserunt mollitia iure ex.
                        </p>
                    </div>
                </div>
                <div class="w-1 h-8 bg-gray-600"></div>
            </div> --}}

            {{-- <div class="flex flex-col justify-center items-center">
                <div
                    class="w-100 md:w-150 md:h-30 lg:h-30 lg:w-250  overflow-hidden flex flex-col md:flex-row border justify-center items-center hover:shadow-lg shadow transition rounded-xl bg-gray-50">
                    <div class="w-full my-2 px-5">
                        <p class="text-xl font-bold">Volontariato UNIPA</p>
                        <p class="text-md font-bold">Cooperativa "Who is Handy?"</p>
                        <p class="font-medium text-sm md:text-md">
                            Laravel Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vitae iste dolorem
                            laborum
                            molestiae optio in omnis accusantium suscipit sint facere fuga maxime voluptatum
                            perspiciatis
                            sapiente, deserunt mollitia iure ex.
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
</div>