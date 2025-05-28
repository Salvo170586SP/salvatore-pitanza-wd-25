<div x-data="{
    showButton: false,
    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    },
    init() {
        window.addEventListener('scroll', () => {
            this.showButton = window.scrollY > 500
        })
    }
}" class="fixed bottom-5 right-5 z-50">
    <button x-cloak x-show="showButton" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90" @click="scrollToTop"
        class="bg-[#002057]/80 hover:bg-[#002057] text-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300"
        aria-label="Torna su">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>
</div>