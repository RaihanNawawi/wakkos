@extends('layouts.app')
@section('content')
    <x-wrapper>
        <!-- Listings Header -->
        <div class="mb-4 flex items-center justify-between">
            <p class="text-sm md:text-base text-secondary">
                4 kos ditemukan
            </p>

            <button id="filtersBtn"
                class="flex items-center gap-2 rounded-lg border border-gray-300 px-4 py-2 text-sm text-primary hover:shadow-sm transition">
                <i class="fa-solid fa-sliders text-sm text-primary"></i>
                Filter
            </button>
        </div>

        <!-- Filters Modal Overlay START -->
        <x-filter-layer />
        <!-- Filters Modal Overlay END -->


        <x-grid-listing>
            <!-- Kos Putri -->
            <a wire:navigate href="/detailpage">
                {{-- Image --}}
                <x-card.image src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg" />
                <!-- Content -->
                <x-card.content>
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putri Melati</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-secondary px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-venus text-xs"></i>
                            Putri
                        </span>

                    </div>

                    <p class="text-sm text-secondary truncate">
                        Kampung Dalam, Siak, Riau
                    </p>

                    <p class="text-xs text-thirdary">
                        Kamar mandi dalam · Kasur · AC
                    </p>

                    <p class="text-sm">
                        <span class="font-semibold underline">Rp462.683</span>
                        <span class="text-thirdary"> / bulan</span>
                    </p>
                </x-card.content>
            </a>
            {{-- Kos Putra --}}
            <a wire:navigate href="/detailpage">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2021/04/ventilation.jpeg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    {{-- Availability Badge --}}
                    <x-availability-badge />
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-primary font-semibold">
                        <span>Kos Putra Siak</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-secondary px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-mars text-xs"></i>
                            Putra
                        </span>

                    </div>

                    <p class="text-sm text-secondary truncate">
                        Kampung Dalam, Siak, Riau
                    </p>

                    <p class="text-xs text-thirdary">
                        Kamar mandi dalam · Kasur
                    </p>

                    <p class="text-sm">
                        <span class="font-semibold underline">Rp462.683</span>
                        <span class="text-thirdary"> / bulan</span>
                    </p>
                </div>

            </a>
            {{-- Kos Campur --}}
            <a wire:navigate href="/detailpage">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://cdn1-production-images-kly.akamaized.net/fLCXhB2CU-knEOxENiP3Ge2Ie8M=/1280x720/smart/filters:quality(75):strip_icc()/kly-media-production/medias/861628/original/073424800_1429960385-3.JPG"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    {{-- Availability Badge --}}
                    <x-availability-badge />
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Campur</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-secondary px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-venus-mars text-xs"></i>
                            Campuran
                        </span>

                    </div>

                    <p class="text-sm text-secondary truncate">
                        Kampung Dalam, Siak, Riau
                    </p>

                    <p class="text-xs text-thirdary">
                        Kamar mandi dalam · Kasur
                    </p>

                    <p class="text-sm">
                        <span class="font-semibold underline">Rp462.683</span>
                        <span class="text-thirdary"> / bulan</span>
                    </p>
                </div>

            </a>
            <!-- Kos Putri -->
            <a wire:navigate href="/detailpage" class="group block rounded-lg focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg" alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    {{-- Availability Badge --}}
                    <x-availability-badge />
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putri Melati</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-secondary px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-venus text-xs"></i>
                            Putri
                        </span>

                    </div>

                    <p class="text-sm text-secondary truncate">
                        Kampung Dalam, Siak, Riau
                    </p>

                    <p class="text-xs text-thirdary">
                        Kamar mandi dalam · Kasur · AC
                    </p>

                    <p class="text-sm">
                        <span class="font-semibold underline">Rp462.683</span>
                        <span class="text-thirdary"> / bulan</span>
                    </p>
                </div>

            </a>
            <!-- 🔁 Duplikasikan card ini -->
        </x-grid-listing>

        <!-- Pagination START -->
        <x-pagination :current="1" :last="15" />
        <!-- Pagination END -->

    </x-wrapper>
@endsection