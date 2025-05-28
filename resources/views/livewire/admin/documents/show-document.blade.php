<div>
    <div class="flex h-full mx-auto text-black md:px-8">
        <div class="w-[600px] h-auto me-5 mt-5">
            <div class="flex items-center justify-center">
                @if($this->isPdf())
                <!-- Anteprima PDF -->
                <iframe class="w-full h-[700px] rounded-lg border dark:border-[#505050] dark:bg-[#505050]" 
                    src="{{ asset('/storage/'.$document->img_url) }}" type="application/pdf">
                </iframe>
                @else
                <!-- Anteprima Immagine -->
                <figure class="w-[400px] h-[500px] cursor-pointer" wire:click="$toggle('showImagePreview')">
                    <img class="w-full h-full rounded-lg border dark:border-[#505050] dark:bg-[#505050] object-cover object-top"
                        src="{{ isset($document->img_url) ? asset('/storage/'.$document->img_url) : 'https://static.thenounproject.com/png/261694-200.png' }}"
                        alt="{{$document->title}}">
                </figure>
                @endif
            </div>

            <!-- anteprima dell'immagine -->
            @if($showImagePreview && $document->type !== 'pdf')
            <div class="fixed inset-0 flex items-center justify-center z-50" wire:click="$toggle('showImagePreview')">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="relative z-10">
                    <img class="max-w-3xl max-h-[80vh] rounded-lg"
                        src="{{ isset($document->img_url) ? asset('/storage/'.$document->img_url) : 'https://static.thenounproject.com/png/261694-200.png' }}"
                        alt="{{$document->title}}">
                </div>
            </div>
            @endif
        </div>

        <div class="w-full h-[750px] p-5 dark:text-white">
            <div class="w-full flex justify-between mb-5 pb-5">
                <div class="font-bold text-lg text-center uppercase">
                    {{$document->title}}
                </div>
                <button wire:navigate href="/dashboard/documents"
                    class="rounded-md cursor-pointer flex justify-center items-center shadow w-[200px] h-[36px] bg-gray-400 hover:bg-gray-600 dark:bg-[#474747] hover:dark:bg-[#505050] text-[15px] font-semibold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to Documents
                </button>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Title</div>
                <div class="rounded-lg dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] bg-gray-100 hover:bg-gray-200 p-2">{{$document->title ?? '-'}}</div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Img Name</div>
                <div class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2">{{$document->img_name ?? '-'}}</div>
            </div>
           
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Description</div>
                <div class="rounded-lg bg-gray-100 hover:bg-gray-200 p-2 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] h-[300px] overflow-auto break-all">@if($document->description)
                    {{$document->description}} @else <span class="text-gray-400">Descrizione non disponibile</span>
                    @endif</div>
            </div>
        </div>
    </div>
</div>