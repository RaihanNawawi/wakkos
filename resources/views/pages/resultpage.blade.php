@extends('layouts.app')
@section('content')
    <!-- Listings Grid START -->
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
        <nav class="mt-12 mb-6 flex justify-center" aria-label="Pagination">
            {{-- Desktop Pagination Start --}}
            <ul class="hidden sm:flex items-center gap-3 text-sm font-medium text-secondary">

                <!-- Prev -->
                <li>
                    <a wire:navigate href="?page=1" aria-label="Halaman sebelumnya"
                        class="flex items-center justify-center mr-3">

                        <i class="fa-solid fa-chevron-left text-black"></i>
                    </a>
                </li>

                <!-- Page 1 (Active) -->
                <li>
                    <a wire:navigate href="?page=1"
                        class="flex items-center justify-center w-9 h-9 rounded-full bg-black text-white">
                        1
                    </a>
                </li>

                <!-- Page 2 -->
                <li>
                    <a wire:navigate href="?page=2"
                        class="flex items-center justify-center w-9 h-9 rounded-full hover:bg-gray-100 transition">
                        2
                    </a>
                </li>

                <!-- Page 3 -->
                <li>
                    <a wire:navigate href="?page=3"
                        class="flex items-center justify-center w-9 h-9 rounded-full hover:bg-gray-100 transition">
                        3
                    </a>
                </li>

                <!-- Page 4 -->
                <li>
                    <a wire:navigate href="?page=4"
                        class="flex items-center justify-center w-9 h-9 rounded-full hover:bg-gray-100 transition">
                        4
                    </a>
                </li>

                <!-- Dots -->
                <li class="px-2">…</li>

                <!-- Last Page -->
                <li>
                    <a wire:navigate href="?page=15"
                        class="flex items-center justify-center w-9 h-9 rounded-full hover:bg-gray-100 transition">
                        15
                    </a>
                </li>

                <!-- Next -->
                <li>
                    <a wire:navigate href="?page=2" aria-label="Halaman selanjutnya"
                        class="flex items-center justify-center ml-3">

                        <i class="fa-solid fa-chevron-right text-black"></i>
                    </a>
                </li>

            </ul>
            {{-- Desktop Pagination End --}}


            {{-- Mobile Pagination Start --}}
            <ul class="flex sm:hidden items-center justify-center gap-8 mt-4">

                <!-- Prev -->
                <li>
                    <a wire:navigate href="?page=1"
                        class="w-12 h-12 flex items-center justify-center rounded-full
                  bg-white
                  shadow-[0_6px_16px_rgba(0,0,0,0.15)]">


                        <i class="fa-solid fa-chevron-left text-sm text-secondary"></i>
                    </a>
                </li>

                <!-- Page Info -->
                <li class="text-sm font-semibold text-black tracking-wide">
                    1 / 15
                </li>

                <!-- Next -->
                <li>
                    <a wire:navigate href="?page=2"
                        class="w-12 h-12 flex items-center justify-center rounded-full
                  bg-white
                  shadow-[0_6px_16px_rgba(0,0,0,0.15)]">


                        <i class="fa-solid fa-chevron-right text-sm text-secondary"></i>
                    </a>
                </li>

            </ul>
            {{-- Mobile Pagination End --}}


        </nav>
        <!-- Pagination END -->

    </x-wrapper>
@endsection
