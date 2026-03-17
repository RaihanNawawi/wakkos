@props([
    'href' => '#',
    'variant' => 'default'
])

@php
$variantClasses = [
    'default' => '',
    'carousel-card' => 'carousel-card',
];
@endphp

<a wire:navigate href="{{ $href }}" {{ $attributes->merge(['class' => $variantClasses[$variant] ?? '']) }} >
    {{ $slot }}
</a>