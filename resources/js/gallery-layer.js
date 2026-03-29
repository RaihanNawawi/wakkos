let galleryModalEl = null;

/* ===============================
   INIT
================================ */

function initGallery() {
    galleryModalEl = document.getElementById('galleryModal');
}

/* ===============================
   ACTIONS
================================ */

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
   GLOBAL EVENT LISTENER (KEY)
================================ */

document.addEventListener('click', (e) => {
    // OPEN
    if (e.target.closest('[data-gallery-open]')) {
        initGallery();
        openGallery();
    }

    // CLOSE
    if (e.target.closest('[data-gallery-close]')) {
        initGallery();
        closeGallery();
    }
});

/* ===============================
   ESC SUPPORT
================================ */

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        initGallery();
        closeGallery();
    }
});