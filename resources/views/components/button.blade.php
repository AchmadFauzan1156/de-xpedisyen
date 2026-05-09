{{-- Reusable Button Component --}}
{{-- Props: $type (default: 'button'), $variant (default: 'primary') --}}
@props([
    'type' => 'button',
    'variant' => 'primary',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full font-semibold text-sm transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 active:scale-95 cursor-pointer';

    $variants = [
        'primary' => 'bg-brand-orange text-white hover:bg-orange-600 hover:shadow-lg hover:shadow-orange-200 focus:ring-brand-orange',
        'outline' => 'border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white focus:ring-brand-navy',
        'ghost'   => 'text-brand-navy hover:bg-brand-navy/10 focus:ring-brand-navy',
        'white'   => 'bg-white text-brand-navy hover:bg-gray-100 focus:ring-white',
    ];

    $classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
