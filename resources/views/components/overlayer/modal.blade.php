<div 
    data-overlay="{{ $name }}"
    class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-end lg:items-center justify-center"
>
    <div class="w-full max-h-[90vh] bg-white shadow-2xl flex flex-col rounded-t-3xl overflow-hidden lg:max-w-xl lg:max-h-[85vh] lg:rounded-xl">

        <!-- Header -->
        <div class="sticky top-0 bg-white border-b border-gray-200 px-4 py-4 flex justify-between items-center">
            <h2 class="text-lg font-semibold text-primary">{{ $title }}</h2>
            <button data-overlay-close class="text-secondary">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Content -->
        <div class="px-4 py-4 space-y-4 overflow-y-auto flex-1 min-h-0">
            {{ $slot }}
        </div>

        <!-- Footer -->
        @isset($footer)
            <div class="sticky bottom-0 z-20 bg-white border-t border-gray-200 px-4 sm:px-6 py-3 flex items-center gap-4 shadow-[0_-8px_24px_rgba(0,0,0,0.12)]">
                {{ $footer }}
            </div>
        @endisset

    </div>
</div>