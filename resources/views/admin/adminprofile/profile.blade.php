@extends('layouts.admin')
@section('admin_content')

<div class="content-page">
    <div class="container-fluid">

        {{-- Page Title --}}
        <div class="page-title-head d-flex align-items-center">
            <div class="flex-grow-1">
                <h4 class="page-main-title m-0">Admin Profile</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Pages</a></li>
                    <li class="breadcrumb-item active">Admin Profile</li>
                </ol>
            </div>
        </div>

        {{-- Hero Banner --}}
        <div class="row">
            <div class="col-12">
                <article class="card overflow-hidden mb-0">
                    <div class="position-relative card-side-img overflow-hidden"
                         style="min-height: 300px; background-image: url('{{ asset('assets/images/profile-bg.jpg') }}')">
                        <div class="p-4 card-img-overlay rounded-start-0 auth-overlay d-flex align-items-center flex-column justify-content-center">
                            <h3 class="text-white mb-0 fst-italic">
                                "Designing the future, one template at a time"
                                <a href="#!" class="text-white"><i class="ti ti-edit"></i></a>
                            </h3>
                            <button type="button" class="btn btn-sm btn-danger mt-2">Change Background</button>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        {{-- Main Card --}}
        <div class="px-3 mt-n4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            {{-- Personal Info --}}
                            <h5 class="mb-3 text-uppercase bg-light-subtle p-1 border-dashed border rounded border-light d-flex justify-content-center align-items-center gap-1">
                                <i class="ti ti-user-circle fs-lg"></i>
                                Personal Info
                            </h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $admin->name }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" value="{{ $admin->mobile_number ?? 'N/A' }}" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <input type="text" class="form-control" value="{{ $admin->gender ?? 'N/A' }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Religion</label>
                                        <input type="text" class="form-control" value="{{ $admin->religion ?? 'N/A' }}" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Blood Group</label>
                                        <input type="text" class="form-control" value="{{ $admin->blood_group ?? 'N/A' }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Profession</label>
                                        <input type="text" class="form-control" value="{{ $admin->profession ?? 'N/A' }}" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" value="{{ $admin->email }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">Profile Photo</label>
                                        <div class="d-flex align-items-center gap-3 p-2 border rounded">
                                            <img src="{{ asset($admin->image) }}"
                                                 class="rounded-circle"
                                                 width="48" height="48"
                                                 style="object-fit:cover;"
                                                 alt="{{ $admin->name }}">
                                            <div>
                                                <p class="mb-0 fw-semibold">{{ $admin->name }}</p>
                                                <small class="text-muted">{{ $admin->email }}</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Address Info --}}
                            <h5 class="mb-3 text-uppercase bg-light-subtle p-1 border-dashed border rounded border-light d-flex justify-content-center align-items-center gap-1">
                                <i class="ti ti-map-pin fs-lg"></i>
                                Address Info
                            </h5>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Division</label>
                                        @php
                                            $division = is_object($admin->division) ? $admin->division->name : ($admin->division ?? 'N/A');
                                        @endphp
                                        <input type="text" class="form-control" value="{{ $division }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">District</label>
                                        @php
                                            $district = is_object($admin->district) ? $admin->district->name : ($admin->district ?? 'N/A');
                                        @endphp
                                        <input type="text" class="form-control" value="{{ $district }}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Upazila</label>
                                        @php
                                            $upazila = is_object($admin->upazila) ? $admin->upazila->name : ($admin->upazila ?? 'N/A');
                                        @endphp
                                        <input type="text" class="form-control" value="{{ $upazila }}" readonly />
                                    </div>
                                </div>
                            </div>

                            {{-- Edit Button --}}
                            <div class="text-end mt-4">
                                <a href="{{ route('admin.profile.edit') }}" class="btn btn-success">
                                    <i class="ti ti-edit me-1"></i> Edit Profile
                                </a>
                            </div>

                        </div>
                        {{-- end card-body --}}
                    </div>
                    {{-- end card --}}
                </div>
            </div>
        </div>

    </div>
    {{-- end container-fluid --}}


</div>
{{-- end content-page --}}

@endsection