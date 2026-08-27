<button {{ $attributes->merge(['type' => 'reset', 'class' => 'button button--danger button--lg']) }}>
    {{ $slot }}
</button>
