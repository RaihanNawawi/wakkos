const filtersBtn = document.getElementById("filtersBtn");
const closeFiltersBtn = document.getElementById("closeFiltersBtn");
const filtersModal = document.getElementById("filtersModal");
const applyFiltersBtn = document.getElementById("applyFiltersBtn");
const clearFiltersBtn = document.getElementById("clearFiltersBtn");

// Open filters modal
filtersBtn.addEventListener("click", () => {
    filtersModal.classList.remove("hidden");
    setTimeout(() => {
        filtersModal.classList.add("opacity-100");
    }, 10);
});

// Close filters modal
function closeModal() {
    filtersModal.classList.add("hidden");
}

closeFiltersBtn.addEventListener("click", closeModal);

// Close modal when clicking on overlay
filtersModal.addEventListener("click", (e) => {
    if (e.target === filtersModal) {
        closeModal();
    }
});

// Apply filters
applyFiltersBtn.addEventListener("click", () => {
    console.log("[v0] Filters applied");
    closeModal();
});

// Clear filters
clearFiltersBtn.addEventListener("click", () => {
    document
        .querySelectorAll('input[type="number"], input[type="checkbox"]')
        .forEach((input) => {
            if (input.type === "number") input.value = "";
            if (input.type === "checkbox") input.checked = false;
        });
    console.log("[v0] Filters cleared");
});
