<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-profile']) }}>
    {{ $slot }}
</button>