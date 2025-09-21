<button {{ $attributes->merge(['class' => 'btn w-full text-red-500 rounded-xl border border-red-500 hover:border-red-600 hover:bg-red-600 hover:text-white']) }}>
    @isset($icon)
        {{ $icon }}
    @endisset
    <span>
        {{ $slot }}
    </span>
</button>