@extends('layouts.admin')

@section('title', 'Category')

@section('admin_content')

{{-- DataTable CSS --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
                <h4 class="page-main-title m-0">Category</h4>
            </div>
            <div class="text-end d-flex align-items-center gap-2">
                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">
                    + Add New
                </button>
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>

        <!-- Main Content -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>All Category List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Category Slug</th>
                                        <th class="text-center">Icon</th>
                                        <th class="text-center">Home Page</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Category Slug</th>
                                        <th class="text-center">Icon</th>
                                        <th class="text-center">Home Page</th>
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
        <form action="{{ route('category.store') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="category_name" required placeholder="Enter category name">
                    <small class="form-text text-muted">This is your main category</small>
                </div>
                <div class="form-group mb-3">
                    <label>Icon <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="icon" required placeholder="e.g. fa fa-home">
                </div>
                <div class="form-group mb-3">
                    <label>Home Page <span class="text-danger">*</span></label>
                    <select class="form-control" name="home_page" required>
                        <option value="1">Yes</option>
                        <option value="0" selected>No</option>
                    </select>
                    <small class="form-text text-muted">If yes, it will show on your home page.</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>
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

<script>
$(function () {

    var table = $('.ytable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('category.index') }}",
            type: "GET"
        },
        language: {
            emptyTable: `
                <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; padding:40px 0;">
                    <img src="{{ asset('admin/images/no_data.svg') }}" alt="No Data" style="width:80px; height:80px; margin-bottom:15px;" />
                    <div style="font-size:16px; color:#555;"><b>No data available</b><br/><p>Please add new entity regarding this table</p></div>
                </div>
            `
        },
        columns: [
            { data: 'DT_RowIndex',    name: 'DT_RowIndex', orderable: false, searchable: false, width: '50px' },
            { data: 'category_name',  name: 'category_name' },
            { data: 'category_slug',  name: 'category_slug' },
            { data: 'icon',           name: 'icon', orderable: false, searchable: false, width: '80px', className: 'text-center' },
            { data: 'home_page',      name: 'home_page', className: 'text-center' },
            { data: 'action',         name: 'action', orderable: false, searchable: false, width: '100px', className: 'text-center' }
        ]
    });

    // Load edit form via AJAX
    $('body').on('click', '.edit', function () {
        let id = $(this).data('id');
        $.get("{{ url('admin/category') }}/" + id + "/edit", function (data) {
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