@props([
    'active' => false,
    'href' => '#',
    'icon' => null, // Outline icon
    'iconActive' => null, // Solid icon
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'flex flex-1 items-center justify-start gap-x-2 text-lg px-6 py-3 rounded-lg' . 
($active ? ' bg-red-500 text-white' : ' opacity-50 hover:opacity-100')]) }}>
    @if ($icon)
        <x-dynamic-component :component="$active && $iconActive ? $iconActive : $icon" class="w-[1.2em] h-[1.2em]" />
    @endif

    <span>
        {{ $slot }}
    </span>
</a>