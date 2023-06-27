@props(['value'])

<label class="label">
    <span class="label-text">
        {{ $value ?? $slot }}
    </span>
</label>

