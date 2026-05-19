<form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group mb-3">
            <label>Student ID</label>
            <input type="text" class="form-control" value="{{ $student->student_id }}" disabled>
             <small>No need edit your Student ID</small>
        </div>
        <div class="form-group mb-3">
            <label>Student Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
        </div>
           <div class="form-group">
            <label for="image" class="col-form-label pt-0">Current Image</label><br>
            @if($student->image)
                <img src="{{ asset($student->image) }}" width="200" alt="Current Image">
            @else
                <p>No image uploaded.</p>
            @endif
        </div>
           <div class="form-group">
            <label for="image" class="col-form-label pt-0">Upload New Image (Optional)</label>
            <input type="file" class="dropify" name="image" accept="image/*" value= "{{ $student->image }}">
            <small class="form-text text-muted">You can upload a new image (Optional)</small>
        </div>
            <div class="form-group mb-3">
                        <label>Facebook URL</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                            <input type="url" class="form-control" name="facebook" placeholder="https://facebook.com/..." value="{{ $student->facebook }}">
                        </div>
                    </div>

                         <div class="form-group mb-3">
                        <label>LinkedIn URL</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </span>
                            <input type="url" class="form-control" name="linkedin" placeholder="https://linkedin.com/in/..." value="{{ $student->linkedin }}">
                        </div>
                    </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>

{{-- Optional File Upload JS (if you're using plugin for file uploads) --}}
<script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
