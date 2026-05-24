@extends('layouts.admin')

@section('admin_content')
<div class="content-page">
    <div class="container-fluid">

        <div class="page-title-head d-flex align-items-center mb-4">
            <div class="flex-grow-1">
                <h4 class="page-main-title m-0">Security Settings</h4>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white border-bottom p-3">
                        <h5 class="card-title mb-0"><i class="ti ti-lock me-2 text-primary"></i>Change Admin Password</h5>
                    </div>
                    <div class="card-body p-4">
                        
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf

                            {{-- Current Password --}}
                            <div class="mb-3">
                                <label for="old_password" class="form-label fw-bold">Current Password</label>
                                <div class="input-group">
                                    <input type="password" name="old_password" id="old_password" 
                                           class="form-control @error('old_password') is-invalid @enderror" 
                                           placeholder="Enter current password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="old_password">
                                        <i class="ti ti-eye"></i>
                                    </button>
                                </div>
                                @error('old_password')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <hr class="my-4">

                            {{-- New Password --}}
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">New Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" 
                                           class="form-control @error('password') is-invalid @enderror" 
                                           placeholder="Minimum 8 characters" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password">
                                        <i class="ti ti-eye"></i>
                                    </button>
                                </div>
                                @error('password')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                                
                                {{-- Strength Meter (Fixing NaN issues here) --}}
                                <div class="mt-2" id="strengthBarContainer" style="display:none;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar" id="strengthProgress" role="progressbar" style="width:0%"></div>
                                    </div>
                                    <small id="strengthText" class="fw-bold mt-1 d-block"></small>
                                </div>
                            </div>

                            {{-- Confirm Password --}}
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label fw-bold">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" 
                                           class="form-control" placeholder="Re-type new password" required>
                                    <button class="btn btn-outline-secondary toggle-password" type="button" data-target="password_confirmation">
                                        <i class="ti ti-eye"></i>
                                    </button>
                                </div>
                                <small id="matchMsg" class="fw-bold d-block mt-1"></small>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary py-2 fw-bold">
                                    <i class="ti ti-check me-1"></i> Update Password Now
                                </button>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-light">Cancel</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Password Toggle (Show/Hide)
    document.querySelectorAll('.toggle-password').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('ti-eye', 'ti-eye-off');
            } else {
                input.type = 'password';
                icon.classList.replace('ti-eye-off', 'ti-eye');
            }
        });
    });

    // Password Strength Meter (Anti-NaN logic)
    const passwordInput = document.getElementById('password');
    passwordInput.addEventListener('input', function() {
        const val = this.value;
        const container = document.getElementById('strengthBarContainer');
        const progress = document.getElementById('strengthProgress');
        const text = document.getElementById('strengthText');

        if (val.length === 0) {
            container.style.display = 'none';
            return;
        }
        
        container.style.display = 'block';

        let strength = 0;
        if (val.length >= 8) strength++;
        if (/[A-Z]/.test(val)) strength++;
        if (/[0-9]/.test(val)) strength++;
        if (/[^A-Za-z0-9]/.test(val)) strength++;

        const colors = ['#dc3545', '#fd7e14', '#ffc107', '#198754'];
        const labels = ['Weak', 'Fair', 'Good', 'Strong'];

        // Calculate percentage (Strength is 0-4, so 0-100%)
        let percent = (strength / 4) * 100;
        progress.style.width = percent + '%';
        
        // Safety check for NaN or undefined indices
        let index = strength - 1;
        if (index < 0) index = 0; // Ensures it never goes below 0

        progress.style.backgroundColor = colors[index];
        text.textContent = labels[index];
        text.style.color = colors[index];
    });

    // Confirm Password Matching check
    const confirmInput = document.getElementById('password_confirmation');
    confirmInput.addEventListener('input', function() {
        const originalPw = document.getElementById('password').value;
        const matchMsg = document.getElementById('matchMsg');
        
        if (this.value === '') {
            matchMsg.textContent = '';
            return;
        }

        if (this.value === originalPw) {
            matchMsg.textContent = '✓ Passwords match';
            matchMsg.style.color = '#198754';
        } else {
            matchMsg.textContent = '✗ Passwords do not match';
            matchMsg.style.color = '#dc3545';
        }
    });
</script>
@endsection