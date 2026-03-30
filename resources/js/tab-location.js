class TabSwitcher {
    constructor(container) {
        this.container = container;
        this.buttons = container.querySelectorAll("[data-tab-btn]");
        this.contents = container.querySelectorAll("[data-tab-content]");

        this.init();
    }

    init() {
        this.buttons.forEach(btn => {
            btn.addEventListener("click", () => {
                const tabId = btn.dataset.tabBtn;
                this.switchTab(tabId, btn);
            });
        });
    }

    switchTab(tabId, activeBtn) {
        // Hide all content
        this.contents.forEach(el => el.classList.add("hidden"));

        // Reset all buttons
        this.buttons.forEach(btn => {
            btn.classList.remove("bg-white", "border-gray-900", "text-primary");
            btn.classList.add("bg-gray-50", "border-gray-300", "text-secondary");
        });

        // Show selected content
        const activeContent = this.container.querySelector(`[data-tab-content="${tabId}"]`);
        if (activeContent) activeContent.classList.remove("hidden");

        // Activate button
        activeBtn.classList.remove("bg-gray-50", "border-gray-300", "text-secondary");
        activeBtn.classList.add("bg-white", "border-gray-900", "text-primary");
    }
}

// Auto init (support multiple components)
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("[data-tab-container]").forEach(container => {
        new TabSwitcher(container);
    });
});