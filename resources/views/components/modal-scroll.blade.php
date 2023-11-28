@props(['id', 'title', 'size'])
<div class="modal fade" id="{{ $id ?? 'modal' }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="{{ $id ?? 'modal' }}Label" aria-hidden="true">
    <div class="modal-dialog {{ $size ?? '' }} ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id ?? 'modal' }}Label">{{ $title ?? 'Modal title' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ $slot ?? '' }}
        </div>
    </div>
</div>
