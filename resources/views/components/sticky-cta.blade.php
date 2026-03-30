@props([
    'price' => 'Rp 0',
    'period' => '/bulan',
    'ctaLink' => '#',
    'ctaText' => 'Chat',
    'microcopy' => 'Tanya atau ajukan',
])

<!-- DESKTOP -->
<div class="hidden lg:block bg-gray-30 rounded-2xl p-6 border border-gray-200 shadow-lg sticky top-24 z-40">
    <div class="flex flex-col gap-4">
        <!-- Price -->
        <div>
            <p class="text-sm text-secondary mb-1">Mulai dari</p>
            <div class="flex items-baseline gap-1">
                <span class="text-2xl font-bold text-primary">
                    {{ $price }}
                </span>
                <span class="text-sm text-secondary">{{ $period }}</span>
            </div>
        </div>

        <!-- CTA -->
        <div class="pt-4 border-t border-gray-200">
            <p class="text-xs text-thirdary mb-3 text-center">
                {{ $microcopy }}
            </p>

            <a href="{{ $ctaLink }}" target="_blank"
                class="w-full flex items-center justify-center gap-2 py-3 rounded-xl btn-primary text-white font-semibold transition shadow-md">

                <i class="fa-brands fa-whatsapp text-green-400 text-lg"></i>
                {{ $ctaText }}
            </a>
        </div>
    </div>
</div>

<!-- MOBILE -->
<div class="bg-white fixed inset-x-0 bottom-0 z-40 lg:hidden border-t border-gray-200 shadow-[0_-8px_24px_rgba(0,0,0,0.12)]">
    <div class="grid grid-cols-2 gap-3 p-4 items-center">
        <!-- Price -->
        <div>
            <p class="text-[11px] text-secondary leading-none mb-1">
                Mulai dari
            </p>
            <div class="flex items-baseline gap-1">
                <span class="text-sm font-bold text-primary">
                    {{ $price }}
                </span>
                <span class="text-xs text-secondary">
                    {{ $period }}
                </span>
            </div>
        </div>

        <!-- CTA -->
        <a href="{{ $ctaLink }}" target="_blank"
            class="w-full flex items-center justify-center gap-2 py-3 rounded-xl bg-blue-600 text-white font-semibold text-sm hover:bg-blue-700 transition shadow-md whitespace-nowrap">

            <i class="fa-brands fa-whatsapp text-green-400 text-base"></i>
            {{ $ctaText }}
        </a>

    </div>
</div>
