<div>
    <div class="w-full h-full m-2 sm:m-3 md:m-5 px-4 sm:px-6 md:px-10 text-black dark:text-white">
        <div class="max-w-full">
            <div class="flex items-center justify-between mb-5">
                <h3 class="flex items-center text-base sm:text-lg font-bold uppercase">Dashboard</h3>
            </div>
            <div>
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 mb-3">
                    <div
                        class="p-3 sm:p-4 md:p-5 flex-wrap border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex justify-between items-center text-black dark:text-white">
                        <h3 class="text-xs font-bold uppercase">Total Projects</h3>
                        <div
                            class="flex items-center justify-center rounded-md m-2 bg-gray-200 min-w-[30px] min-h-[30px] sm:min-w-[35px] sm:min-h-[35px] text-[#276D80] dark:text-white dark:bg-[#474747] text-[13px] font-bold">
                            {{$projects}}
                        </div>
                    </div>
                    <div
                        class="p-3 sm:p-4 flex-wrap md:p-5 border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex justify-between items-center text-black dark:text-white">
                        <h3 class="text-xs font-bold uppercase">Total Trainings</h3>
                        <div
                            class="flex items-center justify-center rounded-md m-2 bg-gray-200 min-w-[30px] min-h-[30px] sm:min-w-[35px] sm:min-h-[35px] text-[#276D80] dark:text-white dark:bg-[#474747] text-[13px] font-bold">
                            {{$trainings}}
                        </div>
                    </div>
                    <div
                        class="p-3 sm:p-4 md:p-5 flex-wrap border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex justify-between items-center text-black dark:text-white">
                        <h3 class="text-xs font-bold uppercase">Total Experiences</h3>
                        <div
                            class="flex items-center justify-center rounded-md m-2 bg-gray-200 min-w-[30px] min-h-[30px] sm:min-w-[35px] sm:min-h-[35px] text-[#276D80] dark:text-white dark:bg-[#474747] text-[13px] font-bold">
                            {{$experiences}}
                        </div>
                    </div>
                    <div
                        class="p-3 sm:p-4 md:p-5 flex-wrap border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex justify-between items-center text-black dark:text-white">
                        <h3 class="text-xs font-bold uppercase">Total Drawings</h3>
                        <div
                            class="flex items-center justify-center rounded-md m-2 bg-gray-200 min-w-[30px] min-h-[30px] sm:min-w-[35px] sm:min-h-[35px] text-[#276D80] dark:text-white dark:bg-[#474747] text-[13px] font-bold">
                            {{$drawings}}
                        </div>
                    </div>
                    <div
                        class="p-3 sm:p-4 md:p-5 flex-wrap border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex justify-between items-center text-black dark:text-white">
                        <h3 class="text-xs font-bold uppercase">Total Documents</h3>
                        <div
                            class="flex items-center justify-center rounded-md m-2 bg-gray-200 min-w-[30px] min-h-[30px] sm:min-w-[35px] sm:min-h-[35px] text-[#276D80] dark:text-white dark:bg-[#474747] text-[13px] font-bold">
                            {{$documents}}
                        </div>
                    </div>
                </div>
            </div>
            <livewire:admin.dashboard.bio-card />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-3 mt-3">
                <livewire:admin.dashboard.projects-card />
                <livewire:admin.dashboard.items-card />
            </div>
        </div>
    </div>
</div>