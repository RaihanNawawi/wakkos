    <nav class="wrapper bg-primary sticky top-0 z-50 bg-base pt-3 pb-2">
        <div class="flex items-center gap-3 px-4 md:justify-between justify-center">
            <!-- Logo (Hidden on Mobile) -->
            <div class="hidden md:flex items-center">
                <a href="/homepage">
                    <span class="text-2xl font-bold text-brand">WakKos</span>
                </a>
            </div>

            <!-- Search Pill -->
                        <button onclick="openSearch()"
                class="flex-1 flex items-center gap-2 rounded-full border border-gray-200 bg-white py-3 px-4 shadow-sm active:scale-[0.99] transition sm:ml-0.5 md:mx-6 md:my-2">

                <!-- Search Icon -->
                <i class="fa-solid fa-magnifying-glass text-secondary"></i>

                <!-- Placeholder Text -->
                <span class="text-sm font-medium text-secondary truncate">
                    Cari kos di Dayun, Siak
                </span>
            </button>

            <!-- Hamburger Menu Button START -->
            <button id="hamburgerBtn"
                class="btn-secondary flex items-center justify-center w-10 h-10 rounded-full transition-colors duration-200 ml-1">
                <i class="fas fa-bars text-secondary text-base"></i>
            </button>
        </div>
    </nav>
    <!-- Menu Overlay (Backdrop) START -->
    <div id="menuOverlay" class="hidden fixed inset-0 bg-black/30 z-50 transition-opacity duration-300"
        onclick="closeMenu()"></div>
    
    <!-- Hamburger Menu Drawer -->
    <div id="menuDrawer"
        class="hidden fixed top-0 right-0 h-screen w-80 bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
        <!-- Menu Header START -->
        <div class="flex items-center justify-between p-5 border-b border-gray-200">
            <h2 class="text-xl font-semibold text-primary">Menu</h2>
            <button id="closeMenuBtn"
                class="flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 transition-colors duration-200"
                onclick="closeMenu()">
                <i class="fas fa-times text-secondary"></i>
            </button>
        </div>
        <!-- Menu Header END -->

        <!-- Menu Items Container -->
        <div class="flex flex-col divide-y divide-gray-200 text-sm">

            <!-- CTA Daftarkan Kos -->
            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20WakKos%20%F0%9F%91%8B%0A%0ASaya%20ingin%20mendaftarkan%20kos%20saya%20di%20WakKos.%20Mohon%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih%20%F0%9F%98%8A"
                target="_blank"
                class="px-6 py-4 font-semibold text-primary hover:bg-gray-50 transition flex items-center gap-3">
                <i class="fab fa-whatsapp text-green-500 text-lg"></i>
                Daftarkan Kos
            </a>

            <!-- Cari Kos -->
            <a href="/homepage"
                class="px-6 py-4 text-primary hover:bg-gray-50 transition flex items-center justify-between w-full">
                <span>Cari Kos</span>
                <i class="fas fa-chevron-right text-secondary text-xs"></i>
            </a>

            <!-- Pusat Bantuan -->
            <a href="#"
                class="px-6 py-4 text-primary hover:bg-gray-50 transition flex items-center justify-between">
                <span>Pusat Bantuan</span>
                <i class="fas fa-chevron-right text-secondary text-xs"></i>
            </a>

        </div>
        <div class="border-t border-gray-200 mt-auto">
        </div>

    </div>

    <div class="block md:hidden border-b border-gray-100"></div>
