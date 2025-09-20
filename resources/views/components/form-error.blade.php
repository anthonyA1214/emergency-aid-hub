@props([
    'name' => null,
])

@error($name)
    <p class="text-start text-xs text-error input-error-message">
        {{ $message }}
    </p>
@enderror