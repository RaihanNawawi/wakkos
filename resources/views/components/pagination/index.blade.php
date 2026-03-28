<nav class="mt-12 mb-6 flex justify-center" aria-label="Pagination">
    {{-- Desktop --}}
    <div class="hidden sm:block">
        @include('components.pagination.desktop')
    </div>

    {{-- Mobile --}}
    <div class="block sm:hidden">
        @include('components.pagination.mobile')
    </div>

</nav>