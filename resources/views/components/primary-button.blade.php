<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button button--primary button--lg']) }}>
    {{ $slot }}
</button>
