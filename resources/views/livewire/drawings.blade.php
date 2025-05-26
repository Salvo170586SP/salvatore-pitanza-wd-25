<div>
    <div class="min-h-screen w-full mx-auto flex flex-col py-25 items-center bg-slate-50">
        <livewire:components-welcome.navbar />

        <div class="text-center w-full pb-10">
            <h2 class="font-bold text-3xl md:text-4xl flex items-end justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                </svg>
                <div>
                    My
                    <span class="text-gray-500">Drawings</span>
                </div>
            </h2>
            <p class="font-medium text-sm mt-2">I create portraits on request. Drawings made with graphite and charcoal.
                <br> * hover over the image to see details</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-4 md:p-8 w-full max-w-7xl mx-auto">
            @forelse($drawings as $drawing)
            {{-- card --}}
            <div wire:key="drawing-{{$drawing->id}}"
                class="w-full aspect-[3/2] flex flex-col justify-center items-center overflow-hidden bg-white hover:shadow-xl rounded-xl text-base relative transition duration-300 ease-in-out hover:-translate-y-1">
                <figure class="w-full h-full">
                    <img class="w-full h-full object-cover" src="{{asset('storage/'.$drawing->img_url)}}"
                        alt="{{$drawing->img_name}}" />
                </figure>
                @if($drawing->url_web)
                <div
                    class="absolute top-0 left-0 w-full h-full bg-gray-100/70 backdrop-blur-md text-black opacity-0 hover:opacity-100 transition duration-300 ease-in-out rounded-xl flex justify-center items-center">
                    <div class="w-full font-bold text-lg p-4 text-center">
                        <div class="w-full">
                            <div class="text-sm text-gray-600 mb-5">
                                Guarda sulla mia pagina IG
                            </div>
                            <div class="w-full flex justify-center gap-2">
                                <a href="{{$drawing->url_web}}" target="_blank"
                                    class="cursor-pointer flex items-center bg-gray-500 hover:bg-gray-600 px-5 py-2 text-sm text-white font-medium rounded-lg"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Vedi</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @empty
            <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center">
                <p class="text-gray-500">Non ci sono disegni disponibili al momento.</p>
            </div>
            @endforelse
        </div>
    </div>
    <livewire:components-welcome.footer />
</div>