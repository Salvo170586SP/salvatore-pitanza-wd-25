<div>
    <div class="w-full relative px-3 text-black">
        <div class="max-w-full mx-5 p-5 bg-white rounded-lg">
            <div class="h-[66px] flex items-center justify-between border-b mb-10">
                <h3 class="text-gray-900 text-lg font-bold uppercase">Project / Create</h3>
                <button wire:navigate href="/admin/projects"
                    class="flex justify-around items-center rounded-md shadow py-2 px-5 bg-gray-400 hover:bg-gray-600 cursor-pointer text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-[15px] font-semibold">
                        Back to Projects
                    </span>
                </button>
            </div>

            <div x-data="{ fileName: '', imageUrl: '' }" @form-reset.window="fileName = ''; imageUrl = ''"
                class="h-[290px] flex flex-col justify-center items-center mb-10">
                <div class="text-sm text-gray-600">
                    <div class="space-y-2">
                        <figure class="w-[250px] h-[250px] overflow-hidden shadow-md rounded-lg">
                            <img :src="imageUrl ? imageUrl : 'https://savefumisteria.it/wp-content/uploads/2023/09/placeholder-711.png'"
                                class="w-full h-full object-cover" alt="Anteprima immagine">
                        </figure>
                    </div>
                </div>
                <div class="flex flex-col items-center mt-5">
                    <label for="image_upload" class="mb-2">Upload Image*</label>
                    <div class="relative group">
                        <input type="file" id="image_upload" name="image_upload"
                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*"
                            wire:model="img_url" x-on:change="
                    fileName = $event.target.files[0].name;
                    imageUrl = URL.createObjectURL($event.target.files[0])
                    ">
                        <div
                            class="w-full h-[37px] rounded-md bg-gray-400 group-hover:bg-gray-600 text-white flex items-center justify-center px-5 shadow">
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
                        <label for="url_git">Url Git</label>
                        <input type="text" wire:model="url_git" id="url_git"
                            class="border border-[#D8D5D5] px-1 rounded h-[37px] w-full text-md">
                    </div>
                    @error('url_git')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>


                <div class="w-full flex flex-col">
                    <div class="w-full h-[66px] flex flex-col  justify-between">
                        <label for="url_web">Url Web</label>
                        <input type="text" wire:model="url_web" id="url_web"
                            class="border px-1 border-[#D8D5D5] rounded h-[37px] w-full text-md">
                    </div>
                    @error('url_web')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>
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

            <div class="h-[66px] flex items-center">
                <input type="checkbox" wire:model="is_aviable" id="is_aviable"
                    class="border border-[#D8D5D5] h-[20px] w-[20px] me-2 text-md accent-black cursor-pointer">
                <label for="is_aviable">Available</label>
            </div>

            <div class="flex justify-end items-center">
                <button type="button" @click="fileName = ''; imageUrl = ''" wire:click="resetForm"
                    class="cursor-pointer  flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-gray-400 hover:bg-gray-600 text-[15px] font-semibold text-white me-3">
                    Cancel
                </button>
                <button wire:click="createProject"
                    class="cursor-pointer flex justify-center items-center rounded-md shadow w-[190px] h-[36px] bg-blue-400 hover:bg-blue-600 text-[15px] font-semibold text-white">
                    Add
                </button>
            </div>

        </div>
    </div>
</div>