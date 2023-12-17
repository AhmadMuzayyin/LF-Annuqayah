<div class="btn-group">
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
        data-target="#detailModal-{{ $model->id }}">
        <i class="fas fa-eye"></i> Detail
    </button>

    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal-{{ $model->id }}">
        <i class="fas fa-edit"></i> Edit
    </button>

    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
        data-target="#deleteModal-{{ $model->id }}">
        <i class="fas fa-trash"></i> Delete
    </button>
</div>

<!-- Detail Modal -->
<x-modal-basic title="Detail Kurus {{ $model->title }}" id="detailModal-{{ $model->id }}" size="modal-xl">
    <div class="table-responsive">
        <table class="table table-borderless">
            <tr>
                <th>Title</th>
                <td>{{ $model->title }}</td>
            </tr>
            <tr>
                <th>Thumbnail</th>
                <td>
                    <img src="{{ url('storage', $model->thumbnail) }}" alt="{{ $model->thumbnail }}"
                        class="img-thumbnail">
                </td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{!! $model->trix('content') !!}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ $model->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ $model->updated_at }}</td>
            </tr>
        </table>
    </div>
</x-modal-basic>
<!-- Edit Modal -->
<x-modal-scroll title="Edit Kursus {{ $model->title }}" id="editModal-{{ $model->id }}" size="modal-xl">
    <x-form-modal route="{{ route('courses.update', $model) }}">
        <x-input-basic name="slug" type="text" label="SLug" value="{{ $model->slug }}"
            readonly></x-input-basic>
        <x-input-basic name="title" type="text" label="Title" value="{{ $model->title }}"></x-input-basic>
        <img src="{{ url('/storage', $model->thumbnail) }}" alt="{{ $model->thumbnail }}" class="img-thumbnail mb-2"
            width="300">
        <x-input-file name="thumbnail" label="Thumbnail"></x-input-file>
        <x-input-select name="type">
            <option value="" selected disabled>Pilih Jenis Kursus</option>
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
        </x-input-select>
        <x-input-basic name="price" type="number" label="Harga" value="{{ $model->price }}"></x-input-basic>
        <div class="form-group">
            @trix($model, 'content')
        </div>
    </x-form-modal>
    </x-modal-sc>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal-{{ $model->id }}" tabindex="-1" role="dialog"
        aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Kursus {{ $model->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                </div>
                <form action="{{ route('courses.destroy', $model) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger" id="delete-button">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $(".trix-button--icon-attach").remove();
                $(".trix-button-group--file-tools").remove();
            });
        </script>
    @endpush
