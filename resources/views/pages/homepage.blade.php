@extends('layouts.app')
@section('content')
    <!-- Rekomendasi Kos START -->
    <x-wrapper>
        <!-- Greeting Section START -->
        <div class="px-1 mb-6">
            <p class="text-sm sm:text-md text-secondary mb-1">Hai.</p>
            <h2 class="text-xl sm:text-2xl font-bold text-primary">Lagi cari kos di <span class="text-brand">Siak</span>?
            </h2>
        </div>
        <!-- Greeting Section END -->
        <x-carousel-header title="Ini Rekomendasi untukmu" href="/resultpage" />
        <x-carousel href="/resultpage">
            <!-- CARD -->
            <a wire:navigate href="/detailpage" class="carousel-card">
                <!-- IMAGE -->
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />

                    <!-- Badge -->
                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-full shadow">
                        Sisa 2 kamar
                    </span>

                </div>

                <!-- CONTENT -->
                <div class="px-1 mt-2 space-y-1">

                    <!-- Title + Gender -->
                    <div class="flex justify-between items-start">
                        <h3 class="text-sm font-semibold leading-tight line-clamp-1 text-primary">
                            Kos Putri Melati
                        </h3>

                        <span
                            class="text-xs text-secondary flex items-center gap-1 border border-gray-300 px-2 py-0.5 rounded-md">
                            <i class="fa-solid fa-venus text-[10px]"></i>
                            Putri
                        </span>
                    </div>

                    <!-- Location -->
                    <p class="text-xs text-secondary truncate">
                        Kampung Dalam, Siak
                    </p>

                    <!-- Facilities -->
                    <p class="text-[11px] text-thirdary truncate">
                        Kamar Mandi dalam · AC · Kasur
                    </p>

                    <!-- Price -->
                    <p class="text-sm">
                        <span class="font-semibold text-primary">Rp462.683</span>
                        <span class="text-thirdary text-xs">/bulan</span>
                    </p>
                </div>
            </a>
            <!-- Salin card di atas untuk kos lainnya -->
            {{-- View All Component --}}
            <div class="carousel-card">
                <a wire:navigate href="/resultpage" class="block p-3 mt-6">
                    <!-- Preview mini cards (simulasi listing) -->
                    <div class="relative h-24 mb-2">
                        <img src="https://awsimages.detik.net.id/visual/2021/09/10/ilustrasi-kos-kosan-cnbc-indonesiamuhammad-sabki-4_169.jpeg?w=650"
                            class="absolute top-0 left-4 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                        <img src="https://www.pajak.com/storage/2022/08/indekos-758x490.png"
                            class="absolute top-4 left-10 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                        <img src="https://www.shutterstock.com/image-photo/bogor-indonesia-december-3rd-2023-260nw-2400758873.jpg"
                            class="absolute top-2 left-20 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                    </div>
                    <!-- Text -->
                    <p class="text-primary text-sm font-semibold text-center">
                        Lihat Semua
                    </p>
                </a>
            </div>
        </x-carousel>
    </x-wrapper>
    <!-- Rekomendasi Kos END -->

    {{-- Sesuaikan Budget Kos START --}}
    <x-wrapper>
        <x-carousel-header title="Sesuaikan Budget Kos-mu di [Lokasi]" href="/resultpage" />
        <x-price-filter-tabs />
        <x-carousel href="/resultpage">
            <!-- CARD -->
            <a wire:navigate href="/detailpage" class="carousel-card">
                <!-- IMAGE -->
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />

                    <!-- Badge -->
                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-full shadow">
                        Sisa 2 kamar
                    </span>

                </div>

                <!-- CONTENT -->
                <div class="px-1 mt-2 space-y-1">

                    <!-- Title + Gender -->
                    <div class="flex justify-between items-start">
                        <h3 class="text-sm font-semibold leading-tight line-clamp-1 text-primary">
                            Kos Putri Melati
                        </h3>

                        <span
                            class="text-xs text-secondary flex items-center gap-1 border border-gray-300 px-2 py-0.5 rounded-md">
                            <i class="fa-solid fa-venus text-[10px]"></i>
                            Putri
                        </span>
                    </div>

                    <!-- Location -->
                    <p class="text-xs text-secondary truncate">
                        Kampung Dalam, Siak
                    </p>

                    <!-- Facilities -->
                    <p class="text-[11px] text-thirdary truncate">
                        Kamar Mandi dalam · AC · Kasur
                    </p>

                    <!-- Price -->
                    <p class="text-sm">
                        <span class="font-semibold text-primary">Rp462.683</span>
                        <span class="text-thirdary text-xs">/bulan</span>
                    </p>
                </div>
            </a>
            <!-- Salin card di atas untuk kos lainnya -->
            {{-- View All Component --}}
            <div class="carousel-card">
                <a wire:navigate href="/resultpage" class="block p-3 mt-6">
                    <!-- Preview mini cards (simulasi listing) -->
                    <div class="relative h-24 mb-2">
                        <img src="https://awsimages.detik.net.id/visual/2021/09/10/ilustrasi-kos-kosan-cnbc-indonesiamuhammad-sabki-4_169.jpeg?w=650"
                            class="absolute top-0 left-4 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                        <img src="https://www.pajak.com/storage/2022/08/indekos-758x490.png"
                            class="absolute top-4 left-10 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                        <img src="https://www.shutterstock.com/image-photo/bogor-indonesia-december-3rd-2023-260nw-2400758873.jpg"
                            class="absolute top-2 left-20 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                    </div>
                    <!-- Text -->
                    <p class="text-primary text-sm font-semibold text-center">
                        Lihat Semua
                    </p>
                </a>
            </div>
        </x-carousel>
    </x-wrapper>
    {{-- Sesuaikan Budget Kos END --}}



    {{-- Area Kos Populer di [Lokasi] START --}}
    <x-wrapper>
        <!-- Header -->
        <div class="flex items-start justify-between mb-4">
            <div class="flex items-center justify-between">
                <h2 class="px-1 text-md sm:text-xl font-semibold text-primary">
                    Area Kos Populer di <span class="text-brand">Siak</span>
                </h2>
            </div>
        </div>

        <!-- Grid Area List -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-popular-area-card location="Kampung Dalam" count="24" />
            <x-popular-area-card location="Kampung Rempak" count="18" />
            <x-popular-area-card location="Suak Lanjut" count="32" />
        </div>
    </x-wrapper>
    {{-- Area Kos Populer di [Lokasi] END --}}

    <!-- Baru Ditambahkan di [Lokasi]  START -->
    <x-wrapper>
        <x-carousel-header title="Baru Ditambahkan di [Lokasi]" href="/resultpage" />
        <x-carousel href="/resultpage">
            <!-- CARD -->
            <a wire:navigate href="/detailpage" class="carousel-card">
                <!-- IMAGE -->
                <div class="relative aspect-[4/3] rounded-2xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                        class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />

                    <!-- Badge -->
                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-full shadow">
                        Sisa 2 kamar
                    </span>

                </div>

                <!-- CONTENT -->
                <div class="px-1 mt-2 space-y-1">

                    <!-- Title + Gender -->
                    <div class="flex justify-between items-start">
                        <h3 class="text-sm font-semibold leading-tight line-clamp-1 text-primary">
                            Kos Putri Melati
                        </h3>

                        <span
                            class="text-xs text-secondary flex items-center gap-1 border border-gray-300 px-2 py-0.5 rounded-md">
                            <i class="fa-solid fa-venus text-[10px]"></i>
                            Putri
                        </span>
                    </div>

                    <!-- Location -->
                    <p class="text-xs text-secondary truncate">
                        Kampung Dalam, Siak
                    </p>

                    <!-- Facilities -->
                    <p class="text-[11px] text-thirdary truncate">
                        Kamar Mandi dalam · AC · Kasur
                    </p>

                    <!-- Price -->
                    <p class="text-sm">
                        <span class="font-semibold text-primary">Rp462.683</span>
                        <span class="text-thirdary text-xs">/bulan</span>
                    </p>
                </div>
            </a>
            <!-- Salin card di atas untuk kos lainnya -->
            {{-- View All Component --}}
            <div class="carousel-card">
                <a wire:navigate href="/resultpage" class="block p-3 mt-6">
                    <!-- Preview mini cards (simulasi listing) -->
                    <div class="relative h-24 mb-2">
                        <img src="https://awsimages.detik.net.id/visual/2021/09/10/ilustrasi-kos-kosan-cnbc-indonesiamuhammad-sabki-4_169.jpeg?w=650"
                            class="absolute top-0 left-4 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                        <img src="https://www.pajak.com/storage/2022/08/indekos-758x490.png"
                            class="absolute top-4 left-10 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                        <img src="https://www.shutterstock.com/image-photo/bogor-indonesia-december-3rd-2023-260nw-2400758873.jpg"
                            class="absolute top-2 left-20 w-16 h-16 object-cover rounded-lg shadow-sm border border-white">
                    </div>
                    <!-- Text -->
                    <p class="text-primary text-sm font-semibold text-center">
                        Lihat Semua
                    </p>
                </a>
            </div>
        </x-carousel>
    </x-wrapper>
    <!-- Baru Ditambahkan di [Lokasi] END -->

    {{-- Accordion Section START --}}
    <!-- Container START -->
    <x-wrapper>
        <!-- Header START -->
        <div class="text-center mb-6">
            <h2 class="text-xl sm:text-2xl font-bold text-brand mb-2">
                WakKos — Cari Kos di Kabupaten Siak
            </h2>
        </div>
        <!-- Header END -->

        <!-- Accordion Wrapper START -->
        <x-accordion-wrapper>
            <!-- Accordion Item 1 START -->
            <div class="accordion-item border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="accordion-trigger w-full px-5 py-3 flex items-center justify-between hover:bg-gray-50 focus:outline-none"
                    onclick="toggleAccordion(this)">

                    <span class="text-left font-semibold text-primary">
                        Kenapa WakKos?
                    </span>

                    <i class="accordion-chevron fa-solid fa-chevron-down text-secondary"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 text-secondary leading-relaxed">
                        <p>WakKos adalah aplikasi mobile dan web terpercaya untuk mencari, menyewa, dan mengelola
                            kos di Indonesia. Dengan teknologi terdepan, kami menghubungkan penyewa dan pemilik kos
                            dalam satu platform yang aman, mudah digunakan, dan transparan. Misi kami adalah membuat
                            pencarian kos menjadi lebih mudah dan efisien bagi semua kalangan.</p>
                    </div>
                </div>
            </div>
            <script>
                function toggleAccordion(button) {
                    const item = button.closest('.accordion-item');
                    const content = item.querySelector('.accordion-content');
                    const isActive = item.classList.contains('active');

                    // Close all other items
                    document.querySelectorAll('.accordion-item.active').forEach(activeItem => {
                        if (activeItem !== item) {
                            activeItem.classList.remove('active');
                            activeItem.querySelector('.accordion-content').classList.remove('active');
                        }
                    });

                    // Toggle current item
                    item.classList.toggle('active');
                    content.classList.toggle('active');
                }
            </script>
            <!-- Accordion Item 1 END -->

            <!-- Accordion Item 2 START -->
            <div class="accordion-item border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="accordion-trigger w-full px-5 py-3 flex items-center justify-between hover:bg-gray-50 focus:outline-none"
                    onclick="toggleAccordion(this)">

                    <span class="text-left font-semibold text-primary">
                        Cara Menyewa Kos
                    </span>

                    <i class="accordion-chevron fa-solid fa-chevron-down text-secondary"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 text-secondary leading-relaxed">
                        <ol class="list-decimal list-inside space-y-3">
                            <li><strong>Buka Aplikasi WakKos</strong> - Unduh dan buka aplikasi WakKos di smartphone
                                atau akses website</li>
                            <li><strong>Cari Kos</strong> - Gunakan filter lokasi, harga, dan fasilitas sesuai
                                preferensi Anda</li>
                            <li><strong>Lihat Detail</strong> - Periksa foto, deskripsi, dan review dari penghuni
                                sebelumnya</li>
                            <li><strong>Hubungi Pemilik</strong> - Ajukan pertanyaan atau minta jadwal kunjungan
                            </li>
                            <li><strong>Pesan Kos</strong> - Lakukan booking dan ikuti proses pembayaran yang aman
                            </li>
                            <li><strong>Selesai</strong> - Terima konfirmasi dan nikmati kos baru Anda</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Accordion Item 2 END -->

            <!-- Accordion Item 3 START -->
            <div class="accordion-item border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="accordion-trigger w-full px-5 py-3 flex items-center justify-between hover:bg-gray-50 focus:outline-none"
                    onclick="toggleAccordion(this)">

                    <span class="text-left font-semibold text-primary">
                        Cara Mendaftarkan Kos
                    </span>

                    <i class="accordion-chevron fa-solid fa-chevron-down text-secondary"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 text-secondary leading-relaxed">
                        <ol class="list-decimal list-inside space-y-3">
                            <li><strong>Daftar Akun</strong> - Buat akun pemilik kos dengan email atau nomor telepon
                            </li>
                            <li><strong>Verifikasi Data</strong> - Lengkapi profil dan verifikasi identitas Anda
                            </li>
                            <li><strong>Tambah Kos</strong> - Klik "Tambah Properti" dan isi data kos dengan lengkap
                            </li>
                            <li><strong>Upload Foto</strong> - Unggah foto berkualitas dari berbagai sudut ruangan
                            </li>
                            <li><strong>Atur Harga & Fasilitas</strong> - Tentukan harga sewa dan daftar fasilitas
                                yang tersedia</li>
                            <li><strong>Terbitkan</strong> - Publikasikan kos Anda dan mulai terima calon penghuni
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Accordion Item 3 END -->

        </x-accordion-wrapper>
        <!-- Accordion Wrapper END -->
    </x-wrapper>
    <!-- Container END -->
@endsection
