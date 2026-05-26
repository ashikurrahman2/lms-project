@extends('layouts.admin')

@section('title', 'Courses')

@section('admin_content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<div class="content-page">
    <div class="container-fluid">
        <div class="page-title-head d-flex align-items-center mb-3">
            <h4 class="flex-grow-1">Courses Management</h4>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New Course</button>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered ytable w-100">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Instructor</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data" class="modal-content">
            @csrf
            <div class="modal-header"><h5>Add New Course</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3"><label>Title*</label><input type="text" name="title" class="form-control" required></div>
                    <div class="col-md-12 mb-3"><label>Image*</label><input type="file" name="image" class="form-control" required accept="image/*"></div>
                    <div class="col-md-6 mb-3"><label>Price*</label><input type="number" step="0.01" name="price" class="form-control" required></div>
                    <div class="col-md-6 mb-3"><label>Instructor Name*</label><input type="text" name="instructor_name" class="form-control" required></div>
                    <div class="col-md-4 mb-3"><label>Duration*</label><input type="text" name="duration" class="form-control" required placeholder="e.g. 12 Hours"></div>
                    <div class="col-md-4 mb-3"><label>Student Count</label><input type="number" name="student_count" value="0" class="form-control"></div>
                    <div class="col-md-4 mb-3"><label>Rating</label><input type="number" name="rating" min="1" max="5" value="5" class="form-control"></div>
                </div>
            </div>
            <div class="modal-footer"><button type="submit" class="btn btn-primary w-100">Save Course</button></div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg"><div class="modal-content" id="edit-content"></div></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(function() {
    $('.ytable').DataTable({
        processing: true, serverSide: true,
        ajax: "{{ route('course.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'image', name: 'image'},
            {data: 'title', name: 'title'},
            {data: 'price', name: 'price'},
            {data: 'instructor_name', name: 'instructor_name'},
            {data: 'duration', name: 'duration'},
            {data: 'action', name: 'action', className: 'text-center'}
        ]
    });

    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("{{ url('admin/course') }}/" + id + "/edit", function(data) {
            $('#edit-content').html(data);
        });
    });

    $('body').on('click', '.delete', function() {
        let id = $(this).data('id');
        Swal.fire({title: 'Are you sure?', icon: 'warning', showCancelButton: true, confirmButtonText: 'Yes, Delete!'})
        .then((res) => { if(res.isConfirmed) $('#delete-form-'+id).submit(); });
    });
});
</script>
@endsection