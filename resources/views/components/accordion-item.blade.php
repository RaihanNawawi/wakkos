            <div class="accordion-item border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="accordion-trigger w-full px-5 py-3 flex items-center justify-between hover:bg-gray-50 focus:outline-none"
                    onclick="toggleAccordion(this)">

                    <span class="text-left font-semibold text-primary">
                        {{ $title }}
                    </span>

                    <i class="accordion-chevron fa-solid fa-chevron-down text-secondary"></i>
                </button>
                <div class="accordion-content">
                    <div class="px-6 py-4 border-t border-gray-100 bg-gray-50 text-secondary leading-relaxed">
                        {{ $slot }}
                    </div>
                </div>
            </div>