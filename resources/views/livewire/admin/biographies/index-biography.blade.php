<div>
    @if (session('message'))
    <div class="bg-gray-200 border dark:bg-[#474747] dark:border-0 mx-8 rounded relative mb-4">
        <span class="block p-5">{{ session('message') }}</span>
    </div>
    @endif

    <div class="w-full h-full px-3 text-black dark:text-white">
        <div class="max-w-full mx-5 p-5">
            <div class="flex items-center justify-between mb-5">
                <h3 class="flex items-center text-lg font-bold uppercase">Biographies
                </h3>
                <div class="h-[66px] flex items-center justify-end">
                    @if(!$biographies->count() > 0)
                    <button wire:navigate href="/dashboard/biographies/create"
                        class="cursor-pointer flex justify-center items-center rounded-md w-[200px] h-[36px] bg-gray-500 hover:bg-gray-600 dark:bg-[#474747] hover:dark:bg-[#505050] text-[15px] font-semibold text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5 ms">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Add Biography
                    </button>
                    @else
                    <button wire:navigate href="/dashboard/biographies/{{auth()->user()->id}}/edit"
                        class="cursor-pointer flex justify-evenly items-center rounded-md w-[180px] h-[36px] bg-blue-500 hover:bg-blue-600 dark:bg-blue-700 text-[15px] font-semibold text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5  ">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        Edit Biography
                    </button>
                    @endif
                </div>
            </div>
            <div class="flex gap-4 mt-10">
                @forelse($biographies as $biography)
                <figure class="w-[600px] h-[400px] shadow bg-white rounded-xl overflow-hidden">
                    <img src="{{asset('storage/'.$biography->img_url) }}" alt="{{ $biography->img_name }}"
                        class="w-full h-full object-cover">
                </figure>
                <div class="bg-slate-50 dark:border-[#505050] dark:bg-[#505050] shadow p-5 rounded-xl w-full">{!!$biography->description !!}</div>
                @empty
                <figure class="w-[600px] h-[400px] shadow bg-white rounded-xl overflow-hidden">
                    <img src="https://png.pngtree.com/png-vector/20220609/ourmid/pngtree-person-gray-photo-placeholder-man-silhouette-on-gray-background-png-image_4847624.png"
                        alt="placeholder" class="w-full h-full object-cover">
                </figure>
                <div
                    class="bg-slate-50 dark:border-[#505050] dark:bg-[#505050] shadow p-5 rounded-xl w-full flex justify-center items-center">
                    Write a
                    biography</div>
                @endforelse
            </div>
        </div>
    </div>
</div>