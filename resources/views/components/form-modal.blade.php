@props(['route', 'method'])
<form action="{{ $route ?? '' }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ $method ?? '' }}
    <div class="modal-body">
        {{ $slot ?? '' }}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>