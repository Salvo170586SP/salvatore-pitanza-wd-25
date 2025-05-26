<div>
    <div class="flex h-full mx-auto text-black dark:text-white md:px-8">
        <div class="w-full p-5">
            <div class="w-full flex justify-between items-center mb-5 pb-5">
                <div class="flex items-end font-bold text-lg text-center uppercase">
                    <div class="me-5 mt-5">
                        <div class="h-15 w-15 font-bold flex justify-center items-center bg-gray-300 dark:bg-[#474747] rounded-lg p-2">
                            {!! $training->icon_url !!}
                        </div>
                    </div>
                    {{$training->title}}
                </div>
                <button wire:navigate href="/admin/trainings"
                    class="rounded-md cursor-pointer flex justify-center items-center shadow w-[200px] h-[36px] bg-gray-400 hover:bg-gray-600 dark:bg-[#474747] hover:dark:bg-[#505050] text-[15px] font-semibold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to Trainings
                </button>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Title</div>
                <div class="rounded-lg border dark:border-[#505050] dark:bg-[#505050] p-2">{{$training->title ?? '-'}}</div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Subtitle</div>
                <div class="rounded-lg border dark:border-[#505050] dark:bg-[#505050] p-2">{{$training->subtitle ?? '-'}}</div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Description</div>
                <div class="rounded-lg border dark:border-[#505050] dark:bg-[#505050] p-2  h-[200px] overflow-auto break-all">@if($training->description)
                    {{$training->description}} @else <span class="text-gray-400">Descrizione non disponibile</span>
                    @endif</div>
            </div>
        </div>
    </div>
</div>