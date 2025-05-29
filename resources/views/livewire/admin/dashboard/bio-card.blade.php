<div>
    <div
        class="w-full p-5 border bg-gray-50 dark:border-[#505050] dark:bg-[#505050] rounded-xl flex flex-col justify-center items-center text-black dark:text-white">
        <div class="text-center mb-2">
            <h3 class="text-md font-bold uppercase">Biography</h3>
        </div>
        @if($biography)
        <div class="w-full flex flex-col md:flex-row justify-center items-start">
            <figure class="md:w-[250px] md:h-[250px]  shadow bg-white rounded-xl overflow-hidden">
                <img src="{{asset('storage/'.$biography->img_url) }}" alt="{{ $biography->img_name }}"
                    class="w-full h-full object-cover">
            </figure>
            <div class="text-sm mt-2 md:mt-0 md:px-5 w-full">
                {!!$biography->description !!}</div>
        </div>
        @else
        <div class="w-full flex justify-center items-center">
            <figure class="w-[250px] h-[250px] shadow bg-white rounded-xl overflow-hidden">
                <img src="https://static.thenounproject.com/png/261694-200.png" alt="placeholder"
                    class="w-full h-full object-cover object-top p-5 bg-gray-300 dark:bg-[#3f3f3f] opacity-50 dark:opacity-80 rounded-lg">
            </figure>
            <div
                class="bg-slate-50 dark:border-[#505050] dark:bg-[#505050] px-5 rounded-xl text-xl text-gray-500 dark:text-white w-full flex justify-center items-center">
                Write a
                biography</div>
            @endif
        </div>
    </div>
</div>