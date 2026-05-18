@extends('layouts.admin')

@section('title', 'About Section')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ Breadcrumb ] -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">About Section</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        @can('create about')
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

        <!-- [ Main Content ] -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>All About Section Content</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Heading</th>
                                         <th>Paragraph 1</th>
                                        <th>Paragraph 2</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Heading</th>
                                        <th>Paragraph 1</th>
                                        <th>Paragraph 2</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .pc-content -->
</div> <!-- .pc-container -->

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="add-form" action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add About Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Heading</label>
                    <input type="text" name="heading" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label>Paragraph 1</label>
                    <textarea name="paragraph_1" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label>Paragraph 2</label>
                    <textarea name="paragraph_2" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label>About Image</label>
                    <input type="file" name="image" class="dropify" accept="image/*" required>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit About Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="edit-form-body">
                <!-- Edit form loads via AJAX -->
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(function () {
    var table = $('.ytable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('about.index') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex' },
            { data: 'heading', name: 'heading' },
            { data: 'paragraph_1', name: 'paragraph_1' },
            { data: 'paragraph_2', name: 'paragraph_2' },
            { data: 'image', name: 'image' },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });

   // Load edit form
    $('body').on('click', '.edit', function () {
        let id = $(this).data('id');
        $.get("about/" + id + "/edit", function (data) {
            $('#edit-form-body').html(data);
        });
    });



 
});
</script>
@endsection
