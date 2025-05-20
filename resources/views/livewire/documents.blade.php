<div>
    <div class="min-h-screen w-full mx-auto flex flex-col py-25 items-center bg-slate-50">
        <livewire:components-welcome.navbar />

        <div class="text-center w-full pb-10">
            <h2 class="font-bold text-3xl md:text-4xl flex items-end justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9">
                    <path
                        d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z" />
                    <path
                        d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z" />
                </svg>

                <div>
                    My
                    <span class="text-gray-500">Documents</span>
                </div>
            </h2>
            <p class="font-medium text-sm mt-2">Benvenuto nella sezione dedicata ai certificati e alle mie competenze
                professionali. <br> Qui troverai il mio curriculum vitae, attestati e lettera di presentazione, per
                esplorare le mie esperienze e le qualifiche conseguite.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-4 md:p-8 w-full max-w-7xl mx-auto">
            {{-- card --}}
            <div
                class="w-full aspect-[3/2] flex flex-col justify-center items-center overflow-hidden bg-white hover:shadow-xl rounded-xl text-base relative transition duration-300 ease-in-out hover:-translate-y-1">
                <figure class="w-full h-full">
                    <img class="w-full h-full object-cover" src="{{asset('/imgs/progetti/Screenshot1.png')}}"
                        alt="laravel" />
                </figure>
                <div
                    class="absolute top-0 left-0 w-full h-full bg-gray-100/70 backdrop-blur-md text-black opacity-0 hover:opacity-100 transition duration-300 ease-in-out rounded-xl flex justify-center items-center">
                    <div class="w-full font-bold text-lg p-4 text-center">
                        <h3 class="text-blue-800 block mb-2">Progetto</h3>
                        <div class="w-full">
                            <div class="text-sm text-gray-600 mb-2">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.

                            </div>
                            <div class="w-full flex justify-center gap-2">
                                <button
                                    class="cursor-pointer flex items-center bg-gray-500 hover:bg-gray-600 px-5 py-2 text-sm text-white font-medium rounded-lg"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                    Vedi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>