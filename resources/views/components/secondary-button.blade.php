<button {{ $attributes->merge(['type' => 'reset', 'class' => 'button button--neutral']) }}>
    {{ $slot }}
</button>
