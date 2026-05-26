<form action="{{ route('video.update', $video->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group mb-3">
            <label>Video File</label>
            <input type="file" class="dropify" name="video_file" accept="video/*"
                {{ $video->video_file ? 'data-default-file="' . asset($video->video_file) . '"' : '' }}>
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