<div class="p-5 text-black dark:text-white dark:bg-[#3b3b3b]">
   <h2 class="text-semibold text-lg">Are you sure delete project?</h2>
   <div class="text-end mt-5">
      <button class="bg-gray-400 hover:bg-gray-600 dark:bg-[#505050] dark:hover:bg-[#585858] cursor-pointer text-white rounded-lg px-4 py-2 me-1" wire:click="$dispatch('closeModal')">Cancel</button>
      <button class="bg-red-500 hover:bg-red-600 dark:bg-red-700 dark:hover:bg-red-800 text-white cursor-pointer rounded-lg px-4 py-2" wire:click="deleteProject">Delete</button>
   </div>
</div>