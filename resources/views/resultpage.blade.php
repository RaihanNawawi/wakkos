<x-layouts.app>
    <!-- Listings Grid START -->
    <section class="py-4 max-w-4xl px-4 mx-auto mt-2">
        <!-- Listings Header -->
        <div class="mb-4 flex items-center justify-between">
            <p class="text-sm md:text-base font-semibold text-gray-900">
                10+ kos ditemukan
            </p>

            <button id="filtersBtn"
                class="flex items-center gap-2 rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-900 hover:shadow-sm transition">
                <i class="fa-solid fa-sliders text-sm"></i>
                Filter
            </button>
        </div>

        <!-- Filters Modal Overlay START -->
        <div id="filtersModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 transition-opacity duration-300">
            <!-- Modal Content -->
            <div
                class="absolute bottom-0 left-0 right-0 w-full
               max-h-[90vh] bg-white shadow-2xl flex flex-col
               rounded-t-2xl overflow-hidden
               lg:top-1/2 lg:left-1/2 lg:bottom-auto lg:right-auto
               lg:-translate-x-1/2 lg:-translate-y-1/2
               lg:w-full lg:max-w-xl lg:max-h-[85vh]
               lg:rounded-xl">

                <!-- Modal Header START -->
                <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-gray-900">Filter Pencarianmu</h2>
                    <button id="closeFiltersBtn" class="text-gray-500 hover:text-gray-700 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal Header END -->

                <!-- Modal Content START -->
                <div class="px-6 py-4 space-y-6 overflow-y-auto flex-1 min-h-0">

                    <!-- Housing Type Section START -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Tipe Kos</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="housingType" value="men" class="w-5 h-5 accent-blue-500">
                                <span class="text-gray-700 font-medium">Khusus Putra</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="housingType" value="women" class="w-5 h-5 accent-blue-500">
                                <span class="text-gray-700 font-medium">Khusus Putri</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="housingType" value="mix" class="w-5 h-5 accent-blue-500">
                                <span class="text-gray-700 font-medium">Campur</span>
                            </label>
                        </div>
                    </div>
                    <!-- Housing Type Section END -->

                    <div class="border-t border-gray-200"></div>

                    <!-- Price Range Section START -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Rentang Harga</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Minimal</label>
                                <input type="text" inputmode="numeric" placeholder="Rp250.000"
                                    class="price-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Maksimal</label>
                                <input type="text" inputmode="numeric" placeholder="Rp1.000.000"
                                    class="price-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition">
                            </div>
                        </div>
                    </div>
                    <script>
                        document.querySelectorAll('.price-input').forEach(input => {
                            input.addEventListener('input', () => {
                                // Ambil angka mentah (hapus semua selain digit)
                                const rawValue = input.value.replace(/\D/g, '');

                                // Simpan nilai mentah (untuk backend / filter)
                                input.dataset.value = rawValue;

                                // Jika kosong, kosongkan input
                                if (!rawValue) {
                                    input.value = '';
                                    return;
                                }

                                // Format ke Rupiah
                                const formatted = new Intl.NumberFormat('id-ID').format(rawValue);

                                input.value = `Rp${formatted}`;
                            });
                        });
                    </script>

                    <!-- Price Range Section END -->

                    <div class="border-t border-gray-200"></div>

                    <!-- Room Facilities Section START -->
                    <!-- Room Facilities Section START -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Fasilitas Kamar</h3>

                        <!-- List -->
                        <div class="space-y-3" id="facility-list">
                            <!-- Visible by default -->
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                <span class="text-gray-700">AC / Pendingin Ruangan</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                <span class="text-gray-700">WiFi / Internet</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                <span class="text-gray-700">Kasur dan Seprai</span>
                            </label>

                            <!-- Hidden items -->
                            <div class="space-y-3 hidden" id="facility-more">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                    <span class="text-gray-700">Kamar Mandi Pribadi</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                    <span class="text-gray-700">Lemari / Tempat Penyimpanan</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                    <span class="text-gray-700">TV</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                    <span class="text-gray-700">Dapur</span>
                                </label>
                            </div>
                        </div>

                        <!-- Toggle Button -->
                        <button type="button" onclick="toggleMore('facility-more', this)"
                            class="mt-4 flex items-center gap-2 text-sm font-semibold text-gray-800 underline">
                            <span>Tampilkan lainnya</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <!-- Room Facilities Section END -->

                    <!-- Room Facilities Section END -->

                    <!-- Housing Rules Section START -->
                    <div class="border-t border-gray-200 my-6"></div>

                    <!-- Housing Rules Section START -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Peraturan Hunian</h3>

                        <div class="space-y-3">
                            <!-- Visible -->
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                <span class="text-gray-700">Tidak ada Tamu Menginap</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                <span class="text-gray-700">Tidak Boleh Merokok</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                <span class="text-gray-700">Tidak Boleh Bising</span>
                            </label>

                            <!-- Hidden -->
                            <div class="space-y-3 hidden" id="rules-more">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                    <span class="text-gray-700">Jam Malam Berlaku</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-blue-500 rounded">
                                    <span class="text-gray-700">Dilarang Membawa Hewan Peliharaan</span>
                                </label>
                            </div>
                        </div>

                        <!-- Toggle Button -->
                        <button type="button" onclick="toggleMore('rules-more', this)"
                            class="mt-4 flex items-center gap-2 text-sm font-semibold text-gray-800 underline">
                            <span>Tampilkan lainnya</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                    <!-- Housing Rules Section END -->
                    <script>
                        function toggleMore(id, button) {
                            const content = document.getElementById(id)
                            const text = button.querySelector('span')
                            const icon = button.querySelector('svg')

                            content.classList.toggle('hidden')

                            const expanded = !content.classList.contains('hidden')
                            text.textContent = expanded ? 'Sembunyikan' : 'Tampilkan lainnya'
                            icon.classList.toggle('rotate-180', expanded)
                        }
                    </script>

                    <!-- Housing Rules Section END -->

                    <div class="border-t border-gray-200"></div>

                    <!-- Sort Options Section START -->
                    <div>
                        <h3 class="text-lg font-bold mb-4">Urutkan Hasil</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="sortBy" value="available"
                                    class="w-5 h-5 accent-blue-500">
                                <span class="text-gray-700 font-medium">Kamar Kos Tersedia</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="sortBy" value="cheapest"
                                    class="w-5 h-5 accent-blue-500">
                                <span class="text-gray-700 font-medium">Harga Terendah</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="sortBy" value="expensive"
                                    class="w-5 h-5 accent-blue-500">
                                <span class="text-gray-700 font-medium">Harga Tertinggi</span>
                            </label>
                        </div>
                    </div>
                    <!-- Sort Options Section END -->

                </div>
                <!-- Modal Content END -->

                <!-- Modal Footer START -->
                <div
                    class="sticky bottom-0 z-20
           bg-white
           border-t border-gray-200
           px-4 sm:px-6 py-3
           flex items-center gap-4
           shadow-[0_-8px_24px_rgba(0,0,0,0.12)]">
                    <!-- Clear all (Airbnb-style) -->
                    <button id="clearFiltersBtn"
                        class="text-sm sm:text-base font-semibold text-gray-600
           hover:underline active:text-gray-900 transition">
                        Hapus Semua
                    </button>


                    <!-- Spacer -->
                    <div class="flex-1"></div>

                    <!-- Apply button (Primary) -->
                    <button id="applyFiltersBtn"
                        class="px-5 py-3 btn-primary text-white rounded-lg text-md font-semibold active:scale-[0.98] transition">
                        Terapkan Filter (1)
                    </button>
                </div>
                <!-- Modal Footer END -->


            </div>
        </div>
        <!-- Filters Modal Overlay END -->

        <script>
            const filtersBtn = document.getElementById('filtersBtn');
            const closeFiltersBtn = document.getElementById('closeFiltersBtn');
            const filtersModal = document.getElementById('filtersModal');
            const applyFiltersBtn = document.getElementById('applyFiltersBtn');
            const clearFiltersBtn = document.getElementById('clearFiltersBtn');

            // Open filters modal
            filtersBtn.addEventListener('click', () => {
                filtersModal.classList.remove('hidden');
                setTimeout(() => {
                    filtersModal.classList.add('opacity-100');
                }, 10);
            });

            // Close filters modal
            function closeModal() {
                filtersModal.classList.add('hidden');
            }

            closeFiltersBtn.addEventListener('click', closeModal);

            // Close modal when clicking on overlay
            filtersModal.addEventListener('click', (e) => {
                if (e.target === filtersModal) {
                    closeModal();
                }
            });

            // Apply filters
            applyFiltersBtn.addEventListener('click', () => {
                console.log('[v0] Filters applied');
                closeModal();
            });

            // Clear filters
            clearFiltersBtn.addEventListener('click', () => {
                document.querySelectorAll('input[type="number"], input[type="checkbox"]').forEach(input => {
                    if (input.type === 'number') input.value = '';
                    if (input.type === 'checkbox') input.checked = false;
                });
                console.log('[v0] Filters cleared');
            });
        </script>


        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 lg:gap-6">

            <!-- Kos Putri -->
            <a wire:navigate href="/detailpage" class="group block rounded-lg focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putri Melati</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-venus text-xs"></i>
                            Putri
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
            <a wire:navigate href="/detailpage" class="group block rounded-xl focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2021/04/ventilation.jpeg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putra Siak</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-mars text-xs"></i>
                            Putra
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
            <a wire:navigate href="/detailpage" class="group block rounded-xl focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://cdn1-production-images-kly.akamaized.net/fLCXhB2CU-knEOxENiP3Ge2Ie8M=/1280x720/smart/filters:quality(75):strip_icc()/kly-media-production/medias/861628/original/073424800_1429960385-3.JPG"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Campur</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
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
            <!-- Kos Putri -->
            <a wire:navigate href="/detailpage" class="group block rounded-lg focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putri Melati</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-venus text-xs"></i>
                            Putri
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
            <a wire:navigate href="/detailpage" class="group block rounded-xl focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2021/04/ventilation.jpeg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putra Siak</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-mars text-xs"></i>
                            Putra
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
            <a wire:navigate href="/detailpage" class="group block rounded-xl focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://cdn1-production-images-kly.akamaized.net/fLCXhB2CU-knEOxENiP3Ge2Ie8M=/1280x720/smart/filters:quality(75):strip_icc()/kly-media-production/medias/861628/original/073424800_1429960385-3.JPG"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Campur</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
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
            <!-- Kos Putri -->
            <a wire:navigate href="/detailpage" class="group block rounded-lg focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://www.simplyhomy.com/wp-content/uploads/2017/01/bisnis-kos-kosan.jpg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putri Melati</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-venus text-xs"></i>
                            Putri
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
            <a wire:navigate href="/detailpage" class="group block rounded-xl focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://thesmartlocal.com/indonesia/wp-content/uploads/2021/04/ventilation.jpeg"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Putra Siak</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
                            <i class="fa-solid fa-mars text-xs"></i>
                            Putra
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
            <a wire:navigate href="/detailpage" class="group block rounded-xl focus:outline-none">
                {{-- Image --}}
                <div class="relative aspect-[4/3] rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://cdn1-production-images-kly.akamaized.net/fLCXhB2CU-knEOxENiP3Ge2Ie8M=/1280x720/smart/filters:quality(75):strip_icc()/kly-media-production/medias/861628/original/073424800_1429960385-3.JPG"
                        alt="Guesthouse"
                        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />

                    <span
                        class="absolute top-2 left-2 text-[11px] font-semibold bg-rose-500/90 text-white px-2 py-1 rounded-lg shadow">
                        Sisa 2 kamar
                    </span>
                </div>
                <!-- Content -->
                <div class="mt-3 space-y-1">
                    <div class="flex justify-between items-start gap-2 min-h-[28px] text-md font-semibold">
                        <span>Kos Campur</span>
                        <span
                            class="inline-flex items-center gap-1.5 text-xs font-medium bg-white text-gray-600 px-2.5 py-1 rounded-lg border border-gray-300">
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
        <!-- Pagination START -->
        <nav class="mt-12 mb-6 flex justify-center" aria-label="Pagination">
            {{-- Desktop Pagination Start --}}
            <ul class="hidden sm:flex items-center gap-3 text-sm font-medium text-gray-700">

                <!-- Prev -->
                <li>
                    <a wire:navigate href="?page=1" aria-label="Halaman sebelumnya"
                        class="flex items-center justify-center
                  w-11 h-11 rounded-full
                  bg-white
                  text-gray-500
                  shadow-sm
                  hover:bg-gray-100 hover:shadow-md
                  active:scale-95
                  transition-all duration-200">

                        <i class="fa-solid fa-chevron-left text-base"></i>
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
                <li class="px-2 text-gray-400">…</li>

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
                        class="flex items-center justify-center
                  w-11 h-11 rounded-full
                  bg-white
                  text-gray-600
                  shadow-sm
                  hover:bg-gray-100 hover:shadow-md
                  active:scale-95
                  transition-all duration-200">

                        <i class="fa-solid fa-chevron-right text-base"></i>
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


                        <i class="fa-solid fa-chevron-left text-sm text-gray-700"></i>
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


                        <i class="fa-solid fa-chevron-right text-sm text-gray-700"></i>
                    </a>
                </li>

            </ul>
            {{-- Mobile Pagination End --}}


        </nav>
        <!-- Pagination END -->

    </section>
</x-layouts.app>
