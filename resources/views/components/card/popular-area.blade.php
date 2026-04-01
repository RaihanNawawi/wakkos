                <!-- Popular Area Card -->
                <a wire:navigate href="#"
                    class="flex items-center gap-4 px-5 py-3 border rounded-xl hover:shadow-md hover:border-blue-500 transition">

                    <!-- Icon Lokasi -->
                    <div
                        class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <i class="fa-solid fa-location-dot text-lg"></i>
                    </div>

                    <!-- Text Info -->
                    <div class="flex flex-col">
                        <span class="font-semibold text-gray-800">{{ $location }}</span>
                        <span class="text-sm text-secondary">{{ $count }} kos tersedia</span>
                    </div>

                </a>
