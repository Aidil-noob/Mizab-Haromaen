@props(['value'])

<label {{ $attributes->merge(['class' => 'field__label']) }}>
    {{ $value ?? $slot }}
</label>
