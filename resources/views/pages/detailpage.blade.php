@extends('layouts.app')
@section('content')
    <!-- Hero Section (Quick Fit Check) START -->
    <x-wrapper>
        <!-- Photo Gallery -->
        <div class="mb-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 aspect-[4/3] lg:aspect-auto lg:h-[420px]">
                <!-- Gambar Besar -->
                <div class="lg:col-span-2 h-full overflow-hidden rounded-xl sm:rounded-md">
                    <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/8gvZd7FJ-540x720.jpg"
                        class="gallery-item w-full h-full object-cover" />
                </div>

                <!-- Gambar Kanan -->
                <div class="hidden lg:flex flex-col gap-4 h-full">
                    <div class="flex-1 overflow-hidden rounded-xl">
                        <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/W65xQbM5-540x720.jpg"
                            class="gallery-item w-full h-full object-cover" />
                    </div>

                    <div class="flex-1 overflow-hidden rounded-xl">
                        <img src="https://media.suara.com/pictures/653x366/2015/04/15/o_19iuqsd5o12et2tb1qr716f51vp8k.jpg"
                            class="gallery-item w-full h-full object-cover" />
                    </div>
                </div>
            </div>

            <button data-gallery-open
                class="absolute bottom-4 right-4 z-10 flex items-center gap-2 rounded-lg bg-white/90 px-4 py-2 text-sm font-semibold text-primary shadow hover:bg-white">
                <i class="text-secondary fa-regular fa-images"></i>
                Lihat semua foto
            </button>
        </div>
        {{-- Gallery --}}
        <x-gallery-layer />

        {{-- Gallery Fullscreen --}}
        <x-fullscreen-layer />

        <!-- Main Hero Content -->
        <div class="grid grid-cols-1 lg:grid-cols-[2fr_1.2fr] gap-10 items-start">
            <!-- Left: Identity & Kos Information -->
            <div>
                <!-- Property Title Section -->
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-primary mb-3">Kos Putri Melati</h1>
                    <!-- Property info row: type, location, share button -->
                    <div class="flex flex-wrap items-center gap-3 mb-6 pb-4 border-b border-gray-200">
                        <!-- LEFT GROUP -->
                        <div class="flex flex-wrap items-center gap-3">
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-secondary px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="text-secondary fa-solid fa-venus text-xs"></i>
                                Kos Putri
                            </span>
                            <span class="text-secondary">·</span>
                            <span class="flex items-center gap-2 text-md text-secondary">
                                <i class="text-secondary fa-solid fa-location-dot text-secondary text-md shrink-0"></i>
                                <span>Kecamatan Siak</span>
                            </span>
                        </div>
                    </div>
                    <!-- Ketersediaan Kamar START -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="text-secondary fa-solid fa-door-open text-secondary text-lg shrink-0"></i>
                            <span class="text-secondary">
                                Tersisa <span class="text-red-600 font-semibold">3 kamar</span>
                            </span>
                        </div>
                        <div class="ml-auto relative inline-block">
                            <button id="shareBtn"
                                class="border border-gray-200 rounded-xl open-share-btn inline-flex items-center gap-2 bg-white px-3 py-2 text-sm font-medium text-primary">
                                <i class="text-secondary fa-solid fa-arrow-up-from-bracket text-secondary text-sm"></i>
                                <span class="hidden md:inline text-secondary">Share</span>
                            </button>
                        </div>
                    </div>
                    <!-- Ketersediaan Kamar END -->
                </div>
                <!-- Host Information -->
                <div class="bg-white mb-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            AK</div>
                        <div>
                            <h3 class="text-lg font-semibold text-primary">Anas Karim</h3>
                            <p class="text-sm text-secondary">Pemilik Kos</p>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-200 mt-4"></div>

                <!-- Facilities -->
                <div class="pt-8">
                    <h3 class="text-xl font-semibold text-primary mb-6 flex items-center gap-2">
                        Fasilitas Tersedia
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-wifi  text-lg"></i>
                            </div>
                            <span class="text-secondary">WiFi 50 Mbps</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-snowflake text-lg"></i>
                            </div>
                            <span class="text-secondary">Air Conditioner</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-bed text-lg"></i>
                            </div>
                            <span class="text-secondary">Kasur + Lemari + Meja Belajar</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-bolt text-lg"></i>
                            </div>
                            <span class="text-secondary">Listrik Termasuk (Batas 100 kWh)</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-video text-lg"></i>
                            </div>
                            <span class="text-secondary">CCTV 24 Jam</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-kitchen-set text-lg"></i>
                            </div>
                            <span class="text-secondary">Dapur Bersama</span>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-200 mt-4"></div>

                <!-- Rules -->
                <div class="pt-8">
                    <h3 class="text-xl font-semibold text-primary mb-6 flex items-center gap-2">
                        Peraturan Kos
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-clock text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Jam Malam 23.00 WIB</p>
                                <p class="text-sm text-secondary">Pintu utama dikunci setelah jam malam</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-user text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Khusus Putri</p>
                                <p class="text-sm text-secondary">Tidak diperbolehkan tamu laki-laki masuk kamar</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-ban-smoking text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Dilarang Merokok</p>
                                <p class="text-sm text-secondary">Merokok hanya di area yang telah ditentukan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-file-invoice text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Bayar Tepat Waktu</p>
                                <p class="text-sm text-secondary">Maksimal tanggal 5 setiap bulan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-calendar-check text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Kontrak Minimal 3 Bulan</p>
                                <p class="text-sm text-secondary">Deposit 1 bulan dikembalikan saat keluar</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-200 mt-4"></div>

                <!-- Lokasi dan Tempat Sekitar-->
                <div class="pt-8 mb-2">
                    <h2 class="text-xl font-semibold text-primary mb-6 flex items-center gap-2">Lokasi & Tempat
                        Sekitar</h2>
                    <!-- Map Container -->
                    <div class="mb-4 rounded-lg overflow-hidden border border-gray-200">
                        <div class="relative w-full h-80 bg-gray-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4172380707555!2d102.03371127363738!3d0.8124215630703692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d421a7fc63720b%3A0xba41cf64f316149e!2sHomestay%20Tok%20Jenggot%20Syariah!5e0!3m2!1sid!2sid!4v1768355777142!5m2!1sid!2sid"
                                class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <!-- Tab Location -->
                    <x-tab-location :tabs="[
                        [
                            'id' => 'kampus',
                            'label' => 'Kampus / Sekolah',
                            'items' => [['title' => 'Universitas Negeri', 'distance' => '1.2 Km']],
                        ],
                        [
                            'id' => 'ibadah',
                            'label' => 'Tempat Ibadah',
                            'items' => [['title' => 'Masjid Al Fath', 'distance' => '0.5 Km']],
                        ],
                        [
                            'id' => 'fasilitas',
                            'label' => 'Fasilitas Umum',
                            'items' => [['title' => 'Indomaret', 'distance' => '300 m']],
                        ],
                    ]" />
                </div>

                <div class="border-b border-gray-200 mt-4"></div>
                
                <!-- Property Description -->
                <div class="pt-8 mb-2">
                    <h2 class="text-xl font-semibold text-primary mb-4">Tentang Kos ini</h2>
                    <p class="text-secondary leading-relaxed mb-4">
                        Welcome to our modern studio apartment located in the heart of downtown Jakarta. This
                        beautifully designed space combines comfort and style, perfect for both short-term and
                        long-term stays.
                    </p>
                </div>

            </div>

            <!-- Right: Price & Main CTA (Floating Layer) Desktop START -->
            <div class="hidden lg:block bg-gray-30 rounded-2xl p-6 border border-gray-200 shadow-lg sticky top-24 z-40">

                <div class="flex flex-col gap-4">
                    <!-- Price -->
                    <div>
                        <p class="text-sm text-secondary mb-1">Mulai dari</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-2xl font-bold text-primary">
                                Rp 1.500.000
                            </span>
                            <span class="text-sm text-secondary">/bulan</span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="pt-4 border-t border-gray-200">
                        <!-- Microcopy -->
                        <p class="text-xs text-thirdary mb-3 text-center">
                            Tanya kos atau ajukan sewa
                        </p>

                        <!-- CTA Button -->
                        <a wire:navigate
                            href="https://wa.me/6281995421795?text=Halo%20WakKos%2C%0A%0ASaya%20tertarik%20dengan%20kos%20ini.%0ABoleh%20dibantu%20untuk%20info%20ketersediaan%2C%20harga%2C%20dan%20fasilitasnya%3F%0A%0ATerima%20kasih."
                            target="_blank"
                            class="w-full flex items-center justify-center gap-2 py-3 rounded-xl btn-primary text-white font-semibold transition shadow-md">
                            <i class="fa-brands fa-whatsapp text-green-400 text-lg"></i>
                            Chat WakKos
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right: Price & Main CTA (Floating Layer) Desktop END -->
            <!-- Right: Price & Main CTA (Floating Layer) Mobile START -->
            <div
                class="bg-white
           fixed inset-x-0 bottom-0 z-40 lg:hidden
           border-t border-gray-200
           shadow-[0_-8px_24px_rgba(0,0,0,0.12)]">
                <div class="grid grid-cols-2 gap-3 p-4 items-center">
                    <!-- Price -->
                    <div>
                        <p class="text-[11px] text-secondary leading-none mb-1">
                            Mulai dari
                        </p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-sm font-bold text-primary">
                                Rp 1.500.000
                            </span>
                            <span class="text-xs text-secondary">
                                /bulan
                            </span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a wire:navigate
                        href="https://wa.me/6281995421795?text=Halo%20WakKos%2C%0A%0ASaya%20tertarik%20dengan%20kos%20ini.%0ABoleh%20dibantu%20untuk%20info%20ketersediaan%2C%20harga%2C%20dan%20fasilitasnya%3F%0A%0ATerima%20kasih."
                        target="_blank"
                        class="w-full
                   flex items-center justify-center gap-2
                   py-3 rounded-xl
                   bg-blue-600
                   text-white font-semibold text-sm
                   hover:bg-blue-700
                   transition
                   shadow-md
                   whitespace-nowrap">

                        <i class="fa-brands fa-whatsapp  text-green-400 text-base"></i>
                        Chat WakKos
                    </a>
                </div>
            </div>

            <!-- Right: Price & Main CTA (Floating Layer) Mobile END -->
        </div>
    </x-wrapper>
    <!-- Hero Section (Quick Fit Check) END -->
@endsection
