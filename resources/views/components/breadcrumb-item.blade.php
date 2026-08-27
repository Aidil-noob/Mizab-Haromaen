@props(['href' => '#', 'label'])

<li {{ $attributes->merge(['class' => 'breadcrumb__item', 'aria-current' => 'false']) }}>
    <a href="{{ $href }}">{{ $label }}</a>
</li>