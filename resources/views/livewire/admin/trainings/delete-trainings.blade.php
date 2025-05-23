<div class="p-5 text-black">
   <h2 class="text-semibold text-lg">Are you sure delete training?</h2>
   <div class="text-end mt-5">
      <button class="bg-gray-400 hover:bg-gray-600 cursor-pointer text-white rounded-lg px-4 py-2 me-1" wire:click="$dispatch('closeModal')">Cancel</button>
      <button class="bg-red-500 hover:bg-red-600 text-white cursor-pointer rounded-lg px-4 py-2" wire:click="deleteTraining">Delete</button>
   </div>
</div>