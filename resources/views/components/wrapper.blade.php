@props([
    'variant' => 'section',
])

@php

    $class = match ($variant) {
        default => 'wrapper py-5 px-4 mt-2',
    };

@endphp
<section {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</section>
