@props([
    'variant' => 'section',
])

@php

    $class = match ($variant) {
        'navbar' => 'wrapper sticky top-0 z-50 bg-base pt-3 pb-2',

        'footer' => 'wrapper mt-5 py-10 px-4',

        default => 'wrapper py-5 px-4 mt-2',
    };

@endphp
<section {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</section>
