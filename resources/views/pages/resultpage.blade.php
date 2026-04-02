@extends('layouts.app')
@section('content')
    <x-structure.wrapper>
        <!-- Listings Header -->
        <div class="mb-4 flex items-center justify-between">
            <p class="text-sm md:text-base text-secondary">
                4 kos ditemukan
            </p>

            <button data-overlay-target="filter-properties"
                class="flex items-center gap-2 rounded-lg border border-gray-300 px-4 py-2 text-sm text-primary hover:shadow-sm transition">
                <i class="fa-solid fa-sliders text-sm text-primary"></i>
                Filter
            </button>
        </div>

        <!-- Overlayer Filter -->
        <x-overlayer.filter />

        <div class="grid-listing">
            <!-- Kos Putri -->
            <a wire:navigate href="/detailpage">
                {{-- Image --}}
                <x-card.image src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg" />
                <!-- Content -->
                <x-card.content>
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putri Melati</span>
                        {{-- Gender Badge --}}
                        <x-badge.female />
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
                <x-card.image src="https://www.pajak.com/storage/2022/08/indekos-758x490.png" />
                <!-- Content -->
                <x-card.content>
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putra Siak</span>
                        {{-- Gender Badge --}}
                        <x-badge.male />
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
            {{-- Kos Campur --}}
            <a wire:navigate href="/detailpage">
                {{-- Image --}}
                <x-card.image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm-vMBacKWxDYJVYAdtUaj4t7V8h54zQ6HSA&s" />
                <!-- Content -->
                <x-card.content>
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Campur Siak</span>
                        {{-- Gender Badge --}}
                        <x-badge.mix />
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
            <!-- 🔁 Duplikasikan card ini -->
        </div>

        <!-- Pagination START -->
        <x-pagination :current="1" :last="15" />
        <!-- Pagination END -->

    </x-structure.wrapper>
@endsection
