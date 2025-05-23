<div>
    <div class="w-full relative px-3 text-black">
        <div class="max-w-full mx-5 p-5 bg-white rounded-lg">
            <div class="h-[66px] flex items-center justify-between border-b mb-10">
                <h3 class="text-gray-900 text-lg font-bold uppercase">Training / Edit</h3>
                <button wire:navigate href="/admin/trainings"
                    class="flex justify-around items-center rounded-md shadow py-2 px-5 bg-gray-400 hover:bg-gray-600 cursor-pointer text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-[15px] font-semibold">
                        Back to Trainings
                    </span>
                </button>
            </div>

            <div class="w-full flex gap-5 mb-5">
             
                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col justify-between">
                        <label for="title">Title*</label>
                        <input type="text" wire:model="title" id="title"
                            class="border border-[#D8D5D5] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('title')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col justify-between">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" wire:model="subtitle" id="subtitle"
                            class="border border-[#D8D5D5] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('subtitle')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
               <div class="w-full flex flex-col mb-5">
                    <div class="w-full  flex flex-col justify-between">
                        <label for="icon_url">Icon*</label>
                        <textarea  wire:model="icon_url" id="icon_url" rows="5"
                            class="border border-[#D8D5D5] px-1 rounded  w-full text-md">
                        </textarea>
                    </div>
                    @error('icon_url')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            <div class="w-full flex flex-col">
                <div class=" flex flex-col justify-between">
                    <label for="description">Description</label>
                    <textarea wire:model="description" id="description" rows="5"
                        class="border px-1 border-[#D8D5D5] rounded  text-md"></textarea>
                </div>
                @error('description')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex justify-end items-center mt-5">
                <button type="button" @click="fileName = ''; imageUrl = ''" wire:click="resetForm"
                    class="cursor-pointer  flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-gray-400 hover:bg-gray-600 text-[15px] font-semibold text-white me-3">
                    Cancel
                </button>
                <button wire:click="editTraining"
                    class="cursor-pointer flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-blue-400 hover:bg-blue-600 text-[15px] font-semibold text-white">
                    Add
                </button>
            </div>

        </div>
    </div>
</div>