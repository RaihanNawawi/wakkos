@extends('layouts.app')
@section('content')
    <!-- Rekomendasi Kos START -->
    <x-structure.wrapper>
        <!-- Greeting Section START -->
        <div class="px-1 mb-6">
            <p class="text-sm sm:text-md text-secondary mb-1">Hai.</p>
            <h2 class="text-xl sm:text-2xl font-bold text-primary">Lagi cari kos di <span class="text-brand">Siak</span>?
            </h2>
        </div>
        <!-- Greeting Section END -->
        <x-carousel.header title="Ini Rekomendasi untukmu" href="/resultpage" />
        <x-carousel href="/resultpage">
            <!-- CARD -->
            <x-card.wrapper href="/detailpage" variant="carousel-card">
                <!-- IMAGE -->
                <x-card.image src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg" />
                <!-- CONTENT -->
                <x-card.content>
                    <!-- Title + Gender -->
                    <div class="flex justify-between items-start">
                        <h3 class="text-sm font-semibold leading-tight line-clamp-1 text-primary">
                            Kos Putri Melati
                        </h3>

                        <x-badge.female />

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
                </x-card.content>
            </x-card.wrapper>
            <!-- Salin card di atas untuk kos lainnya -->
            {{-- View All Component --}}
            <x-card.view-all href="/resultpage" />
        </x-carousel>
    </x-structure.wrapper>
    <!-- Rekomendasi Kos END -->

    {{-- Sesuaikan Budget Kos START --}}
    <x-structure.wrapper>
        <x-carousel.header title="Sesuaikan Budget Kos-mu di [Lokasi]" href="/resultpage" />
        <x-navtab.price-filter />
        <x-carousel href="/resultpage">
            <!-- CARD -->
            <x-card.wrapper href="/detailpage" variant="carousel-card">
                <!-- IMAGE -->
                <x-card.image src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg" />
                <!-- CONTENT -->
                <x-card.content>
                    <!-- Title + Gender -->
                    <div class="flex justify-between items-start">
                        <h3 class="text-sm font-semibold leading-tight line-clamp-1 text-primary">
                            Kos Putri Melati
                        </h3>
                        {{-- Gender Badge --}}
                        <x-badge.male />
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
                </x-card.content>
            </x-card.wrapper>
            <!-- Salin card di atas untuk kos lainnya -->
            {{-- View All Component --}}
            <x-card.view-all href="/resultpage" />
        </x-carousel>
    </x-structure.wrapper>
    {{-- Sesuaikan Budget Kos END --}}

    {{-- Area Kos Populer di [Lokasi] START --}}
    <x-structure.wrapper>
        <!-- Header -->
        <div class="flex items-start justify-between mb-4">
            <div class="flex items-center justify-between">
                <h2 class="px-1 text-md sm:text-xl font-semibold text-primary">
                    Area Kos Populer di <span class="text-brand">Siak</span>
                </h2>
            </div>
        </div>

        <!-- Grid Area List -->
        <div class="grid-listing">
            <x-card.popular-area location="Kampung Dalam" count="24" />
            <x-card.popular-area location="Kampung Rempak" count="18" />
            <x-card.popular-area location="Suak Lanjut" count="32" />
        </div>
    </x-structure.wrapper>
    {{-- Area Kos Populer di [Lokasi] END --}}

    <!-- Baru Ditambahkan di [Lokasi]  START -->
    <x-structure.wrapper>
        <x-carousel.header title="Baru Ditambahkan di [Lokasi]" href="/resultpage" />
        <x-carousel href="/resultpage">
            <!-- CARD -->
            <x-card.wrapper href="/detailpage" variant="carousel-card">
                <!-- IMAGE -->
                <x-card.image src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg" />
                <!-- CONTENT -->
                <x-card.content>
                    <!-- Title + Gender -->
                    <div class="flex justify-between items-start">
                        <h3 class="text-sm font-semibold leading-tight line-clamp-1 text-primary">
                            Kos Putri Melati
                        </h3>

                        <x-badge.mix />
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
                </x-card.content>
            </x-card.wrapper>
            <!-- Salin card di atas untuk kos lainnya -->
            {{-- View All Component --}}
            <x-card.view-all href="/resultpage" />
        </x-carousel>
    </x-structure.wrapper>
    <!-- Baru Ditambahkan di [Lokasi] END -->

    {{-- Accordion Section START --}}
    <x-structure.wrapper>
        <!-- Header START -->
        <div class="text-center mb-6">
            <h2 class="text-xl sm:text-2xl font-bold text-brand mb-2">
                WakKos — Cari Kos di Kabupaten Siak
            </h2>
        </div>
        <!-- Header END -->

        <!-- Accordion Wrapper START -->
        <x-accordion.wrapper>
            <!-- Accordion Item START -->
            <x-accordion.item title="Kenapa WakKos?">
                <p>WakKos adalah aplikasi mobile dan web terpercaya untuk mencari, menyewa, dan mengelola
                    kos di Indonesia. Dengan teknologi terdepan, kami menghubungkan penyewa dan pemilik kos
                    dalam satu platform yang aman, mudah digunakan, dan transparan. Misi kami adalah membuat
                    pencarian kos menjadi lebih mudah dan efisien bagi semua kalangan.</p>
            </x-accordion.item>

            <x-accordion.item title="Cara Menyewa Kos">
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
            </x-accordion.item>

            <x-accordion.item title="Cara Mendaftarkan Kos">
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
            </x-accordion.item>
            <!-- Accordion Item END -->

        </x-accordion.wrapper>
        <!-- Accordion Wrapper END -->
    </x-structure.wrapper>
    {{-- Accordion Section END --}}
@endsection
