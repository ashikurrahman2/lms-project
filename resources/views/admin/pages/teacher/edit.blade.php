<form action="{{ route('teacher.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label>Teacher Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" name="t_name" value="{{ $teacher->t_name }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Teacher Image</label>
        @if ($teacher->t_img && file_exists(public_path($teacher->t_img)))
            <div class="mb-2">
                <img src="{{ asset($teacher->t_img) }}" alt="Teacher Image"
                    style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
            </div>
        @endif
        <input type="file" class="dropify" name="t_img"
            @if ($teacher->t_img && file_exists(public_path($teacher->t_img)))
                data-default-file="{{ asset($teacher->t_img) }}"
            @endif
        >
    </div>

    <div class="form-group mb-3">
        <label>Designation</label>
        <input type="text" class="form-control" name="t_design" value="{{ $teacher->t_design }}"
            placeholder="e.g. Senior Lecturer">
    </div>

    <div class="text-end">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>

</form>