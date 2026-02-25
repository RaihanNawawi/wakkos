<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <x-navbar />

    {{ $slot }}

    <x-footer />

    @livewireScripts
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .accordion-content.active {
        max-height: 500px;
    }

    .accordion-chevron {
        transition: transform 0.3s ease-in-out;
    }

    .accordion-item.active .accordion-chevron {
        transform: rotate(180deg);
    }
</style>
<script>
    function toggleAccordion(button) {
        const item = button.closest('.accordion-item');
        const content = item.querySelector('.accordion-content');
        const isActive = item.classList.contains('active');

        // Close all other items
        document.querySelectorAll('.accordion-item.active').forEach(activeItem => {
            if (activeItem !== item) {
                activeItem.classList.remove('active');
                activeItem.querySelector('.accordion-content').classList.remove('active');
            }
        });

        // Toggle current item
        item.classList.toggle('active');
        content.classList.toggle('active');
    }
</script>
<script>
    // Search Layer Script START
    function openSearch() {
        const layer = document.getElementById('search-layer');
        const input = document.getElementById('search-input');

        layer.classList.remove('hidden');

        setTimeout(() => {
            input.focus();
        }, 50);
    }

    function closeSearch() {
        const layer = document.getElementById('search-layer');
        layer.classList.add('hidden');
    }
    // Search Layer Script END
    // Input Interaction Script START
    const searchInput = document.getElementById('search-input');
    const recentSearch = document.getElementById('recent-search');
    const recommendationSearch = document.getElementById('recommendation-search');

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
</script>
{{-- Accordion Section END --}}

</html>
