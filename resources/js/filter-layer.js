const filtersBtn = document.getElementById("filtersBtn");
const closeFiltersBtn = document.getElementById("closeFiltersBtn");
const filtersModal = document.getElementById("filtersModal");
const applyFiltersBtn = document.getElementById("applyFiltersBtn");
const clearFiltersBtn = document.getElementById("clearFiltersBtn");

// ❗ GUARD GLOBAL
if (!filtersBtn || !filtersModal) {
    // element tidak ada di halaman → hentikan script
} else {

    filtersBtn.addEventListener("click", () => {
        filtersModal.classList.remove("hidden");
        setTimeout(() => {
            filtersModal.classList.add("opacity-100");
        }, 10);
    });

    function closeModal() {
        filtersModal.classList.add("hidden");
    }

    closeFiltersBtn?.addEventListener("click", closeModal);

    filtersModal.addEventListener("click", (e) => {
        if (e.target === filtersModal) {
            closeModal();
        }
    });

    applyFiltersBtn?.addEventListener("click", () => {
        console.log("[v0] Filters applied");
        closeModal();
    });

    clearFiltersBtn?.addEventListener("click", () => {
        document
            .querySelectorAll('input[type="number"], input[type="checkbox"]')
            .forEach((input) => {
                if (input.type === "number") input.value = "";
                if (input.type === "checkbox") input.checked = false;
            });
        console.log("[v0] Filters cleared");
    });
}