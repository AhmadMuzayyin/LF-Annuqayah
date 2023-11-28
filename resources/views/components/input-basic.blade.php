@props(['name', 'label', 'type', 'value'])
<div class="form-group">
    <label for="{{ $name ?? 'id' }}">{{ $label ?? 'Label' }}</label>
    <input type="{{ $type ?? 'text' }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name ?? 'id' }}"
        name="{{ $name ?? 'name' }}" value="{{ $value ?? old($name ?? '') }}" {{ $attributes }}>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
