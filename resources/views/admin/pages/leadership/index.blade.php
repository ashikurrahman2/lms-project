@extends('layouts.admin')

@section('title', 'Leadership')

@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Leadership</h5>
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
                        <h5>All Leadership List</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table class="table table-striped table-bordered nowrap table-sm ytable">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Designation</th>
                                        <th>LinkedIn</th>
                                        <th>Facebook</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Designation</th>
                                        <th>LinkedIn</th>
                                        <th>Facebook</th>
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
        <form action="{{ route('leadership.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Leadership</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label>Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="l_name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Image</label>
                        <input type="file" class="dropify" name="l_img">
                    </div>
                    <div class="form-group mb-3">
                        <label>Designation</label>
                        <input type="text" class="form-control" name="l_desg" placeholder="e.g. Chairman">
                    </div>
                    <div class="form-group mb-3">
                        <label>LinkedIn URL</label>
                        <input type="text" class="form-control" name="l_ldn" placeholder="https://linkedin.com/in/username">
                    </div>
                    <div class="form-group mb-3">
                        <label>Facebook URL</label>
                        <input type="text" class="form-control" name="l_fc" placeholder="https://facebook.com/username">
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
                <h5 class="modal-title">Edit Leadership</h5>
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
                url: "{{ route('leadership.index') }}",
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
                { data: 'l_name',      name: 'l_name' },
                { data: 'l_img',       name: 'l_img' },
                { data: 'l_desg',      name: 'l_desg' },
                { data: 'l_ldn',       name: 'l_ldn' },
                { data: 'l_fc',        name: 'l_fc' },
                { data: 'action',      name: 'action', orderable: false, searchable: false }
            ]
        });

        // Load edit form
        $('body').on('click', '.edit', function () {
            let id = $(this).data('id');
            $.get("leadership/" + id + "/edit", function (data) {
                $('#edit-form-body').html(data);
            });
        });
    });
</script>
@endsection