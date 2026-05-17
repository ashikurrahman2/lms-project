<form action="{{ route('slider.update', $slider->id) }}" method="post" id="edit-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="form-group">
            <label for="heading_text" class="col-form-label pt-0">Heading Text<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="heading_text" name="heading_text" value="{{ $slider->heading_text }}" required>
            <small id="headingHelp" class="form-text text-muted">This is your Slider Heading Text</small>
        </div>

        <div class="form-group">
            <label for="caption_text" class="col-form-label pt-0">Caption Text<sup class="text-size-20 top-1">*</sup></label>
            <input type="text" class="form-control" id="caption_text" name="caption_text" value="{{ $slider->caption_text }}" required>
            <small id="captionHelp" class="form-text text-muted">This is your Slider Caption Text</small>
        </div>

          <div class="form-group">
        <label for="banner_image" class="col-form-label pt-0">Current photo Logo</label>
        <br>
        @if($slider->s_img)
        <img src="{{ asset($slider->s_img) }}" alt="banner Logo" class="img-fluid" style="max-width: 100px;">
        @else
        <p>No logo uploaded.</p>
        @endif
    </div>

    
      <div class="col-md-12">
        <label for="s_img" class="col-form-label pt-0">Slider Image<sup class="text-size-20 top-1">*</sup></label>
        <input type="file" class="dropify" data-height="200" name="s_img" value="{{ $slider->s_img }}" />
        <small id="imageHelp" class="form-text text-muted">This is your Banner image</small>
    </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Update Slider</button>
        </div>
    </div>
</form>

{{-- For file upload script --}}
<script src="{{ asset('/') }}admin/assets/fileuploads/js/fileupload.js"></script>
<script src="{{ asset('/') }}admin/assets/fileuploads/js/file-upload.js"></script>
