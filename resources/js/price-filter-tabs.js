            document.addEventListener("DOMContentLoaded", function() {
                const tabs = document.querySelectorAll("#priceTabs .tab-btn");

                tabs.forEach(tab => {
                    tab.addEventListener("click", function() {

                        // reset semua tab
                        tabs.forEach(btn => {
                            btn.classList.remove("btn-primary", "text-white");
                            btn.classList.add("text-secondary", "hover:bg-gray-200");
                        });

                        // set active
                        this.classList.remove("text-secondary", "hover:bg-gray-200");
                        this.classList.add("btn-primary", "text-white");
                    });
                });
            });