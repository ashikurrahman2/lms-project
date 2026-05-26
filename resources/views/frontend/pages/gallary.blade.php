@extends('layouts.app')
@section('title','Gallery')
@section('content')
@include('frontend.layouts.header')

@php
    $galleries = \App\Models\Gallary::latest()->get();
@endphp

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
            <h1 class="mb-5">Our Training Gallery</h1>
        </div>

        <!-- 3D Gallery -->
        <div class="gallery-wrap">
            <div class="gallery-stage" id="galleryStage">

                @forelse ($galleries as $index => $gallery)
                    <div class="gallery-card"
                        data-index="{{ $index }}"
                        data-src="{{ asset($gallery->g_img) }}"
                        data-title="{{ $gallery->g_title ?? 'Gallery Image' }}"
                        data-role="">
                        <div class="card-img-wrap">
                            <img src="{{ asset($gallery->g_img) }}" alt="{{ $gallery->g_title ?? 'Gallery Image' }}">
                        </div>
                        <div class="card-info">
                            @if ($gallery->g_title)
                                <h5 class="card-name">{{ $gallery->g_title }}</h5>
                            @endif
                            {{-- <div class="card-socials">
                                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5 w-100">
                        <p class="text-muted">No images found.</p>
                    </div>
                @endforelse

            </div>

            <!-- Navigation Buttons -->
            <div class="gallery-nav">
                <button class="nav-btn" id="galleryPrev" aria-label="Previous">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <button class="nav-btn" id="galleryNext" aria-label="Next">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>

    </div>
</div>

<!-- ===================== MODAL ===================== -->
<div id="teacherModal" class="teacher-modal-overlay" role="dialog" aria-modal="true" aria-label="Instructor details">
    <div class="teacher-modal-box">
        <button class="modal-close-btn" id="modalClose" aria-label="Close modal">
            <i class="fa fa-times"></i>
        </button>
        <div class="modal-img-wrap">
            <img id="modalImg" src="" alt="">
        </div>
        <div class="modal-body-info">
            <h4 id="modalName"></h4>
            <p id="modalRole"></p>
        </div>
    </div>
</div>

@include('frontend.layouts.footer')
@endsection