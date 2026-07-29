<button {{ $attributes->merge(['type' => 'button', 'class' => 'button button--ghost button--neutral']) }}>
    {{ $slot }}
</button>
