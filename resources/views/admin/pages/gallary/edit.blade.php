<form action="{{ route('gallary.update', $gallary->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" class="form-control" name="g_title" value="{{ $gallary->g_title }}" placeholder="Enter image title">
        </div>
        <div class="form-group mb-3">
            <label>Image</label>
            <input type="file" class="dropify" name="g_img"
                {{ $gallary->g_img ? 'data-default-file="' . asset($gallary->g_img) . '"' : '' }}>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

<script>
    // Dropify re-initialize for dynamically loaded content
    $('.dropify').dropify();
</script>