            {{-- Desktop Pagination Start --}}
            <ul class="hidden sm:flex items-center gap-3 text-sm font-medium text-secondary">

                <!-- Prev -->
                <li>
                    <a wire:navigate href="?page=1" aria-label="Halaman sebelumnya"
                        class="flex items-center justify-center mr-3">

                        <i class="fa-solid fa-chevron-left text-black"></i>
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
                <li class="px-2">…</li>

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
                        class="flex items-center justify-center ml-3">

                        <i class="fa-solid fa-chevron-right text-black"></i>
                    </a>
                </li>

            </ul>
            {{-- Desktop Pagination End --}}