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
<div class="modal fade" id="detailModal-{{ $model->id }}" tabindex="-1" role="dialog"
    aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Kategori {{ $model->course_category }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tr>
                            <th>Slug</th>
                            <td>{{ $model->slug }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $model->course_category }}</td>
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
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editModal-{{ $model->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Kategori {{ $model->course_category }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('course_categories.update', $model) }}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="course_category">Name</label>
                        <input type="text" class="form-control" id="course_category" name="course_category"
                            value="{{ $model->course_category }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal-{{ $model->id }}" tabindex="-1" role="dialog"
    aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Kategori {{ $model->course_category }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <form action="{{ route('course_categories.destroy', $model) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
