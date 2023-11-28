@props(['name', 'label'])
<div class="form-group">
    <label for="{{ $name ?? '' }}">{{ $label ?? 'Select' }}</label>
    <select class="form-control" id="{{ $name ?? '' }}" name="{{ $name ?? '' }}">
        {{ $slot }}
    </select>
</div>
