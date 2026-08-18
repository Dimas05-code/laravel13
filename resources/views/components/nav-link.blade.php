@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
    // $classes = $current ? 'bg-yellow-950.50 text-white' : 'text-grey-300 hover:bg-white/5 hover:text-red';

    if ($current) {
        $classes = 'bg-yellow-950/50 text-white';
        $ariaCurrent = 'page';
    } else {
        $classes = 'text-grey-300 hover:bg-white/5 hover:text-white';
    }
@endphp

<!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes, 'aria-current' => $ariaCurrent]) }}>{{ $slot }}
</a>
