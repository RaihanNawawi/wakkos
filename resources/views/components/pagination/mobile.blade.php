            {{-- Mobile Pagination Start --}}
            <ul class="flex sm:hidden items-center justify-center gap-8 mt-4">

                <!-- Prev -->
                <li>
                    <a wire:navigate href="?page=1"
                        class="w-12 h-12 flex items-center justify-center rounded-full
                  bg-white
                  shadow-[0_6px_16px_rgba(0,0,0,0.15)]">


                        <i class="fa-solid fa-chevron-left text-sm text-secondary"></i>
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
                        <i class="fa-solid fa-chevron-right text-sm text-secondary"></i>
                    </a>
                </li>

            </ul>
            {{-- Mobile Pagination End --}}