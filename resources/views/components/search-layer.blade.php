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
                            <i class="fa-solid fa-arrow-left text-secondary text-xl"></i>
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
                        <p class="text-sm font-semibold mb-1.5 text-secondary">
                            Pencarian Terakhir
                        </p>
                        <!-- Location Item -->
                        <button class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-location-dot text-xl text-thirdary"></i>
                            </div>

                            <a href="/resultpage" class="flex-1">
                                <p class="text-sm font-semibold text-primary">
                                    Kampung Dalam
                                </p>
                                <p class="text-xs text-secondary mt-0.5">
                                    Siak, Riau
                                </p>
                            </a>
                        </button>

                        <a href="/detailpage"
                            class="w-full flex items-start gap-3 pt-2 pb-2 rounded-md hover:bg-gray-50 transition text-left">

                            <!-- Icon / Thumbnail -->
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-house text-xl text-thirdary"></i>
                            </div>


                            <!-- Konten Utama -->
                            <div class="flex-1 min-w-0">
                                <!-- Title -->
                                <p class="text-sm font-semibold text-primary leading-tight">
                                    Kos Putri Balai Kayang 2
                                </p>

                                <!-- Location -->
                                <p class="text-xs text-secondary mt-0.5">
                                    Kampung Dalam, Siak, Riau
                                </p>

                                <!-- ===== Mobile Meta (default) ===== -->
                                <div class="mt-1 flex items-center gap-2 text-xs md:hidden">
                                    <span class="px-2 py-0.5 rounded-md border border-gray-200 text-secondary">
                                        Putri
                                    </span>
                                    <span class="font-semibold text-primary">
                                        Rp700rb
                                    </span>
                                    <span class="text-thirdary">
                                        /bulan
                                    </span>
                                </div>
                            </div>

                            <!-- ===== Desktop Meta (md+) ===== -->
                            <div class="hidden md:flex flex-col items-end flex-shrink-0">
                                <span class="text-xs px-2 py-0.5 rounded-md border border-gray-200 text-secondary">
                                    Putri
                                </span>

                                <div class="text-right text-xs font-semibold text-primary">
                                    Rp700rb
                                    <span class="text-xs font-normal text-thirdary">
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
                                        <i class="fa-solid fa-location-dot text-xl text-thirdary"></i>
                                    </div>

                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-primary">
                                            Kampung Dalam
                                        </p>
                                        <p class="text-xs text-secondary">
                                            Siak, Riau
                                        </p>
                                    </div>
                                </button>

                                <button
                                    class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                                    <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-location-dot text-xl text-thirdary"></i>
                                    </div>

                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-primary">
                                            Kampung Rempak
                                        </p>
                                        <p class="text-xs text-secondary">
                                            Siak, Riau
                                        </p>
                                    </div>
                                </button>

                                <button
                                    class="w-full flex gap-3 pt-2 rounded-md pb-2 hover:bg-gray-50 transition text-left">
                                    <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                        <i class="fa-solid fa-location-dot text-xl text-thirdary"></i>
                                    </div>

                                    <div class="flex-1">
                                        <p class="text-sm font-semibold text-primary">
                                            Suak Lanjut
                                        </p>
                                        <p class="text-xs text-secondary">
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
                                <p class="mb-2 text-sm font-semibold text-secondary">
                                    Rekomendasi Kos
                                </p>

                                <div class="space-y-2">

                                    <!-- Kos Item -->
                                    <a href="/detailpage"
                                        class="w-full flex items-start gap-3 pt-2 pb-2 rounded-md hover:bg-gray-50 transition text-left">

                                        <!-- Icon / Thumbnail -->
                                        <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                            <i class="fa-solid fa-house text-thirdary text-xl"></i>
                                        </div>

                                        <!-- Konten Utama -->
                                        <div class="flex-1 min-w-0">

                                            <!-- Title -->
                                            <p class="text-sm font-semibold text-primary leading-tight">
                                                Kos Putri Balai Kayang 2
                                            </p>

                                            <!-- Location -->
                                            <p class="text-xs text-secondary mt-0.5">
                                                Kampung Dalam, Siak, Riau
                                            </p>

                                            <!-- ===== Mobile Meta (default) ===== -->
                                            <div class="mt-1 flex items-center gap-2 text-xs md:hidden">
                                                <span
                                                    class="px-2 py-0.5 rounded-md border border-gray-200 text-secondary">
                                                    Putri
                                                </span>
                                                <span class="font-semibold text-primary">
                                                    Rp700rb
                                            </span>
                                                <span class="text-thirdary">
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

                                            <div class="text-right text-xs font-semibold text-primary">
                                                Rp700rb
                                                <span class="text-xs font-normal text-thirdary">
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
                <div class="border-t px-3 sm:px-4 mt-1.5 text-xs text-thirdary">
                    <span>Klik Hasil untuk mencari</span>
                </div>
            </div>
        </div>
    </div>