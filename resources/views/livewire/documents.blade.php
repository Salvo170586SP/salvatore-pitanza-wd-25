<div>
    <div class="min-h-screen w-full mx-auto flex flex-col py-25 items-center bg-slate-50">
        <livewire:components-welcome.navbar />

        <div class="text-center w-full pb-10">
            <h2 class="font-bold text-3xl md:text-4xl flex items-end justify-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-8">
                    <path
                        d="M7.5 3.375c0-1.036.84-1.875 1.875-1.875h.375a3.75 3.75 0 0 1 3.75 3.75v1.875C13.5 8.161 14.34 9 15.375 9h1.875A3.75 3.75 0 0 1 21 12.75v3.375C21 17.16 20.16 18 19.125 18h-9.75A1.875 1.875 0 0 1 7.5 16.125V3.375Z" />
                    <path
                        d="M15 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 17.25 7.5h-1.875A.375.375 0 0 1 15 7.125V5.25ZM4.875 6H6v10.125A3.375 3.375 0 0 0 9.375 19.5H16.5v1.125c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V7.875C3 6.839 3.84 6 4.875 6Z" />
                </svg>

                <div class="text-[30px] uppercase">
                    My
                    <span class="text-blue-600">Documents</span>
                </div>
            </h2>
            <p class="font-medium text-sm mt-2">Page dedicated to my certificates and professional skills. <br>
                Here you will find my CV, certificates and cover letter, to explore my experiences and qualifications
                achieved.</p>
        </div>

        @if($documents->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 p-4 md:p-8 w-full max-w-7xl mx-auto">
            @foreach($documents as $document)
            {{-- card --}}
            <div
                class="w-full h-full aspect-[3/2] border bg-gray-100  text-black hover:shadow-xl rounded-x transition duration-300 ease-in-out rounded-xl flex justify-center items-center">
                <div class="w-full font-bold text-lg p-4 text-center">
                    <h3 class="text-gray-800 uppercase mb-2">{{ $document->title }}</h3>
                    <div class="w-full">
                        <div class="text-sm text-gray-500 mb-2">
                            {{ $document->description }}
                        </div>
                        <div class="w-full flex justify-center gap-2">
                            <a href="{{ asset('/storage/'.$document->img_url) }}" target="_blank"
                                class="cursor-pointer uppercase flex items-center bg-gray-400 hover:bg-gray-600 px-5 py-2 text-sm text-white font-semibold rounded-lg">
                                @php
                                    $extension = pathinfo($document->img_url, PATHINFO_EXTENSION);
                                    $isPdf = strtolower($extension) === 'pdf';
                                @endphp
                                
                                @if($isPdf)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 me-1">
                                    <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V7.875L14.25 1.5H5.625zM14.25 7.875V3L19.125 7.875H14.25z" />
                                </svg>
                                @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5 me-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                @endif
                                {{ $isPdf ? 'Open PDF' : 'View Image' }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-gray-500 text-center text-lg">Don't have upload documents</p>
        @endif
    </div>
        <livewire:components-welcome.footer />
     <livewire:components-welcome.scroll-to-top />
</div>