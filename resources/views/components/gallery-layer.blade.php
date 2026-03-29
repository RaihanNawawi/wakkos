{{-- Overlay Lihat Semua Foto START --}}
<div id="galleryModal" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black" onclick="closeGallery()"></div>

    <!-- Content -->
    <div class="relative mx-auto max-w-3xl h-full overflow-y-auto px-4 py-6 hide-scrollbar">

        <!-- Header -->
        <div class="mb-6 flex items-center justify-between text-white">
            <h2 class="text-lg font-semibold">Semua Foto</h2>
            <button onclick="closeGallery()" class="text-3xl">&times;</button>
        </div>

        <!-- Gallery Grid -->
        <div class="mb-2 -mx-4">
            <img src="https://a0.muscache.com/im/pictures/81dca5d6-5a86-49bc-8eca-4a8610a07d27.jpg"
                class="gallery-item w-full h-[260px] object-cover" />
        </div>

        <div class="grid grid-cols-2 md:grid-cols-2 gap-2 -mx-4">
            <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/8gvZd7FJ-540x720.jpg"
                class="gallery-item w-full h-40 object-cover" />
            <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/W65xQbM5-540x720.jpg"
                class="gallery-item w-full h-40 object-cover" />
            <img src="https://media.suara.com/pictures/653x366/2015/04/15/o_19iuqsd5o12et2tb1qr716f51vp8k.jpg"
                class="gallery-item w-full h-40 object-cover" />
            <img src="https://images.squarespace-cdn.com/content/v1/5e72c8bfe21ad940ba788673/1626985470666-LVUUK5JZ5LE0O893756Z/what-is-airbnb-thumbnail.jpg"
                class="gallery-item w-full h-40 object-cover" />
        </div>

        <div class="mt-2 -mx-4">
            <img src="https://a0.muscache.com/im/pictures/81dca5d6-5a86-49bc-8eca-4a8610a07d27.jpg"
                class="gallery-item w-full h-[260px] object-cover" />
        </div>
    </div>
</div>
        <script>
            /* ===============================
                                       GLOBAL STATE =============================== */

            let galleryModalEl;


            /* ===============================
               GLOBAL FUNCTIONS
            =============================== */

            function openGallery() {
                if (!galleryModalEl) return;

                galleryModalEl.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeGallery() {
                if (!galleryModalEl) return;

                galleryModalEl.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }


            /* ===============================
               INITIALIZER
            =============================== */

            function initViewAllGallery() {
                galleryModalEl = document.getElementById('galleryModal');

                if (!galleryModalEl) return;

                // optional anti-double init
                if (galleryModalEl.dataset.initialized) return;
                galleryModalEl.dataset.initialized = "true";

                // jika ingin tambahkan ESC support
                document.addEventListener('keydown', (e) => {
                    if (galleryModalEl.classList.contains('hidden')) return;
                    if (e.key === 'Escape') closeGallery();
                });
            }


            /* ===============================
               LIFECYCLE HOOKS
            =============================== */

            document.addEventListener("DOMContentLoaded", initViewAllGallery);
            document.addEventListener("livewire:navigated", initViewAllGallery);
        </script>
{{-- Overlay Lihat Semua Foto END --}}