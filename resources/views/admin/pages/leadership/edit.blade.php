<form action="{{ route('leadership.update', $leadership->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group mb-3">
            <label>Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="l_name" value="{{ $leadership->l_name }}" required>
        </div>
        <div class="form-group mb-3">
            <label>Image</label>
            <input type="file" class="dropify" name="l_img"
                {{ $leadership->l_img ? 'data-default-file="' . asset($leadership->l_img) . '"' : '' }}>
        </div>
        <div class="form-group mb-3">
            <label>Designation</label>
            <input type="text" class="form-control" name="l_desg" value="{{ $leadership->l_desg }}" placeholder="e.g. Chairman">
        </div>
        <div class="form-group mb-3">
            <label>LinkedIn URL</label>
            <input type="text" class="form-control" name="l_ldn" value="{{ $leadership->l_ldn }}" placeholder="https://linkedin.com/in/username">
        </div>
        <div class="form-group mb-3">
            <label>Facebook URL</label>
            <input type="text" class="form-control" name="l_fc" value="{{ $leadership->l_fc }}" placeholder="https://facebook.com/username">
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