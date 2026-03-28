@extends('layouts.app')
@section('content')
    <!-- Hero Section (Quick Fit Check) START -->
    <x-wrapper>
        <!-- Photo Gallery -->
        <div class="mb-8 relative">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 aspect-[4/3] lg:aspect-auto lg:h-[420px]">
                <!-- Gambar Besar -->
                <div class="lg:col-span-2 h-full overflow-hidden rounded-xl sm:rounded-md">
                    <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/8gvZd7FJ-540x720.jpg"
                        class="gallery-item w-full h-full object-cover" />
                </div>

                <!-- Gambar Kanan -->
                <div class="hidden lg:flex flex-col gap-4 h-full">
                    <div class="flex-1 overflow-hidden rounded-xl">
                        <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/W65xQbM5-540x720.jpg"
                            class="gallery-item w-full h-full object-cover" />
                    </div>

                    <div class="flex-1 overflow-hidden rounded-xl">
                        <img src="https://media.suara.com/pictures/653x366/2015/04/15/o_19iuqsd5o12et2tb1qr716f51vp8k.jpg"
                            class="gallery-item w-full h-full object-cover" />
                    </div>
                </div>

            </div>

            <button onclick="openGallery()"
                class="absolute bottom-4 right-4 z-10 flex items-center gap-2 rounded-lg bg-white/90 px-4 py-2 text-sm font-semibold text-primary shadow hover:bg-white">
                <i class="text-secondary fa-regular fa-images"></i>
                Lihat semua foto
            </button>
        </div>

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
                        alt="Foto utama kos" class="gallery-item w-full h-[260px] object-cover" />
                </div>
                <div class="grid grid-cols-2 md:grid-cols-2 gap-2 -mx-4">
                    <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/8gvZd7FJ-540x720.jpg"
                        class="gallery-item w-full h-40 object-cover" />
                    <img src="https://static.mamikos.com/uploads/cache/data/style/2025-11-29/W65xQbM5-540x720.jpg"
                        class="gallery-item w-full h-40 object-cover" />
                    <img src="https://media.suara.com/pictures/653x366/2015/04/15/o_19iuqsd5o12et2tb1qr716f51vp8k.jpg"
                        class="gallery-item w-full h-40 object-cover" />
                    <img src="https://images.squarespace-cdn.com/content/v1/5e72c8bfe21ad940ba788673/1626985470666-LVUUK5JZ5LE0O893756Z/what-is-airbnb-thumbnail.jpg"
                        alt="Foto utama kos" class="gallery-item w-full h-40 object-cover" />
                </div>
                <div class="mt-2 -mx-4">
                    <img src="https://a0.muscache.com/im/pictures/81dca5d6-5a86-49bc-8eca-4a8610a07d27.jpg"
                        alt="Foto utama kos" class="gallery-item w-full h-[260px] object-cover" />
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

        {{-- Overlay Lihat Foto Fullsreen START --}}
        <div id="lightbox" class="fixed inset-0 z-50 hidden bg-black">
            <div class="relative mx-auto h-full flex flex-col sm:px-4 sm:py-6 sm:max-w-3xl">
                <!-- Header -->
                <div class="absolute top-0 inset-x-0 h-14 flex items-center px-4 text-white z-10">
                    <div class="absolute left-4 text-md md:text-lg font-semibold">Semua Foto</div>
                    <div id="counter" class="absolute left-1/2 -translate-x-1/2 text-md">1 / 1</div>
                    <button onclick="closeLightbox()" class="absolute right-4 text-3xl">&times;</button>
                </div>
                <!-- Image -->
                <div class="flex-1 min-h-0 flex items-center justify-center sm:px-12 lg:px-24">
                    <img id="lightboxImg" class="max-h-full max-w-full object-contain" />
                </div>

                <!-- Nav -->
                <button onclick="prevImg()"
                    class="hidden sm:flex absolute left-10 top-1/2 -translate-y-1/2 h-12 w-12 items-center justify-center rounded-full bg-white text-black shadow-lghover:bg-gray-100 transition focus:outline-none"
                    aria-label="Previous image">
                    <span class="text-3xl leading-none block">‹</span>
                </button>

                <button onclick="nextImg()"
                    class="hidden sm:flex absolute right-10 top-1/2 -translate-y-1/2 h-12 w-12 items-center justify-center rounded-full bg-white text-black shadow-lg hover:bg-gray-100 transition focus:outline-none"
                    aria-label="Next image">
                    <span class="text-3xl leading-none block">›</span>
                </button>

            </div>
        </div>
        <script>
            /* ===============================
                                               GLOBAL STATE =============================== */

            let galleryItems = [];
            let currentIndex = 0;

            let lightboxEl;
            let imgEl;
            let counterEl;

            let startX = 0;
            let deltaX = 0;
            let isDragging = false;
            let isAnimating = false;


            /* ===============================
               GLOBAL FUNCTIONS
            =============================== */

            function openLightbox(index) {
                if (!galleryItems.length) return;

                currentIndex = index;
                renderLightbox();
                lightboxEl.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                if (!lightboxEl) return;

                lightboxEl.classList.add('hidden');
                document.body.style.overflow = '';
            }

            function prevImg() {
                currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
                renderLightbox();
            }

            function nextImg() {
                currentIndex = (currentIndex + 1) % galleryItems.length;
                renderLightbox();
            }

            function renderLightbox() {
                imgEl.src = galleryItems[currentIndex].src;
                counterEl.textContent = `${currentIndex + 1} / ${galleryItems.length}`;
            }

            function resetImagePosition() {
                imgEl.style.transition = 'none';
                imgEl.style.transform = 'translateX(0)';
                isAnimating = false;
            }


            /* ===============================
               INITIALIZER
            =============================== */

            function initGallery() {

                galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
                lightboxEl = document.getElementById('lightbox');
                imgEl = document.getElementById('lightboxImg');
                counterEl = document.getElementById('counter');

                if (!galleryItems.length || !lightboxEl || !imgEl) return;
                if (lightboxEl.dataset.initialized) return;

                lightboxEl.dataset.initialized = "true";

                /* CLICK GALLERY */
                galleryItems.forEach((img, i) => {
                    img.addEventListener('click', () => openLightbox(i));
                });

                /* TOUCH START */
                imgEl.addEventListener('touchstart', (e) => {
                    if (isAnimating) return;

                    startX = e.touches[0].clientX;
                    deltaX = 0;
                    isDragging = true;
                    imgEl.style.transition = 'none';
                }, {
                    passive: true
                });

                /* TOUCH MOVE */
                imgEl.addEventListener('touchmove', (e) => {
                    if (!isDragging || isAnimating) return;

                    const currentX = e.touches[0].clientX;
                    deltaX = currentX - startX;
                    imgEl.style.transform = `translateX(${deltaX}px)`;
                }, {
                    passive: true
                });

                /* TOUCH END */
                imgEl.addEventListener('touchend', () => {
                    if (!isDragging || isAnimating) return;

                    isDragging = false;
                    const threshold = 80;
                    imgEl.style.transition = 'transform 0.3s ease-out';

                    if (deltaX > threshold) {
                        isAnimating = true;
                        imgEl.style.transform = 'translateX(100%)';
                        setTimeout(() => {
                            prevImg();
                            resetImagePosition();
                        }, 300);
                    } else if (deltaX < -threshold) {
                        isAnimating = true;
                        imgEl.style.transform = 'translateX(-100%)';
                        setTimeout(() => {
                            nextImg();
                            resetImagePosition();
                        }, 300);
                    } else {
                        imgEl.style.transform = 'translateX(0)';
                    }
                });

                /* KEYBOARD SUPPORT */
                document.addEventListener('keydown', (e) => {
                    if (lightboxEl.classList.contains('hidden')) return;
                    if (isAnimating) return;

                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowLeft') prevImg();
                    if (e.key === 'ArrowRight') nextImg();
                });
            }


            /* ===============================
               LIFECYCLE HOOKS
            =============================== */

            document.addEventListener("DOMContentLoaded", initGallery);
            document.addEventListener("livewire:navigated", initGallery);
        </script>

        {{-- Overlay Lihat Foto Fullsreen END --}}


        <!-- Main Hero Content -->
        <div class="grid grid-cols-1 lg:grid-cols-[2fr_1.2fr] gap-10 items-start">
            <!-- Left: Identity & Kos Information -->
            {{-- Identity & Kos Information: Header START --}}
            <div>
                <!-- Property Title Section START -->
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-primary mb-3">Kos Putri Melati</h1>
                    <!-- Property info row: type, location, share button -->
                    <!-- Property info row -->
                    <div class="flex flex-wrap items-center gap-3 mb-6 pb-4 border-b border-gray-200">

                        <!-- LEFT GROUP -->
                        <div class="flex flex-wrap items-center gap-3">
                            <span
                                class="inline-flex items-center gap-1.5 text-sm font-medium bg-white text-secondary px-2.5 py-1 rounded-lg border border-gray-300">
                                <i class="text-secondary fa-solid fa-venus text-xs"></i>
                                Kos Putri
                            </span>

                            <span class="text-secondary">·</span>

                            <span class="flex items-center gap-2 text-md text-secondary">
                                <i class="text-secondary fa-solid fa-location-dot text-secondary text-md shrink-0"></i>
                                <span>Kecamatan Siak</span>
                            </span>
                        </div>



                    </div>


                    <!-- Ketersediaan Kamar START -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <i class="text-secondary fa-solid fa-door-open text-secondary text-lg shrink-0"></i>
                            <span class="text-secondary">
                                Tersisa <span class="text-red-600 font-semibold">3 kamar</span>
                            </span>
                        </div>
                        <div class="ml-auto relative inline-block">
                            <button id="shareBtn"
                                class="border border-gray-200 rounded-xl open-share-btn inline-flex items-center gap-2 bg-white px-3 py-2 text-sm font-medium text-primary">
                                <i class="text-secondary fa-solid fa-arrow-up-from-bracket text-secondary text-sm"></i>
                                <span class="hidden md:inline text-secondary">Share</span>
                            </button>
                            <script>
                                document.getElementById('shareBtn').addEventListener('click', async () => {
                                    if (navigator.share) {
                                        try {
                                            await navigator.share({
                                                title: document.title,
                                                text: 'Lihat kost ini:',
                                                url: window.location.href
                                            });
                                        } catch (err) {
                                            // user cancel → aman, tidak perlu alert
                                            console.log('Share cancelled', err);
                                        }
                                    } else {
                                        // fallback minimal
                                        alert('Fitur share tidak didukung di browser ini.');
                                    }
                                });
                            </script>

                        </div>
                    </div>
                    <!-- Ketersediaan Kamar END -->
                </div>
                <!-- Property Title Section END -->
                <!-- Host Information START -->
                <div class="bg-white mb-4">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-purple-500 rounded-full flex items-center justify-center text-white text-xl font-bold">
                            AK</div>
                        <div>
                            <h3 class="text-lg font-semibold text-primary">Anas Karim</h3>
                            <p class="text-sm text-secondary">Pemilik Kos</p>
                        </div>
                    </div>
                </div>
                <div class="border-b border-gray-200 mt-4"></div>
                {{-- Identity & Kos Information: Header END --}}
                <!-- Facilities -->
                <div class="pt-8">
                    <h3 class="text-xl font-semibold text-primary mb-6 flex items-center gap-2">
                        Fasilitas Tersedia
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-wifi  text-lg"></i>
                            </div>
                            <span class="text-secondary">WiFi 50 Mbps</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-snowflake text-lg"></i>
                            </div>
                            <span class="text-secondary">Air Conditioner</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-bed text-lg"></i>
                            </div>
                            <span class="text-secondary">Kasur + Lemari + Meja Belajar</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-bolt text-lg"></i>
                            </div>
                            <span class="text-secondary">Listrik Termasuk (Batas 100 kWh)</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-video text-lg"></i>
                            </div>
                            <span class="text-secondary">CCTV 24 Jam</span>
                        </div>

                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-kitchen-set text-lg"></i>
                            </div>
                            <span class="text-secondary">Dapur Bersama</span>
                        </div>
                    </div>

                </div>
                <div class="border-b border-gray-200 mt-4"></div>
                <!-- Rules -->
                <div class="pt-8">
                    <h3 class="text-xl font-semibold text-primary mb-6 flex items-center gap-2">
                        Peraturan Kos
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-clock text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Jam Malam 23.00 WIB</p>
                                <p class="text-sm text-secondary">Pintu utama dikunci setelah jam malam</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-user text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Khusus Putri</p>
                                <p class="text-sm text-secondary">Tidak diperbolehkan tamu laki-laki masuk kamar</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-ban-smoking text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Dilarang Merokok</p>
                                <p class="text-sm text-secondary">Merokok hanya di area yang telah ditentukan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-file-invoice text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Bayar Tepat Waktu</p>
                                <p class="text-sm text-secondary">Maksimal tanggal 5 setiap bulan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 mb-4">
                            <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                <i class="text-secondary fa-solid fa-calendar-check text-lg"></i>
                            </div>
                            <div>
                                <p class="font-medium text-primary">Kontrak Minimal 3 Bulan</p>
                                <p class="text-sm text-secondary">Deposit 1 bulan dikembalikan saat keluar</p>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="border-b border-gray-200 mt-4"></div>

                <!-- Lokasi dan Tempat Sekitar START -->
                <div class="pt-8 mb-2">
                    <h2 class="text-xl font-semibold text-primary mb-6 flex items-center gap-2">Lokasi & Tempat
                        Sekitar</h2>
                    <!-- Map Container -->
                    <!-- Map Container -->
                    <div class="mb-4 rounded-lg overflow-hidden border border-gray-200">
                        <div class="relative w-full h-80 bg-gray-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4172380707555!2d102.03371127363738!3d0.8124215630703692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d421a7fc63720b%3A0xba41cf64f316149e!2sHomestay%20Tok%20Jenggot%20Syariah!5e0!3m2!1sid!2sid!4v1768355777142!5m2!1sid!2sid"
                                class="w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>


                    <!-- Location Details -->
                    <!-- Location Details -->
                    <div class="space-y-4 pt-2">

                        <!-- Nav Tabs -->
                        <!-- Nav Tabs (Compact + Horizontal Scroll) -->
                        <div class="overflow-x-auto hide-scrollbar">
                            <div class="flex gap-2 w-max">

                                <button onclick="switchTab(event,'kampus')"
                                    class="tab-btn px-3 py-1.5 text-sm border rounded-full whitespace-nowrap
               transition-all duration-200
               bg-white border-gray-900 text-primary">
                                    Kampus / Sekolah
                                </button>

                                <button onclick="switchTab(event,'ibadah')"
                                    class="tab-btn px-3 py-1.5 text-sm border rounded-full whitespace-nowrap
               transition-all duration-200
               bg-gray-50 border-gray-300 text-secondary">
                                    Tempat Ibadah
                                </button>

                                <button onclick="switchTab(event,'fasilitas')"
                                    class="tab-btn px-3 py-1.5 text-sm border rounded-full whitespace-nowrap
               transition-all duration-200
               bg-gray-50 border-gray-300 text-secondary">
                                    Fasilitas Umum
                                </button>

                            </div>

                        </div>

                        <!-- TAB CONTENT -->
                        <div class="pt-4">
                            <!-- Kampus -->
                            <div id="kampus" class="tab-content space-y-3">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                        <i class="text-secondary fa-solid fa-location-dot text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-primary">Universitas Negeri</p>
                                        <p class="text-sm text-secondary">1.2 Km</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Tempat Ibadah -->
                            <div id="ibadah" class="tab-content space-y-3 hidden">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                        <i class="text-secondary fa-solid fa-location-dot text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-primary">Masjid Al Fath</p>
                                        <p class="text-sm text-secondary">0,5 Km</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Fasilitas Umum -->
                            <div id="fasilitas" class="tab-content space-y-3 hidden">
                                <div class="flex items-start gap-3">
                                    <div class="w-10 h-10 flex items-center justify-center flex-shrink-0">
                                        <i class="text-secondary fa-solid fa-location-dot text-lg"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium text-primary">Indomaret</p>
                                        <p class="text-sm text-secondary">300 m</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <script>
                        function switchTab(event, tabId) {

                            document.querySelectorAll(".tab-content").forEach(el => {
                                el.classList.add("hidden");
                            });

                            document.querySelectorAll(".tab-btn").forEach(btn => {
                                btn.classList.remove("bg-white", "border-gray-900", "text-primary");
                                btn.classList.add("bg-gray-50", "border-gray-300", "text-secondary");
                            });

                            document.getElementById(tabId).classList.remove("hidden");

                            const activeBtn = event.currentTarget;
                            activeBtn.classList.remove("bg-gray-50", "border-gray-300", "text-secondary");
                            activeBtn.classList.add("bg-white", "border-gray-900", "text-primary");
                        }
                    </script>
                </div>
                <!-- Lokasi dan Tempat Sekitar END -->

                <div class="border-b border-gray-200 mt-4"></div>
                <!-- Description Section START -->
                <div class="pt-8 mb-2">
                    <h2 class="text-xl font-semibold text-primary mb-4">Tentang Kos ini</h2>
                    <p class="text-secondary leading-relaxed mb-4">
                        Welcome to our modern studio apartment located in the heart of downtown Jakarta. This
                        beautifully designed space combines comfort and style, perfect for both short-term and
                        long-term stays.
                    </p>
                </div>
                <!-- Description Section END -->

            </div>

            <!-- Right: Price & Main CTA (Floating Layer) Desktop START -->
            <div class="hidden lg:block bg-gray-30 rounded-2xl p-6 border border-gray-200 shadow-lg sticky top-24 z-40">

                <div class="flex flex-col gap-4">
                    <!-- Price -->
                    <div>
                        <p class="text-sm text-secondary mb-1">Mulai dari</p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-2xl font-bold text-primary">
                                Rp 1.500.000
                            </span>
                            <span class="text-sm text-secondary">/bulan</span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="pt-4 border-t border-gray-200">
                        <!-- Microcopy -->
                        <p class="text-xs text-thirdary mb-3 text-center">
                            Tanya kos atau ajukan sewa
                        </p>

                        <!-- CTA Button -->
                        <a wire:navigate
                            href="https://wa.me/6281995421795?text=Halo%20WakKos%2C%0A%0ASaya%20tertarik%20dengan%20kos%20ini.%0ABoleh%20dibantu%20untuk%20info%20ketersediaan%2C%20harga%2C%20dan%20fasilitasnya%3F%0A%0ATerima%20kasih."
                            target="_blank"
                            class="w-full flex items-center justify-center gap-2 py-3 rounded-xl btn-primary text-white font-semibold transition shadow-md">
                            <i class="fa-brands fa-whatsapp text-green-400 text-lg"></i>
                            Chat WakKos
                        </a>
                    </div>
                </div>

            </div>

            <!-- Right: Price & Main CTA (Floating Layer) Desktop END -->
            <!-- Right: Price & Main CTA (Floating Layer) Mobile START -->
            <div
                class="bg-white
           fixed inset-x-0 bottom-0 z-40 lg:hidden
           border-t border-gray-200
           shadow-[0_-8px_24px_rgba(0,0,0,0.12)]">
                <div class="grid grid-cols-2 gap-3 p-4 items-center">
                    <!-- Price -->
                    <div>
                        <p class="text-[11px] text-secondary leading-none mb-1">
                            Mulai dari
                        </p>
                        <div class="flex items-baseline gap-1">
                            <span class="text-sm font-bold text-primary">
                                Rp 1.500.000
                            </span>
                            <span class="text-xs text-secondary">
                                /bulan
                            </span>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a wire:navigate
                        href="https://wa.me/6281995421795?text=Halo%20WakKos%2C%0A%0ASaya%20tertarik%20dengan%20kos%20ini.%0ABoleh%20dibantu%20untuk%20info%20ketersediaan%2C%20harga%2C%20dan%20fasilitasnya%3F%0A%0ATerima%20kasih."
                        target="_blank"
                        class="w-full
                   flex items-center justify-center gap-2
                   py-3 rounded-xl
                   bg-blue-600
                   text-white font-semibold text-sm
                   hover:bg-blue-700
                   transition
                   shadow-md
                   whitespace-nowrap">

                        <i class="fa-brands fa-whatsapp  text-green-400 text-base"></i>
                        Chat WakKos
                    </a>
                </div>
            </div>

            <!-- Right: Price & Main CTA (Floating Layer) Mobile END -->
        </div>
    </x-wrapper>
    <!-- Hero Section (Quick Fit Check) END -->

    <script>
        const closeModalBtn = document.getElementById('closeModalBtn');
        const modalOverlay = document.getElementById('modalOverlay');

        closeModalBtn.addEventListener('click', () => {
            modalOverlay.classList.add('hidden');
            modalOverlay.classList.remove('flex');
        });

        modalOverlay.addEventListener('click', (e) => {
            if (e.target === modalOverlay) {
                modalOverlay.classList.add('hidden');
                modalOverlay.classList.remove('flex');
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modalOverlay.classList.contains('hidden')) {
                modalOverlay.classList.add('hidden');
                modalOverlay.classList.remove('flex');
            }
        });
    </script>
@endsection
