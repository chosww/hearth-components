<label {{ $attributes->merge([]) }}>
    {{ $value ?? $slot }}{{ isset($required) && $required ? "*" : ""}}
</label>
