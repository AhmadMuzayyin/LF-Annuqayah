@props(['route', 'method'])
<form action="{{ $route ?? '' }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{ $method ?? '' }}
    
    {{ $slot ?? '' }}
</form>
