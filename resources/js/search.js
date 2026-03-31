    // Search Layer Script START
    window.openSearch = function() {
        const layer = document.getElementById('search-layer');
        const input = document.getElementById('search-input');
        layer.classList.remove('hidden');

        setTimeout(() => {
            input.focus();
        }, 50);
    }

    window.closeSearch = function() {
        const layer = document.getElementById('search-layer');
        layer.classList.add('hidden');
    }
    // Search Layer Script END
    // Input Interaction Script START
    const searchInput = document.getElementById('search-input');
    const recentSearch = document.getElementById('recent-search');
    const recommendationSearch = document.getElementById('recommendation-search');

    window.searchInput = searchInput;
    window.recentSearch = recentSearch;
    window.recommendationSearch = recommendationSearch;

    searchInput.addEventListener('input', () => {
        const hasValue = searchInput.value.trim().length > 0;

        if (hasValue) {
            recentSearch.classList.add('hidden');
            recommendationSearch.classList.remove('hidden');
        } else {
            recentSearch.classList.remove('hidden');
            recommendationSearch.classList.add('hidden');
        }
    });
    // Input Interaction Script END