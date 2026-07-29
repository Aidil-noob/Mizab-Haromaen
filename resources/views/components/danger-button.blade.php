<button {{ $attributes->merge(['type' => 'submit', 'class' => 'button bg-red-600 hover:bg-red-500 text-white active:bg-red-700']) }}>
    {{ $slot }}
</button>
