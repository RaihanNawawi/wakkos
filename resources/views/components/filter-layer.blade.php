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
                    <h2 class="text-lg font-semibold text-primary">Filter Pencarianmu</h2>
                    <button id="closeFiltersBtn" class="text-secondary">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>
                <!-- Modal Header END -->

                <!-- Modal Content START -->
                <div class="px-6 py-4 space-y-6 overflow-y-auto flex-1 min-h-0">

                    <!-- Housing Type Section START -->
                    <div>
                        <h3 class="text-primary font-bold text-lg mb-4">Tipe Kos</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="housingType" value="men"
                                    class="w-5 h-5 accent-[color:var(--color-brand)]">
                                <span class="text-secondary font-medium">Khusus Putra</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="housingType" value="women"
                                    class="w-5 h-5 accent-[color:var(--color-brand)]">
                                <span class="text-secondary font-medium">Khusus Putri</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="housingType" value="mix"
                                    class="w-5 h-5 accent-[color:var(--color-brand)]">
                                <span class="text-secondary font-medium">Campur</span>
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
                                <label class="block text-sm font-medium text-secondary mb-2">Minimal</label>
                                <input type="text" inputmode="numeric" placeholder="Rp250.000"
                                    class="price-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[color:var(--color-brand)] focus:ring-1 focus:ring-[color:var(--color-brand)] outline-none transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-secondary mb-2">Maksimal</label>
                                <input type="text" inputmode="numeric" placeholder="Rp1.000.000"
                                    class="price-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:border-[color:var(--color-brand)] focus:ring-1 focus:ring-[color:var(--color-brand)] outline-none transition">
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
                                <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                <span class="text-secondary">AC / Pendingin Ruangan</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                <span class="text-secondary">WiFi / Internet</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                <span class="text-secondary">Kasur dan Seprai</span>
                            </label>

                            <!-- Hidden items -->
                            <div class="space-y-3 hidden" id="facility-more">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                    <span class="text-secondary">Kamar Mandi Pribadi</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                    <span class="text-secondary">Lemari / Tempat Penyimpanan</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                    <span class="text-secondary">TV</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                    <span class="text-secondary">Dapur</span>
                                </label>
                            </div>
                        </div>

                        <!-- Toggle Button -->
                        <button type="button" onclick="toggleMore('facility-more', this)"
                            class="mt-4 flex items-center gap-2 text-sm font-semibold text-secondary underline">
                            <span>Tampilkan lainnya</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
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
                                <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                <span class="text-secondary">Tidak ada Tamu Menginap</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                <span class="text-secondary">Tidak Boleh Merokok</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                <span class="text-secondary">Tidak Boleh Bising</span>
                            </label>

                            <!-- Hidden -->
                            <div class="space-y-3 hidden" id="rules-more">
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                    <span class="text-secondary">Jam Malam Berlaku</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer">
                                    <input type="checkbox" class="w-5 h-5 accent-[color:var(--color-brand)] rounded">
                                    <span class="text-secondary">Dilarang Membawa Hewan Peliharaan</span>
                                </label>
                            </div>
                        </div>

                        <!-- Toggle Button -->
                        <button type="button" onclick="toggleMore('rules-more', this)"
                            class="mt-4 flex items-center gap-2 text-sm font-semibold text-secondary underline">
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
                                    class="w-5 h-5 accent-[color:var(--color-brand)]">
                                <span class="text-secondary font-medium">Kamar Kos Tersedia</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="sortBy" value="cheapest"
                                    class="w-5 h-5 accent-[color:var(--color-brand)]">
                                <span class="text-secondary font-medium">Harga Terendah</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="radio" name="sortBy" value="expensive"
                                    class="w-5 h-5 accent-[color:var(--color-brand)]">
                                <span class="text-secondary font-medium">Harga Tertinggi</span>
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
                        class="text-sm sm:text-base font-semibold text-secondary
           hover:underline transition">
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