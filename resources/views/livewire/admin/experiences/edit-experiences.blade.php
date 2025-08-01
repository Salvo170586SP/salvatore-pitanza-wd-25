<div>
    <div class="w-full relative px-3 text-black dark:text-white">
        <div class="max-w-full mx-5 p-5">
            <div class="h-[66px] flex items-center justify-between mb-10">
                <h3 class="text-lg font-bold uppercase">Experiences / Edit</h3>
                <button wire:navigate href="/dashboard/experiences"
                    class="flex justify-around items-center rounded-md shadow py-2 px-5 bg-gray-400 hover:bg-gray-600 dark:bg-[#474747] hover:dark:bg-[#505050] cursor-pointer text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-[15px] font-semibold">
                        Back to Experiences
                    </span>
                </button>
            </div>

            <div class="w-full flex gap-5 mb-5">
                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col justify-between">
                        <label for="title">Title*</label>
                        <input type="text" wire:model="title" id="title"
                            class="bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('title')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col justify-between">
                        <label for="title_ita">Title Ita</label>
                        <input type="text" wire:model="title_ita" id="title_ita"
                            class="bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('title_ita')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="w-full flex gap-5 mb-5">
                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col justify-between">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" wire:model="subtitle" id="subtitle"
                            class="bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('subtitle')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col justify-between">
                        <label for="subtitle_ita">Subtitle Ita</label>
                        <input type="text" wire:model="subtitle_ita" id="subtitle_ita"
                            class="bg-gray-100 hover:bg-gray-200 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('subtitle_ita')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="w-full flex flex-col mb-3">
                <div class=" flex flex-col justify-between">
                    <label for="description">Description</label>
                    <textarea wire:model="description" id="description" rows="5"
                        class="bg-gray-100 hover:bg-gray-200 px-1  dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] rounded  text-md"></textarea>
                </div>
                @error('description')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="w-full flex flex-col">
                <div class=" flex flex-col justify-between">
                    <label for="description_ita">Description Ita</label>
                    <textarea wire:model="description_ita" id="description_ita" rows="5"
                        class="bg-gray-100 hover:bg-gray-200 px-1  dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] rounded  text-md"></textarea>
                </div>
                @error('description_ita')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex justify-end items-center mt-5">
                <button type="button" @click="fileName = ''; imageUrl = ''" wire:click="resetForm"
                    class="cursor-pointer  flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-gray-400 hover:bg-gray-600 dark:bg-[#505050] dark:hover:bg-[#585858] text-[15px] font-semibold text-white me-3">
                    Cancel
                </button>
                <button wire:click="editExperience"
                    class="cursor-pointer flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-blue-400 hover:bg-blue-600 dark:bg-blue-700  text-[15px] font-semibold text-white">
                    Edit
                </button>
            </div>

        </div>
    </div>
</div>
