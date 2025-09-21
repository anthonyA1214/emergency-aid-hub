<button {{ $attributes->merge(['class' => 'btn w-full bg-red-500 hover:bg-red-600 text-white rounded-xl']) }}>
    @isset($icon)
        {{ $icon }}
    @endisset
    <span>
        {{ $slot }}
    </span>
</button>