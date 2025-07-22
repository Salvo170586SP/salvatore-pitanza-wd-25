<div>
    <div class="flex h-full mx-auto text-black dark:text-white md:px-8">
        <div class="w-full p-5">
            <div class="w-full flex justify-between items-center mb-5 pb-5">
                <div class="flex items-end font-bold text-lg text-center uppercase">
                    {{ $experience->title }}
                </div>
                <button wire:navigate href="/dashboard/experiences"
                    class="rounded-md cursor-pointer flex justify-center items-center shadow w-[200px] h-[36px] bg-gray-400 hover:bg-gray-600 dark:bg-[#474747] hover:dark:bg-[#505050] text-[15px] font-semibold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to Experience
                </button>
            </div>
            <div class="flex gap-3">
                <div class="flex flex-col w-full mb-5">
                    <div class="font-bold ms-1 mb-1">Title</div>
                    <div
                        class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2">
                        {{ $experience->title ?? '-' }}</div>
                </div>
                <div class="flex flex-col w-full mb-5">
                    <div class="font-bold ms-1 mb-1">Title Ita</div>
                    <div
                        class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2">
                        {{ $experience->title_ita ?? '-' }}</div>
                </div>
            </div>
            <div class="flex gap-3">
                <div class="flex flex-col w-full mb-5">
                    <div class="font-bold ms-1 mb-1">Subtitle</div>
                    <div
                        class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2">
                        {{ $experience->subtitle ?? '-' }}</div>
                </div>
                <div class="flex flex-col w-full mb-5">
                    <div class="font-bold ms-1 mb-1">Subtitle Ita</div>
                    <div
                        class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2">
                        {{ $experience->subtitle_ita ?? '-' }}</div>
                </div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Description</div>
                <div
                    class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2  h-[200px] overflow-auto break-all">
                    @if ($experience->description)
                        {{ $experience->description }}
                    @else
                        <span class="text-gray-400">Descrizione non disponibile</span>
                    @endif
                </div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Description Ita</div>
                <div
                    class="rounded-lg bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] p-2  h-[200px] overflow-auto break-all">
                    @if ($experience->description_ita)
                        {{ $experience->description_ita }}
                    @else
                        <span class="text-gray-400">Descrizione non disponibile</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
