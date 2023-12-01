@extends('layouts.app', ['title' => 'Data Kursus', 'path' => 'Kursus', 'bread' => 'Home/Index'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col mb-4">

            <!-- Data Kategori -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kursus</h6>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#createModal">Tambah</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! $html->table(['class' => 'table'], true) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modal-scroll id="createModal" title="Tambah Kursus" size="modal-lg">
        <x-form-modal route="{{ route('courses.store') }}">
            <x-input-select name="course_category_id">
                <option value="" selected disabled>Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->course_category }}</option>
                @endforeach
            </x-input-select>
            <x-input-basic name="title" label="Judul"></x-input-basic>
            <x-input-file name="thumbnail" label="Thumbnail"></x-input-file>
            <x-input-select name="type">
                <option value="" selected disabled>Pilih Jenis Kursus</option>
                <option value="Online" {{ (old('type') == 'Online' ? 'selected' : '') }}>Online</option>
                <option value="Offline" {{ (old('type') == 'Offline' ? 'selected' : '') }}>Offline</option>
            </x-input-select>
            <x-input-basic name="price" label="Harga" type="number"></x-input-basic>
            <div class="form-group">
                @trix(\app\Models\Course::class, 'content')
            </div>
        </x-form-modal>
    </x-modal-scroll>
@endsection
@push('scripts')
    {!! $html->scripts() !!}
    <script>
        $(document).ready(function() {
            $(".trix-button--icon-attach").remove();
            $(".trix-button-group--file-tools").remove();
        });
    </script>
@endpush
