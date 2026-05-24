@extends('layouts.admin')

@section('title', 'Slider')

@section('admin_content')

{{-- DataTable CSS --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<style>
    .ytable td {
        vertical-align: middle !important;
    }
    .ytable .btn-sm {
        padding: 4px 8px;
        font-size: 13px;
        line-height: 1.4;
    }
    .ytable .d-flex {
        justify-content: center;
    }
</style>

<div class="content-page">
    <div class="container-fluid">

        <!-- Page Title -->
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="page-main-title m-0">Slider</h4>
            </div>
            <div class="text-end d-flex align-items-center gap-2">
                @can('create slider')
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
                    + Add New
                </button>
                @endcan
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Slider</li>
                </ol>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>All Sliders List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Heading Text</th>
                                        <th>Caption Text</th>
                                        <th>Slider Image</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Heading Text</th>
                                        <th>Caption Text</th>
                                        <th>Slider Image</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="add-form" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add New Slider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Heading Text <sup class="text-danger">*</sup></label>
                    <input type="text" name="heading_text" class="form-control" required>
                    <small class="form-text text-muted">This is your Slider Heading Text</small>
                </div>
                <div class="form-group mb-3">
                    <label>Caption Text <sup class="text-danger">*</sup></label>
                    <input type="text" name="caption_text" class="form-control" required>
                    <small class="form-text text-muted">This is your Slider Caption Text</small>
                </div>
                <div class="form-group mb-3">
                    <label>Slider Image <sup class="text-danger">*</sup></label>
                    <input type="file" name="s_img" class="dropify" data-height="200" accept="image/*" required>
                    <small class="form-text text-muted">This is your Slider Image</small>
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
                <h5 class="modal-title">Edit Slider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="edit-form-body">
                <!-- Edit form loads via AJAX -->
            </div>
        </div>
    </div>
</div>

{{-- Scripts --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<script>
$(function () {

    var table = $('.ytable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('slider.index') }}",
            type: "GET"
        },
        columns: [
            { data: 'DT_RowIndex',  name: 'DT_RowIndex', orderable: false, searchable: false, width: '50px' },
            { data: 'heading_text', name: 'heading_text' },
            { data: 'caption_text', name: 'caption_text' },
            { data: 's_img',        name: 's_img', orderable: false, searchable: false, width: '80px' },
            { data: 'action',       name: 'action', orderable: false, searchable: false, width: '100px', className: 'text-center' }
        ]
    });

    // Load edit form via AJAX
    $('body').on('click', '.edit', function () {
        let id = $(this).data('id');
        $.get("{{ url('admin/slider') }}/" + id + "/edit", function (data) {
            $('#edit-form-body').html(data);
        });
    });

    // Delete with SweetAlert2
    $('body').on('click', '.delete', function () {
        let id = $(this).data('id');

        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to delete this data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, Delete!',
            cancelButtonText: 'No, Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delete-form-' + id).submit();
            }
        });
    });

});
</script>

@endsection