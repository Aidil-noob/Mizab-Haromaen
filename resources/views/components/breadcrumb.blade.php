<nav aria-label="breadcrumb">
    <ol {{ $attributes->merge(['class' => 'breadcrumb font-bold text-lg md:text-2xl lg:text-3xl xl:text-4xl']) }}>
        {{ $slot }}
    </ol>
</nav>