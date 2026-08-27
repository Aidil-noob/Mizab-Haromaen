@props(['error' => false])

<input {{ $attributes->merge([
    'class' => 'input', 'aria-invalid' => $error ? 'true' : 'false'
]) }}/>
