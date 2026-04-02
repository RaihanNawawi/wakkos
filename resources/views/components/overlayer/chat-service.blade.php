                <x-overlayer.modal name="chat-service" title="Pilih Layanan">
                            <!-- Sewa Kos Section START -->
                            <div class="border border-gray-200 rounded-xl overflow-hidden">
                                <button onclick="handleChat('rent')"
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
                                <button onclick="handleChat('ask')"
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
                    <!-- Modal Content END -->
                </x-overlayer.modal>
                <!-- Filters Modal Overlay END -->
