@extends('layouts.admin')

@section('title', 'Student')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Student</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header table-card-header">
                        <h5>All Student List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Student Image</th>
                                         <th>Facebook URL</th>
                                        <th>LinkedIn URL</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Student Image</th>
                                        <th>Facebook URL</th>
                                        <th>LinkedIn URL</th>
                                        <th>Action</th>
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Student ID</label>
                        <input type="text" class="form-control" value="Your std ID" disabled>
                        <small>No need your fillup the Student ID</small>
                    </div>
                    <div class="form-group">
                        <label>Student Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                      <div class="form-group">
                        <label>Student Image <span class="text-danger">*</span></label>
                        <input type="file" class="dropify" name="image" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Facebook URL</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">
                                <i class="fab fa-facebook-f"></i>
                            </span>
                            <input type="url" class="form-control" name="facebook" placeholder="https://facebook.com/...">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label>LinkedIn URL</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </span>
                            <input type="url" class="form-control" name="linkedin" placeholder="https://linkedin.com/in/...">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="edit-form-body">
                <!-- Edit form loaded via AJAX -->
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(function () {
        var table = $('.ytable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('student.index') }}",
                dataSrc: 'data'
            },
            language: {
                emptyTable: `
                    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 40px 0;">
                        <img src="{{ asset('admin/images/no_data.svg') }}" alt="No Data" style="width: 80px; height:80px; margin-bottom: 15px;" />
                        <div style="font-size: 16px; color: #555;"><b>No data available</b><br/><p>Please add new entity regarding this table</p></div>
                    </div>
                `
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'student_id', name: 'student_id' },
                { data: 'name', name: 'name' },
                { data: 'image', name: 'image' },
                { data: 'facebook', name: 'facebook' },
                { data: 'linkedin', name: 'linkedin' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

    // Load edit form
    $('body').on('click', '.edit', function () {
        let id = $(this).data('id');
        $.get("student/" + id + "/edit", function (data) {
            $('#edit-form-body').html(data);
        });
    });
    });
</script>
@endsection