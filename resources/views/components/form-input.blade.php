@props([
    'type' => 'text',
    'name',
])

@php
    $hasError = $errors->has($name);
@endphp

@if (isset($icon))
    <label {{ $attributes->merge([
        'class' => 'input w-full' . ($hasError ? ' input-error' : '')
    ]) }}>
        {{ $icon }}

        <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        {{ $attributes->merge([
            'class' => 'w-full',
        ]) }} />
    </label>
@else
    <input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    {{ $attributes->merge([
        'class' => 'input w-full' . ($hasError ? ' input-error' : '')
    ]) }} />
@endif
