        <div id="lightbox" class="fixed inset-0 z-50 hidden bg-black">
            <div class="relative mx-auto h-full flex flex-col sm:px-4 sm:py-6 sm:max-w-3xl">
                <!-- Header -->
                <div class="absolute top-0 inset-x-0 h-14 flex items-center px-4 text-white z-10">
                    <div class="absolute left-4 text-md md:text-lg font-semibold">Semua Foto</div>
                    <div id="counter" class="absolute left-1/2 -translate-x-1/2 text-md">1 / 1</div>
                    <button id="closeBtn" class="absolute right-4 text-3xl">&times;</button>
                </div>
                <!-- Image -->
                <div class="flex-1 min-h-0 flex items-center justify-center sm:px-12 lg:px-24">
                    <img id="lightboxImg" class="max-h-full max-w-full object-contain" />
                </div>

                <!-- Nav -->
                <button id="prevBtn" class="hidden sm:flex absolute left-10 top-1/2 -translate-y-1/2 h-12 w-12 items-center justify-center rounded-full bg-white text-black shadow-lghover:bg-gray-100 transition focus:outline-none"
                    aria-label="Previous image">
                    <span class="text-3xl leading-none block">‹</span>
                </button>

                <button id="nextBtn" class="hidden sm:flex absolute right-10 top-1/2 -translate-y-1/2 h-12 w-12 items-center justify-center rounded-full bg-white text-black shadow-lg hover:bg-gray-100 transition focus:outline-none"
                    aria-label="Next image">
                    <span class="text-3xl leading-none block">›</span>
                </button>

            </div>
        </div>