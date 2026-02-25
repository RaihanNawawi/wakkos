    <nav class="max-w-4xl mx-auto sticky top-0 z-50 bg-base pt-3 pb-2">
        <div class="flex items-center gap-3 px-4 md:justify-between justify-center">
            <!-- Logo (Hidden on Mobile) -->
            <div class="hidden md:flex items-center">
                <a href="/homepage">
                    <span class="text-2xl font-bold text-blue-600">WakKos</span>
                </a>
            </div>

            <!-- Search Pill -->
            <button onclick="openSearch()"
                class="flex-1 flex items-center gap-2 rounded-full border border-gray-200 bg-white py-3 px-4 shadow-sm active:scale-[0.99] transition sm:ml-0.5 md:mx-6 md:my-2">

                <!-- Search Icon -->
                <i class="fa-solid fa-magnifying-glass text-gray-500"></i>

                <!-- Placeholder Text -->
                <span class="text-sm font-medium text-gray-800 truncate">
                    Cari kos di Dayun, Siak
                </span>
            </button>

            <!-- Hamburger Menu Button START -->
            <button id="hamburgerBtn"
                class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors duration-200 ml-1">
                <i class="fas fa-bars text-gray-700 text-base"></i>
            </button>
            <!-- Hamburger Menu Button END -->

        </div>
    </nav>

    <!-- SEARCH LAYER UI + Script START -->
    <div id="search-layer" class="fixed inset-0 z-50 hidden" aria-modal="true" role="dialog">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-white"></div>
        <!-- Panel -->
        <div class="relative mx-auto max-w-3xl px-3">
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
                            class="relative flex-1 flex items-center border border-gray-300 rounded-full px-2 focus-within:ring-2 focus-within:ring-gray-300">
                            <input id="search-input" type="text" placeholder="Cari kos di Dayun, Siak"
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
                        <button class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-xl text-gray-500"></i>
                            </div>

                            <a href="/resultpage" class="flex-1">
                                <p class="text-sm font-medium text-gray-800">
                                    Kampung Dalam
                                </p>
                                <p class="text-xs text-gray-500">
                                    Siak, Riau
                                </p>
                            </a>
                        </button>

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
                                    <span class="px-2 py-0.5 rounded-md border border-gray-200 text-gray-600">
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
                                <span class="text-xs px-2 py-0.5 rounded-md border border-gray-200 text-gray-600">
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
    <!-- SEARCH LAYER UI + Script END -->

    {{-- Hamburger Menu UI + backdrop UI + Script START --}}
    <!-- Menu Overlay (Backdrop) START -->
    <div id="menuOverlay" class="hidden fixed inset-0 bg-black/30 z-50 transition-opacity duration-300"
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
        let menuDrawer;
        let menuOverlay;

        function closeMenu() {
            if (!menuDrawer || !menuOverlay) return;

            menuDrawer.classList.add('translate-x-full');
            menuOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        function initHamburgerMenu() {
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            menuDrawer = document.getElementById('menuDrawer');
            menuOverlay = document.getElementById('menuOverlay');

            if (!hamburgerBtn || !menuDrawer || !menuOverlay) return;
            if (hamburgerBtn.dataset.initialized) return;

            hamburgerBtn.dataset.initialized = "true";

            hamburgerBtn.addEventListener('click', () => {
                menuDrawer.classList.remove('hidden');
                menuDrawer.classList.remove('translate-x-full');
                menuOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });

            document.querySelectorAll('#menuDrawer a').forEach(link => {
                link.addEventListener('click', closeMenu);
            });
        }

        document.addEventListener("DOMContentLoaded", initHamburgerMenu);
        document.addEventListener("livewire:navigated", initHamburgerMenu);
    </script>

    {{-- Hamburger Menu UI + backdrop UI + Script END --}}

    <!-- Search bar + Hamburger Menu (Mobile) END -->
    <div class="block md:hidden border-b border-gray-100"></div>
