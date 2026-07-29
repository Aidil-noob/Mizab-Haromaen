@props(['active'])

<a {{ $attributes->merge(['class' => 'navbar__button w-full block']) }} @if ($active ?? false) data-state="active"> @endif>
    {{ $slot }}
</a>