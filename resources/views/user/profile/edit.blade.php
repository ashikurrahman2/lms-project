@extends('layouts.user')
@section('title', 'Update Student Profile')
@section('user_content')

<div class="page-body">
    <div class="container w-full">
        <div class="page-title">
            <div class="grid grid-cols-12 mx-2 items-center">
                {{-- <div class="col-span-6 sm:col-span-12">
                    <h3>Edit Profile</h3>
                </div> --}}
                <div class="col-span-6 sm:col-span-12">
                    <ol class="breadcrumb flex">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        {{-- <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Edit Profile</li> --}}
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="edit-profile">
            <div class="grid grid-cols-12 card-gap">
                <div class="col-span-8 xl:col-span-12">
                    <form class="card" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-header">
                            <h5 class="card-title">Edit Profile</h5>
                            <div class="card-options">
                                <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                    <i class="fe fe-chevron-up"></i>
                                </a>
                                <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                    <i class="fe fe-x"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="grid grid-cols-12 card-gap custom-input">

                                {{-- Profile Image --}}
                                <div class="col-span-6 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="image">Profile Photo</label>
                                        <input class="form-control @error('image') is-invalid @enderror"
                                               id="image" name="image" type="file"
                                               accept="image/jpg,image/jpeg,image/png,image/webp"
                                               onchange="previewImage(this)">
                                        @error('image')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                        <div class="mt-2">
                                            <img id="imagePreview"
                                                 src="{{ Auth::user()->image }}"
                                                 alt="Profile"
                                                 style="width:70px;height:70px;object-fit:cover;border-radius:50%">
                                        </div>
                                    </div>
                                </div>

                                {{-- Phone --}}
                                <div class="col-span-6 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone</label>
                                        <input class="form-control @error('phone') is-invalid @enderror"
                                               id="phone" name="phone" type="text"
                                               value="{{ old('phone', Auth::user()->phone) }}"
                                               placeholder="01XXXXXXXXX">
                                        @error('phone')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Full Name --}}
                                <div class="col-span-6 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Full Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name" type="text"
                                               value="{{ old('name', Auth::user()->name) }}"
                                               placeholder="Full name">
                                        @error('name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="col-span-6 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                               id="email" name="email" type="email"
                                               value="{{ old('email', Auth::user()->email) }}"
                                               placeholder="your-email@domain.com">
                                        @error('email')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Division --}}
                                <div class="col-span-6 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="division">Division</label>
                                        <input class="form-control @error('division') is-invalid @enderror"
                                               id="division" name="division" type="text"
                                               value="{{ old('division', Auth::user()->division) }}"
                                               placeholder="Division">
                                        @error('division')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- District --}}
                                <div class="col-span-6 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="district">District</label>
                                        <input class="form-control @error('district') is-invalid @enderror"
                                               id="district" name="district" type="text"
                                               value="{{ old('district', Auth::user()->district) }}"
                                               placeholder="District">
                                        @error('district')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Upazila --}}
                                <div class="col-span-4 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="upazila">Upazila</label>
                                        <input class="form-control @error('upazila') is-invalid @enderror"
                                               id="upazila" name="upazila" type="text"
                                               value="{{ old('upazila', Auth::user()->upazila) }}"
                                               placeholder="Upazila">
                                        @error('upazila')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Union --}}
                                <div class="col-span-4 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="union">Union</label>
                                        <input class="form-control @error('union') is-invalid @enderror"
                                               id="union" name="union" type="text"
                                               value="{{ old('union', Auth::user()->union) }}"
                                               placeholder="Union">
                                        @error('union')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Postcode --}}
                                <div class="col-span-4 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="postcode">Postcode</label>
                                        <input class="form-control @error('postcode') is-invalid @enderror"
                                               id="postcode" name="postcode" type="number"
                                               value="{{ old('postcode', Auth::user()->postcode) }}"
                                               placeholder="Postcode">
                                        @error('postcode')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Address Details --}}
                                <div class="col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="address_details">Address Details</label>
                                        <textarea class="form-control @error('address_details') is-invalid @enderror"
                                                  id="address_details" name="address_details"
                                                  rows="2" placeholder="House no, road, area...">{{ old('address_details', Auth::user()->address_details) }}</textarea>
                                        @error('address_details')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Current Password --}}
                                <div class="col-span-4 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="current_password">Current Password</label>
                                        <input class="form-control @error('current_password') is-invalid @enderror"
                                               id="current_password" name="current_password"
                                               type="password" placeholder="Enter current password">
                                        @error('current_password')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- New Password --}}
                                <div class="col-span-4 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="new_password">New Password</label>
                                        <input class="form-control @error('new_password') is-invalid @enderror"
                                               id="new_password" name="new_password"
                                               type="password" placeholder="Leave blank to keep current">
                                        @error('new_password')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Confirm New Password --}}
                                <div class="col-span-4 sm:col-span-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="new_password_confirmation">Confirm New Password</label>
                                        <input class="form-control"
                                               id="new_password_confirmation" name="new_password_confirmation"
                                               type="password" placeholder="Confirm new password">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-footer text-end">
                            <button class="btn btn-primary text-white" type="submit">Update Profile</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                document.getElementById('imagePreview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
@endsection