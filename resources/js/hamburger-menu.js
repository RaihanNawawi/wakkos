let menuDrawer;
let menuOverlay;

function closeMenu() {
    if (!menuDrawer || !menuOverlay) return;

    menuDrawer.classList.add('translate-x-full');

    // delay supaya animasi selesai dulu
    setTimeout(() => {
        menuDrawer.classList.add('hidden');
    }, 300);

    menuOverlay.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function initHamburgerMenu() {
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const closeMenuBtn = document.getElementById('closeMenuBtn');

    menuDrawer = document.getElementById('menuDrawer');
    menuOverlay = document.getElementById('menuOverlay');

    if (!hamburgerBtn || !menuDrawer || !menuOverlay) return;
    if (hamburgerBtn.dataset.initialized) return;

    hamburgerBtn.dataset.initialized = "true";

    // OPEN MENU
    hamburgerBtn.addEventListener('click', () => {
        menuDrawer.classList.remove('hidden');

        // delay kecil biar transition jalan smooth
        requestAnimationFrame(() => {
            menuDrawer.classList.remove('translate-x-full');
        });

        menuOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    });

    // CLOSE BUTTON
    if (closeMenuBtn) {
        closeMenuBtn.addEventListener('click', closeMenu);
    }

    // OVERLAY CLICK
    menuOverlay.addEventListener('click', closeMenu);

    // LINK CLICK
    document.querySelectorAll('#menuDrawer a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });
}

// expose ke global (optional, kalau masih mau inline)
window.closeMenu = closeMenu;

document.addEventListener("DOMContentLoaded", initHamburgerMenu);
document.addEventListener("livewire:navigated", initHamburgerMenu);