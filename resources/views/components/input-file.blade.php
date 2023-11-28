@props(['name', 'label'])
<div class="from-group custom-file">
    <input type="file" class="custom-file-input @error($name) is-invalid @enderror" id="{{ $name ?? 'name' }}" name="{{ $name ?? 'name' }}">
    <label class="custom-file-label" for="{{ $name ?? 'name' }}" {{ $attributes }}>{{ $label ?? 'Choose file' }}</label>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
