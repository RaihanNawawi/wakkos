@extends('layouts.app')
@section('content')
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
        {{-- Gallery Image --}}
        <x-overlayer.gallery-image />

        {{-- Fullscreen Image --}}
        <x-overlayer.fullscreen-image />

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
                            <button class="shareBtn border border-gray-200 rounded-xl open-share-btn inline-flex items-center gap-2 bg-white px-3 py-2 text-sm font-medium text-primary">
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

            {{-- Sticky CTA --}}
            <x-sticky-cta price="Rp 1.500.000" period="/bulan" ctaText="Chat WakKos"
                microcopy="Tanya kos atau ajukan sewa" ctaLink="https://wa.me/6281995421795?text=Halo..." />
        </div>
    </x-wrapper>
@endsection