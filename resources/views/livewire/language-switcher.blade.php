<div>
    <select wire:model="lang" wire:change="setLanguage($event.target.value)" class="h-[35px] rounded-lg font-medium hover:bg-gray-100 focus:bg-gray-100 cursor-pointer  ms-0 lg:ms-5 ">
        <option value="en" class="font-medium hover:bg-gray-100 focus:bg-gray-100">ENG</option>
        <option value="it" class="font-medium hover:bg-gray-100 focus:bg-gray-100">ITA</option>
    </select>
</div> 