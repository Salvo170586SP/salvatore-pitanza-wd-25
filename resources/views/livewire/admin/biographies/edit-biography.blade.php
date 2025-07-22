<div>
    <div class="w-full relative px-3 text-black dark:text-white">
        <div class="max-w-full mx-5 p-5">
            <div class="h-[66px] flex items-center justify-between mb-10">
                <h3 class="text-lg font-bold uppercase">Biography / Edit</h3>
                <button wire:navigate href="/dashboard/biographies"
                    class="flex justify-around items-center rounded-md shadow py-2 px-5 text-white bg-gray-400 hover:bg-gray-600 dark:bg-[#505050] dark:hover:bg-[#585858] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-[15px] font-semibold">
                        Back to Biographies
                    </span>
                </button>
            </div>

            <div class="w-full flex gap-5">
                <div x-data="{ fileName: '', imageUrl: '' }"
                    @form-reset.window="fileName = ''; imageUrl = ''"
                    class="mb-10 mt-5">
                    <div class="text-sm text-gray-600">
                        <div class="space-y-2">
                            <figure class="w-[350px] h-[369px] overflow-hidden shadow-md">
                                <img :src="imageUrl ? imageUrl : '{{ $img_url_existing ?? 'https://static.thenounproject.com/png/261694-200.png' }}'"
                                    class="w-full h-full object-cover object-top bg-gray-100 dark:bg-[#4b4b4b] opacity-50 @if ($img_url_existing) opacity-100 @endif
                    rounded-lg" alt="Anteprima immagine">
                    </figure>
                </div>
            </div>
            <div class="flex flex-col items-center mt-5">
                <label for="image_upload" class="mb-2">Upload Image*</label>
                <div class="relative group">
                    <input type="file" id="image_upload" name="image_upload"
                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*"
                        wire:model="img_url"
                        x-on:change="
                                fileName = $event.target.files[0].name;
                                imageUrl = URL.createObjectURL($event.target.files[0])
                                ">
                    <div
                        class="w-full h-[37px] rounded-md bg-gray-400 group-hover:bg-gray-600 dark:bg-[#505050] dark:group-hover:bg-[#585858] text-white flex items-center justify-center px-5 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                clip-rule="evenodd" />
                        </svg>
                        Selected file
                    </div>
                    @error('img_url')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="w-full">
            <div class="w-full flex flex-col">
                <div class="flex flex-col justify-between items-start">
                    <label for="description">Description *</label>
                    <textarea wire:model="description" id="description" rows="15"
                        class="w-full shadow p-1 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] bg-gray-100 hover:bg-gray-200 rounded-lg  text-md"></textarea>
                </div>
                @error('description')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div class="w-full flex flex-col mt-5">
                <div class="flex flex-col justify-between items-start">
                    <label for="description_ita">Description ita *</label>
                    <textarea wire:model="description_ita" id="description_ita" rows="15"
                        class="w-full shadow p-1 dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] bg-gray-100 hover:bg-gray-200 rounded-lg  text-md"></textarea>
                </div>
                @error('description_ita')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class="w-full flex justify-end items-center mt-5">
        <button type="button" @click="fileName = ''; imageUrl = ''" wire:click="resetForm"
            class="cursor-pointer  flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-gray-400 hover:bg-gray-600 dark:bg-[#505050] dark:hover:bg-[#585858] text-[15px] font-semibold text-white me-3">
            Cancel
        </button>
        <button wire:click="editBiography"
            class="cursor-pointer flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-blue-400 hover:bg-blue-600 dark:bg-blue-700 text-[15px] font-semibold text-white">
            Edit
        </button>
    </div>
</div>
</div>
