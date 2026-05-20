<form action="{{ route('service.update', $service->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label>Service Title <span class="text-danger">*</span></label>
        <input type="text" name="ser_title" class="form-control" value="{{ $service->ser_title }}" required>
    </div>
    <div class="form-group mb-3">
        <label>Service Description <span class="text-danger">*</span></label>
        <textarea name="ser_desc" class="form-control" rows="4" required>{{ $service->ser_desc }}</textarea>
    </div>
    <div class="modal-footer px-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Service</button>
    </div>
</form>