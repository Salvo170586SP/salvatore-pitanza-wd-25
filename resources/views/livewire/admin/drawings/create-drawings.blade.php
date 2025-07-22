<div>
    <div class="w-full relative px-3 text-black dark:text-white">
        <div class="max-w-full mx-5 p-5">
            <div class="h-[66px] flex items-center justify-between mb-10">
                <h3 class="text-lg font-bold uppercase">Drawing / Create</h3>
                <button wire:navigate href="/dashboard/drawings"
                    class="flex justify-around items-center dark:bg-[#474747] hover:dark:bg-[#505050] rounded-md shadow py-2 px-5 bg-gray-400 hover:bg-gray-600 cursor-pointer text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-[15px] font-semibold">
                        Back to Drawings
                    </span>
                </button>
            </div>

            <div x-data="{ fileName: '', imageUrl: '' }" @form-reset.window="fileName = ''; imageUrl = ''"
                class="h-[290px] flex flex-col justify-center items-center mb-10">
                <div class="text-sm text-gray-600">
                    <div  x-show="imageUrl" class="space-y-2">
                        <figure class="w-[250px] h-[250px] overflow-hidden shadow-md">
                            <img :src="imageUrl"
                                class="w-full h-full object-cover object-top bg-gray-100 dark:bg-[#4b4b4b] opacity-50 rounded-lg" :class="imageUrl ? 'opacity-100' : ''" alt="Anteprima immagine">
                        </figure>
                    </div>
                    <div x-show="!imageUrl" class="space-y-2">
                        <div class="w-[250px] h-[200px] flex items-center justify-center text-3xl font-bold text-orange-400 rounded-lg overflow-hidden border bg-yellow-50">
                            IMG
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center mt-5">
                    <label for="image_upload" class="mb-2">Upload Drawing*</label>
                    <div class="relative group">
                        <input type="file" id="image_upload" name="image_upload"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*"
                            wire:model="img_url" x-on:change="
                    fileName = $event.target.files[0].name;
                    imageUrl = URL.createObjectURL($event.target.files[0])
                    ">
                        <div
                            class="w-full h-[37px] rounded-md bg-gray-400 group-hover:bg-gray-600 dark:bg-[#474747] group-hover:dark:bg-[#505050] text-white flex items-center justify-center px-5 shadow">
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

            <div class="w-full flex flex-col mb-5">
                <div class="w-full h-[66px] flex flex-col  justify-between">
                    <label for="url_web">Url Web</label>
                    <input type="text" wire:model="url_web" id="url_web"
                        class="bg-gray-100 hover:bg-gray-200 px-1  dark:border-[#505050] dark:bg-[#505050] dark:hover:bg-[#5e5e5e] rounded h-[37px] w-full text-md">
                </div>
                @error('url_web')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>

            <div class="flex justify-end items-center">
                <button type="button" @click="fileName = ''; imageUrl = ''" wire:click="resetForm"
                    class="cursor-pointer  flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-gray-400 dark:bg-[#505050] dark:hover:bg-[#585858] hover:bg-gray-600 text-[15px] font-semibold text-white me-3">
                    Cancel
                </button>
                <button wire:click="createDrawing"
                    class="cursor-pointer flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-blue-400 hover:bg-blue-600 dark:bg-blue-700 text-[15px] font-semibold text-white">
                    Add
                </button>
            </div>

        </div>
    </div>
</div>