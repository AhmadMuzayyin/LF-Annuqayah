@extends('layouts.app', ['title' => 'Kategori Kursus', 'path' => 'Kategori', 'bread' => 'Home/Index'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col mb-4">

            <!-- Data Kategori -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
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
    <x-modal-scroll id="createModal" title="Tambah Kategori">
        <x-form-modal route="{{ route('course_categories.store') }}">
            <div class="form-group">
                <x-input-basic name="course_category" label="Nama Kategori"></x-input-basic>
            </div>
        </x-form-modal>
    </x-modal-scroll>
@endsection
@push('scripts')
    {!! $html->scripts() !!}
@endpush
