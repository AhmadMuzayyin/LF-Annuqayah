@extends('layouts.app', ['title' => 'Kategori Kursus', 'path' => 'Kategori', 'bread' => 'Home/Index'])
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col mb-4">

            <!-- Data Kategori -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {!! $html->table(['class' => 'table'], true) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {!! $html->scripts() !!}
@endpush
