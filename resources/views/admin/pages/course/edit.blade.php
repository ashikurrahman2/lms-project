<form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="row">
            <!-- Title -->
            <div class="col-md-12 form-group mb-3">
                <label>Course Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="title" value="{{ $course->title }}" required>
            </div>

            <!-- Image -->
            <div class="col-md-12 form-group mb-3">
                <label>Course Image</label>
                <input type="file" class="dropify" name="image"
                    {{ $course->image ? 'data-default-file=' . asset($course->image) : '' }} accept="image/*">
            </div>

            <!-- Price & Instructor -->
            <div class="col-md-6 form-group mb-3">
                <label>Price (৳) <span class="text-danger">*</span></label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ $course->price }}" required>
            </div>

            <div class="col-md-6 form-group mb-3">
                <label>Instructor Name</label>
                <input type="text" class="form-control" name="instructor_name" value="{{ $course->instructor_name }}">
            </div>

            <!-- Duration, Students, Rating -->
            <div class="col-md-4 form-group mb-3">
                <label>Duration (Hrs)</label>
                <input type="text" class="form-control" name="duration" value="{{ $course->duration }}" placeholder="e.g. 1.49 Hrs">
            </div>

            <div class="col-md-4 form-group mb-3">
                <label>Student Count</label>
                <input type="number" class="form-control" name="student_count" value="{{ $course->student_count }}">
            </div>

            <div class="col-md-4 form-group mb-3">
                <label>Rating (1-5)</label>
                <input type="number" class="form-control" name="rating" min="1" max="5" value="{{ $course->rating }}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </div>
</form>

<script>
    // Dropify re-initialize for dynamically loaded content via AJAX
    $('.dropify').dropify();
</script>