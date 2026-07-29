@props(['active'])

<a {{ $attributes->merge(['class' => 'navbar__button']) }} @if ($active ?? false) data-state="active"> @endif>
    {{ $slot }}
</a>
