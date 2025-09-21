@props([
    'type' => 'text',
    'name' => null,
    'id' => null,
    'placeholder' => '',
    'value' => null,
])

@php
    $hasError = $errors->has($name);
@endphp

@if (isset($icon))

    {{-- With icon: wrap in label --}}
    <label {{ $attributes->merge([
        'class' => 'input w-full' . ($hasError ? ' input-error' : '')
    ]) 
    }}>
        {{ $icon }}

        <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        placeholder="{{ $placeholder }}" 
        value="{{ $value }}" 
        {{ $attributes->merge([
            'class' => 'w-full',
        ]) 
        }} />

    </label>

@else

    {{-- Without icon: plain input --}}
    <input 
    type="{{ $type }}" 
    name="{{ $name }}" 
    id="{{ $id }}" 
    placeholder="{{ $placeholder }}" 
    value="{{ $value }}" 
    {{ $attributes->merge([
        'class' => 'input w-full' . ($hasError ? ' input-error' : '')
    ]) 
    }} />

@endif
