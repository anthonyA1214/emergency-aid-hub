@props([
    'active' => false,
    'href' => '#',
    'icon' => null, // Outline icon
    'iconActive' => null, // Solid icon
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex-1 flex items-center justify-center gap-x-2 text-lg py-3 border-b-2' . 
    ($active ? ' text-red-500 border-b-red-500' : ' opacity-50 hover:opacity-100 border-b-transparent')]) }}>
    @if ($icon)
        <x-dynamic-component :component="$active && $iconActive ? $iconActive : $icon" />
    @endif
    <span>
        {{ $slot }}
    </span> 
</a>