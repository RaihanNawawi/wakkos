        <!-- Filters Modal Overlay START -->
        <div id="filtersModal"
            class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-end lg:items-center justify-center">
            <!-- Modal Content -->
            <div
                class="w-full max-h-[90vh] bg-white shadow-2xl flex flex-col rounded-t-3xl overflow-hidden lg:max-w-xl lg:max-h-[85vh] lg:rounded-xl">
                <!-- Modal Header START -->
                <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-primary">Pilih Layanan</h2>
                    <button id="closeFiltersBtn" class="text-secondary">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>
                <!-- Modal Header END -->

                <!-- Modal Content START -->
                <div class="px-4 py-4 space-y-4 overflow-y-auto flex-1 min-h-0">

                    <!-- Sewa Kos Section START -->
                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <button
                            class="w-full px-5 py-4 flex items-center justify-between hover:bg-gray-50 active:scale-[0.98] transition">

                            <div class="flex items-center gap-4">
                                <i class="fa-solid fa-key text-primary text-lg"></i>

                                <div class="flex flex-col text-left">
                                    <span class="text-sm font-semibold text-primary">
                                        Sewa Kos
                                    </span>
                                    <span class="text-xs text-secondary mt-1">
                                        Langsung sewa kos via whatsapp
                                    </span>
                                </div>
                            </div>

                            <i class="fas fa-chevron-right text-secondary text-sm"></i>
                        </button>
                    </div>

                    <div class="border border-gray-200 rounded-xl overflow-hidden">
                        <button
                            class="w-full px-5 py-4 flex items-center justify-between hover:bg-gray-50 active:scale-[0.98] transition">

                            <div class="flex items-center gap-4">
                                <i class="fa-solid fa-question text-primary text-lg"></i>

                                <div class="flex flex-col text-left">
                                    <span class="text-sm font-semibold text-primary">
                                        Mau nanya-nanya dulu?
                                    </span>
                                    <span class="text-xs text-secondary mt-1">
                                        Tanyakan apa saja seputar kos ini, kami siap membantu!
                                    </span>
                                </div>
                            </div>

                            <i class="fas fa-chevron-right text-secondary text-sm"></i>
                        </button>
                    </div>

                </div>
                <!-- Modal Content END -->


            </div>
        </div>
        <!-- Filters Modal Overlay END -->
