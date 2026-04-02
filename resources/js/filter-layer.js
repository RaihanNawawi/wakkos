// 
document.addEventListener("click", function (e) {

    // OPEN
    const openBtn = e.target.closest("[data-overlay-target]");
    if (openBtn) {
        const name = openBtn.getAttribute("data-overlay-target");
        const overlay = document.querySelector(`[data-overlay="${name}"]`);
        overlay?.classList.remove("hidden");
    }

    // CLOSE BUTTON
    if (e.target.closest("[data-overlay-close]")) {
        e.target.closest("[data-overlay]").classList.add("hidden");
    }

    // CLICK BACKGROUND
    const overlay = e.target.closest("[data-overlay]");
    if (overlay && e.target === overlay) {
        overlay.classList.add("hidden");
    }

});