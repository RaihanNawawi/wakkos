        {{-- Filter Harga --}}
        <div id="priceTabs" class="flex border rounded-lg overflow-hidden mb-5">
            <!-- Active -->
            <button class="tab-btn flex-1 px-3 py-1.5 text-sm sm:text-md font-medium text-white btn-primary">
                &lt; 500k
            </button>

            <!-- Inactive -->
            <button
                class="tab-btn border-l border-gray-300 flex-1 px-3 py-1.5 text-sm sm:text-md font-medium text-secondary hover:bg-gray-200">
                500k – 1jt
            </button>

            <button
                class="tab-btn border-l border-gray-300 flex-1 px-3 py-1.5 sm:py-2.5 text-sm sm:text-md font-medium text-secondary hover:bg-gray-200">
                &gt; 1jt
            </button>
        </div>
        <script>
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
        </script>