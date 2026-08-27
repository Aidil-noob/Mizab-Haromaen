@props(['message'])

<div {{ $attributes->merge(['class' => 'field__error flex gap-2 items-center']) }}>
    <x-lucide-octagon-alert class="size-4 {{ $message ? 'inline' : 'hidden' }}"/> {{ $message }}
</div>