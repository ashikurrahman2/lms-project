@extends('layouts.admin')

@section('title', 'Error 404 - Page Not Found')

@section('admin_content')

<style>
    .error-page-wrapper {
        min-height: calc(100vh - 70px);
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
        position: relative;
        overflow: hidden;
    }
    .error-page-wrapper .corner-deco {
        position: absolute;
        width: 220px;
        opacity: 1;
    }
    .error-page-wrapper .corner-deco.top-right {
        top: 0;
        right: 0;
    }
    .error-page-wrapper .corner-deco.bottom-left {
        bottom: 0;
        left: 0;
        transform: rotate(180deg);
    }
    .error-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        padding: 2.5rem 2rem;
        width: 100%;
        max-width: 440px;
        text-align: center;
    }
    .error-card .auth-brand {
        margin-bottom: 1.5rem;
    }
    .error-text-alt {
        font-size: 72px;
        font-weight: 700;
        line-height: 1;
        color: #f0ad4e;
        margin-bottom: 0.25rem;
    }
    .error-card h3 {
        font-size: 1.25rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        color: #333;
        margin-bottom: 0.75rem;
    }
    .error-card p.text-muted {
        font-size: 0.95rem;
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 1.75rem;
    }
    .error-card .btn-group-custom {
        display: flex;
        justify-content: center;
        gap: 8px;
    }
    .footer-note {
        margin-top: 1.5rem;
        font-size: 13px;
        color: #888;
    }
</style>

<div class="error-page-wrapper">

    <img src="{{ asset('assets/images/auth-card-bg.svg') }}" class="corner-deco top-right" alt="">
    <img src="{{ asset('assets/images/auth-card-bg.svg') }}" class="corner-deco bottom-left" alt="">

    <div class="error-card">

        <div class="auth-brand">
            <a href="{{ url('admin/dashboard') }}">
                <img src="{{ asset('assets/images/logo-black.png') }}" alt="Logo" height="28">
            </a>
        </div>

        <div class="error-text-alt">404</div>
        <h3>Nothing Here</h3>
        <p class="text-muted fs-6">
            We couldn't find the page you were looking for.<br>
            It might have been moved or deleted.
        </p>

        <div class="btn-group-custom">
            <a href="{{ url('admin/dashboard') }}" class="btn btn-primary">
                <i class="fas fa-home me-1"></i> Back to Home
            </a>
            <a href="javascript:history.back()" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i> Go Back
            </a>
        </div>

        <p class="footer-note">
            &copy; <script>document.write(new Date().getFullYear())</script>
            Paces &mdash; by <strong>Coderthemes</strong>
        </p>

    </div>
</div>

@endsection