<div>
    <section id="work" class="w-full mx-auto flex flex-col py-20 items-center bg-slate-100 border-t">
        <div class="text-center w-full pb-12">
            <h2 class="font-bold text-3xl md:text-4xl text-gray-800 flex items-center justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                    <path fill-rule="evenodd"
                        d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z"
                        clip-rule="evenodd" />
                </svg>


                <div class="font-bold">
                    {!! __('projects.title') !!}
                </div>
            </h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-8 w-full max-w-7xl mx-auto">

            @foreach ($projects->take(5) as $project)
                {{-- card --}}
                <div
                    class="w-full border border-gray-400  aspect-[3/2] flex flex-col justify-center items-center overflow-hidden bg-white hover:shadow-xl rounded-xl text-base relative transition duration-300 ease-in-out hover:-translate-y-1">
                    @if ($project->img_url)
                        <figure class="w-full h-full">
                            <img class="w-full h-full object-cover" src="{{ asset('/storage/' . $project->img_url) }}"
                                alt="{{ $project->img_name }}" />
                        </figure>
                    @else
                        <div
                            class="aspect-[3/2] border border-gray-400 w-full h-full flex items-center justify-center text-lg font-bold text-gray-50 rounded-lg overflow-hidden border bg-gray-300">
                            IMG
                        </div>
                    @endif
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-gray-100/80 backdrop-blur-md text-black opacity-0 hover:opacity-100 transition duration-300 ease-in-out rounded-xl flex justify-center items-center">
                        <div class="w-full font-bold text-lg p-4 text-center">
                            <h3 class="text-blue-800 block mb-2">{{ $project->title }}</h3>
                            <div class="w-full flex justify-center items-center">
                                @if ($project->is_aviable)
                                    <div class="flex text-sm items-center text-green-600">
                                        @if (session('locale') == 'en')
                                            Completed
                                        @else
                                            Completato
                                        @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5 text-green-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                @else
                                    <div class="flex text-sm items-center text-green-600">
                                        @if (session('locale') == 'en')
                                            Not Completed
                                        @else
                                            Non Completato
                                        @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5 text-red-600">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                    </div>
                                @endif
                            </div>
                            <div class="w-full">
                                <div class="text-sm text-gray-600 mb-2">
                                    {{ $project->description }}
                                </div>
                                <div class="w-full flex justify-center gap-2">
                                    @if ($project->url_git)
                                        <a href="{{ $project->url_git }}" target="_blank"
                                            class="cursor-pointer flex items-center bg-black hover:bg-gray-700 px-5 py-2 text-xs text-white font-medium rounded-lg"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                            </svg>
                                            Code
                                        </a>
                                    @endif
                                    @if ($project->url_web)
                                        <a href="{{ $project->url_web }}" target="_blank"
                                            class="cursor-pointer flex items-center bg-black hover:bg-gray-700 px-5 py-2 text-xs text-white font-medium rounded-lg"><svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                            Vedi</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button wire:navigate href="/all-projects"
            class="bg-black w-[250px] mt-5 flex items-center group justify-center mx-auto md:mx-0 text-white rounded-xl font-semibold transition-all px-4 md:px-8 py-2 cursor-pointer transition hover:shadow text-sm md:text-base">
            Tutti i progetti
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-5 ms-2 group-hover:ms-5 transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
        </button>
    </section>
</div>
