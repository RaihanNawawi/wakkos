/* =============================== GLOBAL STATE =============================== */

let galleryItems = [];
let currentIndex = 0;

let lightboxEl;
let imgEl;
let counterEl;

let startX = 0;
let deltaX = 0;
let isDragging = false;
let isAnimating = false;

/* =============================== GLOBAL FUNCTIONS =============================== */

function openLightbox(index) {
    if (!galleryItems.length) return;

    currentIndex = index;
    renderLightbox();
    lightboxEl.classList.remove("hidden");
    document.body.style.overflow = "hidden";
}

function closeLightbox() {
    if (!lightboxEl) return;

    lightboxEl.classList.add("hidden");
    document.body.style.overflow = "";
}

function prevImg() {
    currentIndex =
        (currentIndex - 1 + galleryItems.length) % galleryItems.length;
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
    imgEl.style.transition = "none";
    imgEl.style.transform = "translateX(0)";
    isAnimating = false;
}

/* =============================== INITIALIZER =============================== */

function initGallery() {
    galleryItems = Array.from(document.querySelectorAll(".gallery-item"));
    lightboxEl = document.getElementById("lightbox");
    imgEl = document.getElementById("lightboxImg");
    counterEl = document.getElementById("counter");
    document.getElementById("closeBtn")?.addEventListener("click", closeLightbox);
    document.getElementById("prevBtn")?.addEventListener("click", prevImg);
    document.getElementById("nextBtn")?.addEventListener("click", nextImg);

    if (!galleryItems.length || !lightboxEl || !imgEl) return;
    if (lightboxEl.dataset.initialized) return;

    lightboxEl.dataset.initialized = "true";

    /* CLICK GALLERY */
    galleryItems.forEach((img, i) => {
        img.addEventListener("click", () => openLightbox(i));
    });

    /* TOUCH START */
    imgEl.addEventListener(
        "touchstart",
        (e) => {
            if (isAnimating) return;

            startX = e.touches[0].clientX;
            deltaX = 0;
            isDragging = true;
            imgEl.style.transition = "none";
        },
        {
            passive: true,
        },
    );

    /* TOUCH MOVE */
    imgEl.addEventListener(
        "touchmove",
        (e) => {
            if (!isDragging || isAnimating) return;

            const currentX = e.touches[0].clientX;
            deltaX = currentX - startX;
            imgEl.style.transform = `translateX(${deltaX}px)`;
        },
        {
            passive: true,
        },
    );

    /* TOUCH END */
    imgEl.addEventListener("touchend", () => {
        if (!isDragging || isAnimating) return;

        isDragging = false;
        const threshold = 80;
        imgEl.style.transition = "transform 0.3s ease-out";

        if (deltaX > threshold) {
            isAnimating = true;
            imgEl.style.transform = "translateX(100%)";
            setTimeout(() => {
                prevImg();
                resetImagePosition();
            }, 300);
        } else if (deltaX < -threshold) {
            isAnimating = true;
            imgEl.style.transform = "translateX(-100%)";
            setTimeout(() => {
                nextImg();
                resetImagePosition();
            }, 300);
        } else {
            imgEl.style.transform = "translateX(0)";
        }
    });

    /* KEYBOARD SUPPORT */
    document.addEventListener("keydown", (e) => {
        if (lightboxEl.classList.contains("hidden")) return;
        if (isAnimating) return;

        if (e.key === "Escape") closeLightbox();
        if (e.key === "ArrowLeft") prevImg();
        if (e.key === "ArrowRight") nextImg();
    });
}

/* =============================== GLOBAL VARIABLES =============================== */
window.openLightbox = openLightbox;
window.closeLightbox = closeLightbox;
window.prevImg = prevImg;
window.nextImg = nextImg;

/* =============================== LIFECYCLE HOOKS =============================== */

document.addEventListener("DOMContentLoaded", initGallery);
document.addEventListener("livewire:navigated", initGallery);
