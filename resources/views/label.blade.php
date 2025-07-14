<label {{ $attributes->merge([]) }}>
    {{ $value ?? $slot }}{{ $required ?? "*" }}
</label>
