<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WakKos - Cari Kos di Siak Sri Indrapura</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-50 text-gray-900">

    <!-- Navbar Container START -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-full px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <!-- Navbar Left - Logo/Brand START -->
                <div class="flex-1">
                    <a href="/homepage" class="text-2xl font-bold text-blue-600">
                        <span class="">WakKos</span>
                    </a>
                </div>
                <!-- Navbar Left - Logo/Brand END -->


                <!-- Navbar Right - Icons START -->
                <div class="flex-1 flex items-center justify-end gap-4">

                    <!-- CTA Daftarkan Kos (WhatsApp) -->
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20WakKos%20%F0%9F%91%8B%0A%0ASaya%20ingin%20mendaftarkan%20kos%20saya%20di%20WakKos.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih%20%F0%9F%98%8A"
                        target="_blank"
                        class="hidden md:block hover:bg-gray-50 text-gray-800 font-semibold px-5 py-2.5 rounded-full">
                        <i class="fab fa-whatsapp text-green-500 mr-1"></i>
                        Daftarkan Kos
                    </a>

                    <!-- Hamburger Menu Button START -->
                    <button id="hamburgerBtn"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 hover:bg-gray-100 transition-colors duration-200">
                        <i class="fas fa-bars text-gray-700 text-base"></i>
                    </button>
                    <!-- Hamburger Menu Button END -->

                </div>
                <!-- Navbar Right - Icons END -->

            </div>
        </div>
    </nav>
    <!-- Menu Overlay (Backdrop) START -->
    <div id="menuOverlay" class="hidden fixed inset-0 bg-black/30 z-40 transition-opacity duration-300"
        onclick="closeMenu()"></div>
    <!-- Menu Overlay (Backdrop) END -->

    <!-- Hamburger Menu Drawer START -->
    <div id="menuDrawer"
        class="hidden fixed top-0 right-0 h-screen w-80 bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">

        <!-- Menu Header START -->
        <div class="flex items-center justify-between p-5 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-gray-900">Menu</h2>
            <button id="closeMenuBtn"
                class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors duration-200"
                onclick="closeMenu()">
                <i class="fas fa-times text-gray-700"></i>
            </button>
        </div>
        <!-- Menu Header END -->

        <!-- Menu Items Container START -->
        <!-- Menu Items Container START -->
        <div class="flex flex-col divide-y divide-gray-200 text-sm">

            <!-- CTA Daftarkan Kos -->
            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20WakKos%20%F0%9F%91%8B%0A%0ASaya%20ingin%20mendaftarkan%20kos%20saya%20di%20WakKos.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih%20%F0%9F%98%8A"
                target="_blank"
                class="px-6 py-4 font-semibold text-gray-800 hover:bg-gray-50 transition flex items-center gap-3">
                <i class="fab fa-whatsapp text-green-500 text-lg"></i>
                Daftarkan Kos
            </a>

            <!-- Cari Kos -->
            <!-- Cari Kos -->
            <a href="/homepage"
                class="px-6 py-4 text-gray-800 hover:bg-gray-50 transition flex items-center justify-between w-full">
                <span>Cari Kos</span>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
            </a>

            <!-- Pusat Bantuan -->
            <a href="#"
                class="px-6 py-4 text-gray-800 hover:bg-gray-50 transition flex items-center justify-between">
                <span>Pusat Bantuan</span>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
            </a>

        </div>
        <!-- Menu Items Container END -->

        <!-- Menu Items Container END -->

        <!-- Menu Footer - Auth Section START -->
        <div class="border-t border-gray-200 mt-auto">
        </div>
        <!-- Menu Footer - Auth Section END -->

    </div>
    <!-- Hamburger Menu Drawer END -->
    <script>
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const menuDrawer = document.getElementById('menuDrawer');
        const menuOverlay = document.getElementById('menuOverlay');

        // Open Menu
        hamburgerBtn.addEventListener('click', () => {
            menuDrawer.classList.remove('hidden');
            menuDrawer.classList.remove('translate-x-full');
            menuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        // Close Menu
        function closeMenu() {
            menuDrawer.classList.add('translate-x-full');
            menuOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close menu when clicking on a menu item
        document.querySelectorAll('#menuDrawer a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    </script>
    <!-- Navbar Container END -->

    <!-- Hero Section START -->
    <section class="relative py-6 lg:py-16 overflow-hidden" id="start-search">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Text Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-4 leading-tight">
                        Temukan Kos Impianmu di <span class="text-blue-600">Siak Sri Indrapura</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-700 mb-8 leading-relaxed">
                        Langsung mulai pencarian, tanpa perlu daftar akun!
                    </p>
                    <!-- CTA Button -->
                    <div onclick="openSearch()"
                        class="w-full max-w-xl mx-auto lg:mx-0 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition p-3">
                        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                            <!-- Left: Search hint -->
                            <div class="flex items-center gap-3 flex-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 flex-shrink-0"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35m1.85-5.65a7.5 7.5 0 11-15 0 7.5 7.5 0 0115 0z" />
                                </svg>

                                <span class="text-gray-400 text-sm sm:text-base">
                                    Cari kos di Siak Sri Indrapura
                                </span>
                            </div>

                            <!-- Right: CTA -->
                            <span
                                class="w-full sm:w-auto text-center bg-blue-600 text-white px-5 py-2.5 lg:px-6 rounded-lg font-semibold text-sm">
                                Cari
                            </span>
                        </div>
                    </div>
                </div>

                <!-- SEARCH LAYER -->
                <div id="search-layer" class="fixed inset-0 z-50 hidden" aria-modal="true" role="dialog">
                    <!-- Backdrop -->
                    <div class="absolute inset-0 bg-white"></div>
                    <!-- Panel -->
                    <div class="relative sm:mx-auto w-full sm:max-w-3xl px-3 sm:px-4">
                        <div class="sm:rounded-xl overflow-hidden flex flex-col max-h-[85vh]">

                            <div class="px-2 sm:px-4 py-3 bg-white z-10 sticky top-0">
                                <div class="flex items-center gap-2">

                                    <!-- Back Button (OUTSIDE SEARCH BAR) -->
                                    <button onclick="closeSearch()"
                                        class="p-2 -ml-1 rounded-md hover:bg-gray-100 transition flex-shrink-0"
                                        aria-label="Kembali">
                                        <i class="fa-solid fa-arrow-left text-gray-600 text-xl"></i>
                                    </button>

                                    <!-- Search Bar -->
                                    <div
                                        class="relative flex-1 flex items-center border border-gray-300 rounded-lg px-2 focus-within:ring-2 focus-within:ring-gray-300">
                                        <input id="search-input" type="text" placeholder="Mau Cari Kos di Mana?"
                                            class="w-full h-11 bg-transparent pl-2 pr-4 text-sm focus:outline-none border-none" />
                                    </div>

                                </div>
                            </div>

                            <!-- Content -->
                            <div class="flex-1 overflow-y-auto">

                                <!-- Recent -->
                                <div class="px-3 sm:px-4 py-.5" id="recent-search">
                                    <p class="text-sm font-semibold mb-1.5 text-gray-500">
                                        Pencarian Terakhir
                                    </p>
                                    <!-- Location Item -->
                                    <a href="/resultpage"
                                        class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                                        <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                            <i class="fa-solid fa-location-dot text-xl text-gray-500"></i>
                                        </div>

                                        <div class="flex-1">
                                            <p class="text-sm font-medium text-gray-800">
                                                Kampung Dalam
                                            </p>
                                            <p class="text-xs text-gray-500">
                                                Siak, Riau
                                            </p>
                                        </div>
                                    </a>

                                    <a href="/detailpage"
                                        class="w-full flex items-start gap-3 pt-2 pb-2 rounded-md hover:bg-gray-50 transition text-left">

                                        <!-- Icon / Thumbnail -->
                                        <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                            <i class="fa-solid fa-house text-gray-500 text-xl"></i>
                                        </div>


                                        <!-- Konten Utama -->
                                        <div class="flex-1 min-w-0">
                                            <!-- Title -->
                                            <p class="text-sm font-medium text-gray-800 leading-tight">
                                                Kos Putri Balai Kayang 2
                                            </p>

                                            <!-- Location -->
                                            <p class="text-xs text-gray-500 mt-0.5">
                                                Kampung Dalam, Siak, Riau
                                            </p>

                                            <!-- ===== Mobile Meta (default) ===== -->
                                            <div class="mt-1 flex items-center gap-2 text-xs md:hidden">
                                                <span
                                                    class="px-2 py-0.5 rounded-md border border-gray-200 text-gray-600">
                                                    Putri
                                                </span>
                                                <span class="font-semibold text-gray-800">
                                                    Rp700rb
                                                </span>
                                                <span class="text-gray-400">
                                                    /bulan
                                                </span>
                                            </div>
                                        </div>

                                        <!-- ===== Desktop Meta (md+) ===== -->
                                        <div class="hidden md:flex flex-col items-end flex-shrink-0">
                                            <span
                                                class="text-xs px-2 py-0.5 rounded-md border border-gray-200 text-gray-600">
                                                Putri
                                            </span>

                                            <div class="text-right text-xs font-semibold text-gray-800">
                                                Rp700rb
                                                <span class="text-xs font-normal text-gray-400">
                                                    /bulan
                                                </span>
                                            </div>
                                        </div>
                                    </a>


                                </div>
                                <!-- Search Result Container -->
                                <div class="px-3 sm:px-4 hidden" id="recommendation-search">
                                    <div class="space-y-3">

                                        <!-- ===================== -->
                                        <!-- Lokasi Result -->
                                        <!-- ===================== -->
                                        <div class="space-y-1">

                                            <!-- Location Item -->
                                            <button
                                                class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                                    <i class="fa-solid fa-location-dot text-xl text-gray-500"></i>
                                                </div>

                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-800">
                                                        Kampung Dalam
                                                    </p>
                                                    <p class="text-xs text-gray-500">
                                                        Siak, Riau
                                                    </p>
                                                </div>
                                            </button>

                                            <button
                                                class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                                    <i class="fa-solid fa-location-dot text-xl text-gray-500"></i>
                                                </div>

                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-800">
                                                        Kampung Rempak
                                                    </p>
                                                    <p class="text-xs text-gray-500">
                                                        Siak, Riau
                                                    </p>
                                                </div>
                                            </button>

                                            <button
                                                class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                                    <i class="fa-solid fa-location-dot text-xl text-gray-500"></i>
                                                </div>

                                                <div class="flex-1">
                                                    <p class="text-sm font-medium text-gray-800">
                                                        Suak Lanjut
                                                    </p>
                                                    <p class="text-xs text-gray-500">
                                                        Siak, Riau
                                                    </p>
                                                </div>
                                            </button>
                                        </div>

                                        <!-- Divider -->
                                        <div class="border-t"></div>

                                        <!-- ===================== -->
                                        <!-- Kos Recommendation -->
                                        <!-- ===================== -->
                                        <div>
                                            <p class="mb-2 text-sm font-semibold text-gray-500">
                                                Rekomendasi Kos
                                            </p>

                                            <div class="space-y-2">

                                                <!-- Kos Item -->
                                                <a href="/detailpage"
                                                    class="w-full flex items-start gap-3 pt-2 pb-2 rounded-md hover:bg-gray-50 transition text-left">

                                                    <!-- Icon / Thumbnail -->
                                                    <div
                                                        class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                                        <i class="fa-solid fa-house text-gray-500 text-xl"></i>
                                                    </div>

                                                    <!-- Konten Utama -->
                                                    <div class="flex-1 min-w-0">

                                                        <!-- Title -->
                                                        <p class="text-sm font-medium text-gray-800 leading-tight">
                                                            Kos Putri Balai Kayang 2
                                                        </p>

                                                        <!-- Location -->
                                                        <p class="text-xs text-gray-500 mt-0.5">
                                                            Kampung Dalam, Siak, Riau
                                                        </p>

                                                        <!-- ===== Mobile Meta (default) ===== -->
                                                        <div class="mt-1 flex items-center gap-2 text-xs md:hidden">
                                                            <span
                                                                class="px-2 py-0.5 rounded-md border border-gray-200 text-gray-600">
                                                                Putri
                                                            </span>
                                                            <span class="font-semibold text-gray-800">
                                                                Rp700rb
                                                            </span>
                                                            <span class="text-gray-400">
                                                                /bulan
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <!-- ===== Desktop Meta (md+) ===== -->
                                                    <div class="hidden md:flex flex-col items-end flex-shrink-0">
                                                        <span
                                                            class="text-xs px-2 py-0.5 rounded-md border border-gray-200 text-gray-600">
                                                            Putri
                                                        </span>

                                                        <div class="text-right text-xs font-semibold text-gray-800">
                                                            Rp700rb
                                                            <span class="text-xs font-normal text-gray-400">
                                                                /bulan
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Footer Hint -->
                            <div class="border-t px-3 sm:px-4 mt-1.5 text-xs text-gray-400">
                                <span>Klik Hasil untuk mencari</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SEARCH LAYER END -->
            </div>
        </div>
    </section>
    <!-- Hero Section END -->

    <!-- Featured Boarding Houses START -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <div class="mb-4 flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-2">Rekomendasi Kos di
                            <span class="text-blue-600">Siak Sri Indrapura</span>
                        </h2>
                    </div>
                </div>
                <!-- Desktop Only: Lihat Semua -->
                <a href="/resultpage"
                    class="hidden lg:inline-flex items-center gap-2
              text-sm font-medium text-gray-700
              px-4 py-2 rounded-md
              border border-gray-200
              bg-white
              hover:bg-gray-50 hover:border-gray-300
              transition">
                    Lihat Semua
                </a>
            </div>

            <!-- Carousel Wrapper -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">

                <!-- Kos Putri -->
                <a href="/detailpage" class="group block rounded-xl focus:outline-none">
                    {{-- Image --}}
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                            alt="Guesthouse"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                        <span
                            class="absolute top-3 left-2 text-xs font-semibold bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full shadow-sm">
                            Sisa 2 Kamar
                        </span>
                    </div>
                    <!-- Content -->
                    <div class="mt-3 space-y-1">
                        <div class="flex justify-between text-md font-semibold">
                            <span>Kos Putri Melati</span>
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="fa-solid fa-venus text-xs"></i>
                                Khusus Putri
                            </span>

                        </div>

                        <p class="text-sm text-gray-600 truncate">
                            Kampung Dalam, Siak, Riau
                        </p>

                        <p class="text-xs text-gray-500">
                            Kamar mandi dalam · Kasur · AC
                        </p>

                        <p class="text-sm">
                            <span class="font-semibold underline">Rp462.683</span>
                            <span class="text-gray-500"> / bulan</span>
                        </p>
                    </div>

                </a>
                {{-- Kos Putra --}}
                <a href="/detailpage" class="group block rounded-xl focus:outline-none">
                    {{-- Image --}}
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2021/04/ventilation.jpeg"
                            alt="Guesthouse"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                        <span
                            class="absolute top-3 left-2 text-xs font-semibold bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full shadow-sm">
                            Sisa 2 Kamar
                        </span>
                    </div>
                    <!-- Content -->
                    <div class="mt-3 space-y-1">
                        <div class="flex justify-between text-md font-semibold">
                            <span>Kos Putra Siak</span>
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="fa-solid fa-mars text-xs"></i>
                                Khusus Putra
                            </span>

                        </div>

                        <p class="text-sm text-gray-600 truncate">
                            Kampung Dalam, Siak, Riau
                        </p>

                        <p class="text-xs text-gray-500">
                            Kamar mandi dalam · Kasur
                        </p>

                        <p class="text-sm">
                            <span class="font-semibold underline">Rp462.683</span>
                            <span class="text-gray-500"> / bulan</span>
                        </p>
                    </div>

                </a>
                {{-- Kos Campur --}}
                <a href="/detailpage" class="group block rounded-xl focus:outline-none">
                    {{-- Image --}}
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="https://cdn1-production-images-kly.akamaized.net/fLCXhB2CU-knEOxENiP3Ge2Ie8M=/1280x720/smart/filters:quality(75):strip_icc()/kly-media-production/medias/861628/original/073424800_1429960385-3.JPG"
                            alt="Guesthouse"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                        <span
                            class="absolute top-3 left-2 text-xs font-semibold bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full shadow-sm">
                            Sisa 2 Kamar
                        </span>
                    </div>
                    <!-- Content -->
                    <div class="mt-3 space-y-1">
                        <div class="flex justify-between text-md font-semibold">
                            <span>Kos Campur Siak</span>
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="fa-solid fa-venus-mars text-xs"></i>
                                Campuran
                            </span>

                        </div>

                        <p class="text-sm text-gray-600 truncate">
                            Kampung Dalam, Siak, Riau
                        </p>

                        <p class="text-xs text-gray-500">
                            Kamar mandi dalam · Kasur
                        </p>

                        <p class="text-sm">
                            <span class="font-semibold underline">Rp462.683</span>
                            <span class="text-gray-500"> / bulan</span>
                        </p>
                    </div>

                </a>
                <!-- 🔁 Duplikasikan card ini -->

            </div>
            <!-- Mobile Only: Lihat Semua -->
            <div class="mt-6 lg:hidden">
                <a href="/resultpage    "
                    class="block w-full
            text-center
            text-sm font-medium text-gray-700
            py-2 px-4 rounded-md
            border border-gray-200 bg-white">
                    Lihat Semua
                </a>
            </div>

        </div>
    </section>
    <!-- Featured Boarding Houses END -->

    <section class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-4 flex items-center justify-between">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Area Kos Populer</h2>
                </div>
            </div>

            <!-- Location Grid Container -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Location Card 1 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-900 to-blue-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-blue-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-university text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">Near University</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 1 END -->

                <!-- Location Card 2 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-teal-900 to-teal-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-teal-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-city text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">City Center</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 2 END -->

                <!-- Location Card 3 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-900 to-emerald-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-emerald-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-building text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">Business District</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 3 END -->

                <!-- Location Card 4 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-violet-900 to-violet-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-violet-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-mosque text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">Near Mosque</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 4 END -->

                <!-- Location Card 5 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-sky-900 to-sky-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-sky-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-hospital text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">Near Hospital</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 5 END -->

                <!-- Location Card 6 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-amber-900 to-amber-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-amber-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-utensils text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">Food Street</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 6 END -->

                <!-- Location Card 7 START -->
                <div
                    class="relative h-56 bg-gray-300 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group">
                    <!-- Background with gradient overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-indigo-900 to-indigo-600 opacity-40 group-hover:opacity-30 transition-opacity">
                    </div>
                    <div
                        class="absolute inset-0 bg-indigo-500 opacity-20 group-hover:scale-110 transition-transform origin-center flex items-center justify-center">
                        <i class="fas fa-train text-white text-8xl opacity-10"></i>
                    </div>
                    <!-- Text Content -->
                    <div class="relative h-full flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-2xl font-bold text-white drop-shadow-lg">Transit Hub</h3>
                        </div>
                    </div>
                </div>
                <!-- Location Card 7 END -->

                <!-- View All Card START -->
                <div
                    class="relative h-56 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-shadow cursor-pointer group bg-gradient-to-br from-gray-100 to-gray-50 border-2 border-dashed border-gray-300 flex items-center justify-center">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">See all <i
                                class="fas fa-arrow-right ml-2"></i></h3>
                        <p class="text-gray-600 text-sm">View more locations</p>
                    </div>
                </div>
                <!-- View All Card END -->
            </div>
        </div>
    </section>
    <!-- Kos Areas Popular END -->


    <!-- Recently Added Kos START -->
    <section class="py-8 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex items-center justify-between mb-4">
                <div class="mb-4 flex items-center justify-between">
                    <div>
                        <h2 class="text-xl lg:text-2xl font-bold text-gray-900 mb-3">Kos Terbaru Ditambahkan</h2>
                        <p class="text-gray-600 text-sm">Cari kos terbaru yang telah ditambahkan oleh pemilik kos</p>
                    </div>
                </div>
                <!-- Desktop Only: Lihat Semua -->
                <a href="/resultpage"
                    class="hidden lg:inline-flex items-center gap-2
              text-sm font-medium text-gray-700
              px-4 py-2 rounded-md
              border border-gray-200
              bg-white
              hover:bg-gray-50 hover:border-gray-300
              transition">
                    Lihat Semua
                </a>
            </div>

            <!-- Carousel Wrapper -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 lg:gap-6">

                <!-- Kos Putri -->
                <a href="/detailpage" class="group block rounded-xl focus:outline-none">
                    {{-- Image --}}
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                            alt="Guesthouse"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                        <span
                            class="absolute top-3 left-2 text-xs font-semibold bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full shadow-sm">
                            Sisa 2 Kamar
                        </span>
                    </div>
                    <!-- Content -->
                    <div class="mt-3 space-y-1">
                        <div class="flex justify-between text-md font-semibold">
                            <span>Kos Putri Melati</span>
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="fa-solid fa-venus text-xs"></i>
                                Khusus Putri
                            </span>

                        </div>

                        <p class="text-sm text-gray-600 truncate">
                            Kampung Dalam, Siak, Riau
                        </p>

                        <p class="text-xs text-gray-500">
                            Kamar mandi dalam · Kasur · AC
                        </p>

                        <p class="text-sm">
                            <span class="font-semibold underline">Rp462.683</span>
                            <span class="text-gray-500"> / bulan</span>
                        </p>
                    </div>

                </a>
                {{-- Kos Putra --}}
                <a href="/detailpage" class="group block rounded-xl focus:outline-none">
                    {{-- Image --}}
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2021/04/ventilation.jpeg"
                            alt="Guesthouse"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                        <span
                            class="absolute top-3 left-2 text-xs font-semibold bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full shadow-sm">
                            Sisa 2 Kamar
                        </span>
                    </div>
                    <!-- Content -->
                    <div class="mt-3 space-y-1">
                        <div class="flex justify-between text-md font-semibold">
                            <span>Kos Putra Siak</span>
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="fa-solid fa-mars text-xs"></i>
                                Khusus Putra
                            </span>

                        </div>

                        <p class="text-sm text-gray-600 truncate">
                            Kampung Dalam, Siak, Riau
                        </p>

                        <p class="text-xs text-gray-500">
                            Kamar mandi dalam · Kasur
                        </p>

                        <p class="text-sm">
                            <span class="font-semibold underline">Rp462.683</span>
                            <span class="text-gray-500"> / bulan</span>
                        </p>
                    </div>

                </a>
                {{-- Kos Campur --}}
                <a href="/detailpage" class="group block rounded-xl focus:outline-none">
                    {{-- Image --}}
                    <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                        <img src="https://cdn1-production-images-kly.akamaized.net/fLCXhB2CU-knEOxENiP3Ge2Ie8M=/1280x720/smart/filters:quality(75):strip_icc()/kly-media-production/medias/861628/original/073424800_1429960385-3.JPG"
                            alt="Guesthouse"
                            class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                        <span
                            class="absolute top-3 left-2 text-xs font-semibold bg-amber-100 text-amber-800 px-2.5 py-1 rounded-full shadow-sm">
                            Sisa 2 Kamar
                        </span>
                    </div>
                    <!-- Content -->
                    <div class="mt-3 space-y-1">
                        <div class="flex justify-between text-md font-semibold">
                            <span>Kos Campur Siak</span>
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="fa-solid fa-venus-mars text-xs"></i>
                                Campuran
                            </span>

                        </div>

                        <p class="text-sm text-gray-600 truncate">
                            Kampung Dalam, Siak, Riau
                        </p>

                        <p class="text-xs text-gray-500">
                            Kamar mandi dalam · Kasur
                        </p>

                        <p class="text-sm">
                            <span class="font-semibold underline">Rp462.683</span>
                            <span class="text-gray-500"> / bulan</span>
                        </p>
                    </div>

                </a>
                <!-- 🔁 Duplikasikan card ini -->

            </div>
            <!-- Mobile Only: Lihat Semua -->
            <div class="mt-6 lg:hidden">
                <a href="/resultpage    "
                    class="block w-full
            text-center
            text-sm font-medium text-gray-700
            py-2 px-4 rounded-md
            border border-gray-200 bg-white">
                    Lihat Semua
                </a>
            </div>

        </div>
    </section>
    <!-- Recently Added Kos END -->

    <!-- Why Use This Platform START -->
    {{-- <section class="py-8">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-3">Apa itu WakKos?</h2>
                <p class="text-gray-600">WakKos adalah platform pencarian kos yang dirancang untuk memudahkan pencarian kos di wilayah Siak Sri Indrapura</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Benefit Card 1 START -->
                <div class="text-center">
                    <div class="bg-blue-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-check-circle text-blue-600 text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Tidak Perlu Akun</h3>
                    <p class="text-gray-600">Cari kos tanpa perlu membuat akun atau memberikan informasi pribadi</p>
                </div>
                <!-- Benefit Card 1 END -->

                <!-- Benefit Card 2 START -->
                <div class="text-center">
                    <div class="bg-green-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fab fa-whatsapp text-green-600 text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kontak WhatsApp Langsung</h3>
                    <p class="text-gray-600">Mau Sewa kos? Cari kos yang kamu inginkan dan hubungi WakKos melalui WhatsApp</p>
                </div>
                <!-- Benefit Card 2 END -->

                <!-- Benefit Card 3 START -->
                <div class="text-center">
                    <div class="bg-purple-100 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-purple-600 text-4xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Dibuat untuk Pengunjung</h3>
                    <p class="text-gray-600">Dirancang khusus untuk orang yang belum mengenal kota ini agar bisa menemukan tempat tinggal mereka</p>
                </div>
                <!-- Benefit Card 3 END -->
            </div>
        </div>
    </section> --}}
    <!-- Why Use This Platform END -->

    <!-- CTA Section START -->
    <section class="py-20 lg:py-32 bg-blue-600 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                Siap Menemukan Kos Impianmu?
            </h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                Mulai pencarian sekarang dan temukan kos yang paling sesuai dengan kebutuhanmu!
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#"
                    class="bg-white text-blue-600 px-8 py-4 rounded-xl font-bold text-lg shadow-md w-full sm:w-auto">
                    Mulai Cari Kos
                </a>
            </div>
        </div>
    </section>
    <!-- CTA Section END -->

    <!-- Footer START -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- Brand Column -->
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">WakKos</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Platform pencarian kos untuk wilayah Siak Sri Indrapura.
                    </p>
                </div>

                <!-- Navigation Column -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Jelajahi WakKos</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="/homepage" class="hover:text-white">Cari Kos</a></li>
                        <li><a href="https://wa.me/6281234567890?text=Halo%20Admin%20WakKos%20%F0%9F%91%8B%0A%0ASaya%20ingin%20mendaftarkan%20kos%20saya%20di%20WakKos.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih%20%F0%9F%98%8A"
                                target="_blank" class="hover:text-white">Daftarkan Kos</a></li>
                        <li><a href="#about" class="hover:text-white">Tentang WakKos</a></li>
                        <li><a href="#" class="hover:text-white">Pusat Bantuan</a></li>
                    </ul>
                </div>


                <!-- Help Column -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Kebijakan</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <!-- Contact Column -->
                <div>
                    <h4 class="text-white font-semibold mb-2">Hubungi Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center gap-2">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=wakkosapp@gmail.com&su=Judul%20Pesan&body=Halo%20Admin%20WakKos"
                                target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-white">
                                <i class="fa-solid fa-envelope text-gray-300 text-md"></i>
                                <span>wakkosapp@gmail.com</span>
                            </a>
                        </li>

                        <li class="flex items-center gap-2">
                            <!-- CTA Button -->
                            <a href="https://wa.me/6281995421795?text=Halo%20WakKos%2C%0A%0ASaya%20tertarik%20dengan%20kos%20ini.%0ABoleh%20dibantu%20untuk%20info%20ketersediaan%2C%20harga%2C%20dan%20fasilitasnya%3F%0A%0ATerima%20kasih."
                                target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-white">
                                <i class="fa-brands fa-whatsapp text-gray-300 text-md"></i>
                                <span>+62 819-9542-1795</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-8 text-center text-sm text-gray-500">
                <p>&copy; 2026 WakKos. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    <script>
        // Search Layer Script START
        function openSearch() {
            const layer = document.getElementById('search-layer');
            const input = document.getElementById('search-input');

            layer.classList.remove('hidden');

            setTimeout(() => {
                input.focus();
            }, 50);
        }

        function closeSearch() {
            const layer = document.getElementById('search-layer');
            layer.classList.add('hidden');
        }
        // Search Layer Script END
        // Input Interaction Script START
        const searchInput = document.getElementById('search-input');
        const recentSearch = document.getElementById('recent-search');
        const recommendationSearch = document.getElementById('recommendation-search');

        searchInput.addEventListener('input', () => {
            const hasValue = searchInput.value.trim().length > 0;

            if (hasValue) {
                recentSearch.classList.add('hidden');
                recommendationSearch.classList.remove('hidden');
            } else {
                recentSearch.classList.remove('hidden');
                recommendationSearch.classList.add('hidden');
            }
        });
        // Input Interaction Script END
    </script>
</body>

</html>

            {{-- Dropdown Recommendation Location --}}
            {{-- <div class="relative mb-4 w-full sm:w-auto">

                <!-- Trigger Button (OPEN MODAL) -->
                <button id="openLocationModal"
                    class="flex items-center justify-between gap-3 text-sm font-medium text-gray-700 bg-white border border-gray-200 px-3 py-2 rounded-xl w-full sm:w-64">
                    <div class="flex items-center gap-2 truncate">
                        <span class="truncate">Siak Kota</span>
                    </div>

                    <i id="locationChevron"
                        class="fa-solid fa-chevron-down text-xs text-gray-400 transition-transform duration-300"></i>
                </button>

            </div> --}}

            <!-- Location Modal Overlay START -->
            {{-- <div id="locationModal"
                class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 transition-opacity duration-300">

                <div
                    class="absolute bottom-0 left-0 right-0 w-full
               max-h-[90vh] bg-white shadow-2xl flex flex-col
               rounded-t-2xl overflow-hidden
               lg:top-1/2 lg:left-1/2 lg:bottom-auto lg:right-auto
               lg:-translate-x-1/2 lg:-translate-y-1/2
               lg:w-full lg:max-w-xl lg:max-h-[85vh]
               lg:rounded-xl">
                    <!-- Header -->
                    <div
                        class="sticky top-0 bg-white border-b border-gray-200 px-4 py-4 flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-gray-900">Pilih Kota</h2>
                        <button id="closeLocationBtn" class="text-gray-500 hover:text-gray-700 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Content -->
                    <div id="locationList" class="divide-y divide-gray-100 flex-1 min-h-0 overflow-y-auto">

                        <!-- Item -->
                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Siak Kota">
                            <span>Siak Kota</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Bunga Raya">
                            <span>Bunga Raya</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Dayun">
                            <span>Dayun</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Kandis">
                            <span>Kandis</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Kerinci Kanan">
                            <span>Kerinci Kanan</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Koto Gasib">
                            <span>Koto Gasib</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Lubuk Dalam">
                            <span>Lubuk Dalam</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Mempura">
                            <span>Mempura</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Minas">
                            <span>Minas</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Pusako">
                            <span>Pusako</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Sabak Auh">
                            <span>Sabak Auh</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Sungai Apit">
                            <span>Sungai Apit</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Sungai Mandau">
                            <span>Sungai Mandau</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>

                        <button type="button"
                            class="location-item w-full flex items-center justify-between px-6 py-3 text-left hover:bg-gray-50 transition"
                            data-city="Tualang">
                            <span>Tualang</span>
                            <span
                                class="check-icon hidden w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-check"></i>
                            </span>
                        </button>


                    </div>


                </div>
            </div> --}}
            <!-- Location Modal Overlay END -->

            {{-- script for modal location --}}
            {{-- <script>
                /* ========= LOCATION MODAL ========= */
                const openLocationModal = document.getElementById('openLocationModal');
                const closeLocationBtn = document.getElementById('closeLocationBtn');
                const locationModal = document.getElementById('locationModal');
                const locationChevron = document.getElementById('locationChevron');

                openLocationModal.addEventListener('click', () => {
                    locationModal.classList.remove('hidden');
                    setTimeout(() => {
                        locationModal.classList.add('opacity-100');
                        locationChevron.classList.add('rotate-180');
                    }, 10);
                });

                function closeLocationModal() {
                    locationModal.classList.add('hidden');
                    locationChevron.classList.remove('rotate-180');
                }

                closeLocationBtn.addEventListener('click', closeLocationModal);

                locationModal.addEventListener('click', (e) => {
                    if (e.target === locationModal) {
                        closeLocationModal();
                    }
                });
            </script> --}}
            {{-- Script for location list animation --}}
            {{-- <script>
                const locationItems = document.querySelectorAll('.location-item');
                const locationLabel = document.querySelector('#openLocationModal span'); // teks di tombol dropdown

                function setActiveLocation(item) {
                    // Reset semua item
                    locationItems.forEach(el => {
                        el.classList.remove('bg-blue-50', 'font-semibold');
                        el.querySelector('.check-icon').classList.add('hidden');
                    });

                    // Aktifkan yang dipilih
                    item.classList.add('bg-blue-50', 'font-semibold');
                    item.querySelector('.check-icon').classList.remove('hidden');

                    // Update teks tombol dropdown
                    const city = item.dataset.city;
                    locationLabel.textContent = city;
                }

                // Klik manual
                locationItems.forEach(item => {
                    item.addEventListener('click', () => {
                        setActiveLocation(item);
                        closeLocationModal();
                    });
                });

                // ⭐ Default: aktifkan lokasi pertama saat halaman load
                window.addEventListener('DOMContentLoaded', () => {
                    if (locationItems.length > 0) {
                        setActiveLocation(locationItems[0]);
                    }
                });
            </script> --}}
