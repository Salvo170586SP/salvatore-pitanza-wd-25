<div>
    <div class="flex h-full mx-auto text-black md:px-8">
        <div class="w-[300px] h-auto me-5 mt-5 bg-white  rounded-lg">
            <div class="flex items-center justify-center">
                @isset($project->img_url)
                <figure class="w-[350px] h-[300px] cursor-pointer" wire:click="$toggle('showImagePreview')">
                    <img class="w-full h-full rounded-lg border object-cover"
                        src="{{ asset('/storage/'.$project->img_url)}}" alt="{{$project->title}}">
                </figure>
                @else
                <figure class="w-[350px] h-[300px] cursor-pointer" wire:click="$toggle('showImagePreview')">
                    <img class="w-full h-full rounded-lg border"
                        src="https://ralfvanveen.com/wp-content/uploads/2021/06/Placeholder-_-Glossary.svg"
                        alt="{{$project->title}}">
                </figure>
                @endisset
            </div>

            <!-- anteprima dell'immagine -->
            @if($showImagePreview ?? false)
            <div class="fixed inset-0 flex items-center justify-center z-50" wire:click="$toggle('showImagePreview')">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="relative z-10">
                    <img class="max-w-3xl max-h-[80vh] rounded-lg"
                        src="{{ isset($project->img_url) ? asset('/storage/'.$project->img_url) : 'https://ralfvanveen.com/wp-content/uploads/2021/06/Placeholder-_-Glossary.svg' }}"
                        alt="{{$project->title}}">
                </div>
            </div>
            @endif
        </div>

        <div class="w-full h-[750px] p-5 bg-white rounded-lg">
            <div class="w-full flex justify-between mb-5 border-b pb-5">
                <div class="font-bold text-lg text-center uppercase">
                    {{$project->title}}
                </div>
                <button wire:navigate href="/admin/projects"
                    class="rounded-md cursor-pointer flex justify-center items-center shadow w-[200px] h-[36px] bg-gray-400 hover:bg-gray-600 text-[15px] font-semibold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 me-2">
                        <path fill-rule="evenodd"
                            d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to Projects
                </button>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Title</div>
                <div class="rounded-lg border p-2">{{$project->title ?? '-'}}</div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Img Name</div>
                <div class="rounded-lg border p-2">{{$project->img_name ?? '-'}}</div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Url Git</div>
                <div class="rounded-lg border p-2">{{$project->url_git ?? '-'}}</div>
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Url Web</div>
                <div class="rounded-lg border p-2">{{$project->url_web ?? '-'}}</div>
            </div>
            <div class="flex items-center w-full mb-5">
                <div class="font-bold me-2">Aviable</div>
                @if($project->is_aviable)
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7 text-green-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-7 text-red-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                @endif
            </div>
            <div class="flex flex-col w-full mb-5">
                <div class="font-bold ms-1 mb-1">Description</div>
                <div class="rounded-lg border p-2  h-[300px] overflow-auto break-all">@if($project->description)
                    {{$project->description}} @else <span class="text-gray-400">Descrizione non disponibile</span>
                    @endif</div>
            </div>
        </div>
    </div>
</div>