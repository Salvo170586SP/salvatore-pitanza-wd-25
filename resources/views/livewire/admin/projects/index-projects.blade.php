<div>
    @if (session('message'))
    <div class="bg-gray-200 border dark:bg-[#474747] dark:border-0 mx-8 rounded relative mb-4">
        <span class="block p-5">{{ session('message') }}</span>
    </div>
    @endif



    <div class="w-full h-full px-3 text-black dark:text-white">
        <div class="max-w-full mx-5 p-5">

            <div class="flex items-center justify-between mb-5">
                <h3 class="flex items-center text-lg font-bold uppercase">Projects <div
                        class="flex items-center justify-center rounded-md ms-2 bg-gray-200 w-[35px] h-[35px] text-[#276D80] dark:text-white dark:bg-[#474747] text-[13px] font-bold">
                        {{$projects->count()}}
                    </div>
                </h3>
                <input type="text" class="rounded-lg bg-gray-100 dark:bg-[#474747] hover:dark:bg-[#505050] hover:bg-gray-200  h-[37px] w-[380px] text-md px-2"
                    placeholder="Search..." wire:model.live="search">
            </div>

            <div class="h-[66px] flex items-center justify-end">
                <button wire:navigate href="/dashboard/projects/create"
                    class="cursor-pointer flex justify-center items-center rounded-md w-[200px] h-[36px] bg-gray-500 dark:bg-[#474747] hover:dark:bg-[#505050] hover:bg-gray-600 text-[15px] font-semibold text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5 ms">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Add Project
                </button>
            </div>

            @if($projects->count() > 0)
            <div class="w-full overflow-hidden rounded-xl">
                <table class="w-full border border-gray-100 dark:border-0">
                    <thead class="bg-[#E5E5E5] dark:bg-[#474747] dark:text-white text-sm text-gray-700 h-[30px]">
                        <tr>
                            <th scope="col" class="text-start ps-5">
                                Preview
                            </th>
                            <th scope="col" class="text-start">
                                Title
                            </th>
                            <th scope="col" class="text-start">
                                Title Ita
                            </th>
                            <th scope="col" class="text-start">
                                Name Img
                            </th>
                            <th scope="col" class="text-start">
                                Description
                            </th>
                            <th scope="col" class="text-start">
                                Description Ita
                            </th>
                            <th scope="col" class="text-center pe-10">
                                Available
                            </th>
                            <th scope="col" class="text-start">
                                Url Git
                            </th>
                            <th scope="col" class="text-start">
                                Url Web
                            </th>

                            <th scope="col" class="text-end">
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-[#FAFAFA] dark:bg-[#222222]">
                        @foreach($projects as $project)
                        <tr class="@if(!$loop->last) border-b @endif dark:border-[#3d3d3d] h-[55px]" wire:key="project-{{$project->id}}">
                            <td>
                                <div class="p-4">
                                    @if($project->img_url)
                                    <figure class="w-[50px] h-[50px] rounded-lg overflow-hidden">
                                        <img src="{{ asset('storage/' . $project->img_url) }}" alt="{{$project->title}}"
                                            class="w-full h-full rounded-lg object-cover">
                                    </figure>
                                    @else
                                    <div class="w-[50px] h-[50px] flex items-center justify-center text-sm font-bold text-orange-400 rounded-lg overflow-hidden border bg-yellow-50">
                                        IMG
                                    </div>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->title)
                                    {{ substr($project->title , 0, 10) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->title_ita)
                                    {{ substr($project->title_ita , 0, 10) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->img_name)
                                    {{ substr($project->img_name , 0, 10) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->description)
                                    {{ substr($project->description , 0, 20) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->description_ita)
                                    {{ substr($project->description_ita , 0, 20) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td class="pe-10">
                                <div class="w-full flex justify-center items-center">
                                    @if($project->is_aviable)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-red-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->url_git)
                                    {{ substr($project->url_git , 0, 20) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    @if($project->url_web)
                                    {{ substr($project->url_web , 0, 20) }}...
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>

                            <td>
                                <div class="flex items-center justify-end">
                                    <button wire:navigate href="/dashboard/projects/{{$project->id}}"
                                        class="cursor-pointer p-2 rounded-md shadow text-white bg-slate-400 dark:bg-[#474747] hover:dark:bg-[#505050] hover:bg-slate-700 flex justify-center items-center me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                        </svg>
                                    </button>
                                    <button wire:navigate href="/dashboard/projects/{{$project->id}}/edit"
                                        class="cursor-pointer p-2 rounded-md shadow text-white bg-gray-500 dark:bg-[#474747] hover:dark:bg-[#505050] hover:bg-gray-700 flex justify-center items-center me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>

                                    </button>
                                    <button
                                        onclick="Livewire.dispatch('openModal', { component: 'admin.projects.delete-project', arguments: {projectId: {{$project->id }}}})"
                                        class="cursor-pointer p-2 rounded-md shadow text-white bg-red-500 hover:bg-red-700 dark:bg-red-700 hover:dark:bg-red-800 flex justify-center items-center me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="py-3">
                {{ $projects->links() }}
            </div>
            @else
            <div class="py-4 text-center">
                don't have any projects
            </div>
            @endif
        </div>
    </div>
</div>