@extends('layouts.app')
@section('title','CAD-CAM|Home')
@section('content')

<!-- START HEADER -->
@include('frontend.layouts.header')
<!-- END HEADER -->
<!-- START SECTION BANNER -->
@include('frontend.layouts.slider')
<!-- END SECTION BANNER -->
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
<style>
html, body {
    overflow-x: hidden;
    max-width: 100%;
}
 
/* WOW animation mobile fix — invisible হওয়া বন্ধ */
@media (max-width: 991px) {
    .wow {
        visibility: visible !important;
        animation-name: none !important;
        -moz-animation-name: none !important;
        opacity: 1 !important;
        transform: none !important;
    }
}
</style>
 <!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            @foreach($svc as $index => $service)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="{{ $index * 0.2 + 0.1 }}s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">{{ $service->ser_title }}</h5>
                        <p>{{ $service->ser_desc }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
              @foreach ($ats as $abt)
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset($abt->image)}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">{{ $abt->heading }}</h1>
                    <p class="mb-4">{{ $abt->paragraph_1 }}</p>
                    <p class="mb-4">{{ $abt->paragraph_2 }}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        @endforeach
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/cat-1.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/cat-2.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/cat-3.jpg')}}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('frontend/assets/img/cat-4.jpg')}}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


<!-- Courses Start -->
<style>
    .course-item{
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .course-item img{
        width: 100%;
        height: 260px;
        object-fit: cover;
    }

    .course-item .course-content{
        flex-grow: 1;
    }

    .course-item .bottom-content{
        margin-top: auto;
    }
</style>

<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">
                Courses
            </h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div>

        <div class="row g-4 justify-content-center">

            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light w-100">
                    <div class="position-relative overflow-hidden">
                        
                        <!-- Dynamic Image -->
                        <img class="img-fluid" 
                             src="{{ asset($course->image) }}" 
                             alt="{{ $course->title }}"
                             style="width: 100%; height: 250px; object-fit: cover;">

                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- Link with Slug -->
                            <a href="{{ route('course.details', $course->slug) }}"
                               class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                               style="border-radius: 30px 0 0 30px;">
                                Read More
                            </a>

                            <a href="#"
                               class="flex-shrink-0 btn btn-sm btn-primary px-3"
                               style="border-radius: 0 30px 30px 0;">
                                Join Now
                            </a>
                        </div>
                    </div>

                    <div class="text-center p-4 pb-0 course-content">
                        <!-- Dynamic Price -->
                        <h3 class="mb-0">৳{{ number_format($course->price, 2) }}</h3>

                        <div class="mb-3">
                            <!-- Dynamic Star Rating -->
                            @for ($i = 1; $i <= 5; $i++)
                                <small class="fa fa-star {{ $i <= $course->rating ? 'text-primary' : 'text-muted' }}"></small>
                            @endfor
                            <small>({{ $course->review_count }})</small>
                        </div>

                        <!-- Dynamic Title Link -->
                        <h5 class="mb-4">
                            <a href="{{ route('course.details', $course->slug) }}" class="text-dark text-decoration-none">
                                {{ $course->title }}
                            </a>
                        </h5>
                    </div>

                    <div class="d-flex border-top bottom-content">
                        <!-- Dynamic Instructor -->
                        <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-user-tie text-primary me-2"></i>
                            {{ $course->instructor_name }}
                        </small>

                        <!-- Dynamic Duration -->
                        <small class="flex-fill text-center border-end py-2">
                            <i class="fa fa-clock text-primary me-2"></i>
                            {{ $course->duration }}
                        </small>

                        <!-- Dynamic Students -->
                        <small class="flex-fill text-center py-2">
                            <i class="fa fa-user text-primary me-2"></i>
                            {{ $course->student_count }} Students
                        </small>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Courses End -->

 <!-- Student Start -->

<style>
    .team-item{
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .team-item .overflow-hidden{
        height: 320px;
    }

    .team-item img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-item .text-center{
        flex-grow: 1;
    }
</style>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Students</h6>
            <h1 class="mb-5">Our Successful Students</h1>
        </div>

        <div class="row g-4">
            @foreach ($stds as $index => $student)
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp" 
                 data-wow-delay="{{ $loop->index * 0.2 }}s">
                <div class="team-item bg-light w-100">
                    <div class="overflow-hidden">
                        <img class="img-fluid" 
                             src="{{ asset($student->image) }}" 
                             alt="{{ $student->name }}">
                    </div>

                    <div class="position-relative d-flex justify-content-center"
                         style="margin-top: -23px; z-index: 1;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            @if($student->facebook)
                            <a class="btn btn-sm-square btn-primary mx-1" href="{{ $student->facebook }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            @endif

                            @if($student->linkedin)
                            <a class="btn btn-sm-square btn-primary mx-1" href="{{ $student->linkedin }}" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            @endif
                        </div>
                    </div>

                    <div class="text-center p-4">
                        <h5 class="mb-0">{{ $student->name }}</h5>
                        <small>{{ $student->student_id }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Student End -->

<!-- Teacher Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h1 class="mb-5">Our Expert Teachers</h1>
        </div>
        <div class="row g-4">
            @foreach ($trs as $teacher)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid"
                            src="{{ asset($teacher->t_img) }}"
                            alt="{{ $teacher->t_name }}">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{ $teacher->t_name }}</h5>
                        <small>{{ $teacher->t_design }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Teacher End -->


    {{-- Our Training Gallery Start --}}
@php
    $galleries = \App\Models\Gallary::latest()->take(4)->get();
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
                        data-name="{{ $gallery->g_title ?? 'Gallery Image' }}"
                        data-role="">
                        <div class="card-img-wrap">
                            <img src="{{ asset($gallery->g_img) }}" alt="{{ $gallery->g_title ?? 'Gallery Image' }}">
                        </div>
                        <div class="card-info">
                            @if ($gallery->g_title)
                                <h5 class="card-name">{{ $gallery->g_title }}</h5>
                            @endif
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
                <div class="vg3d-dots" id="vg3dDots"></div>
                <button class="nav-btn" id="galleryNext" aria-label="Next">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-4">
                <a href="{{ route('gal') }}" class="btn btn-primary py-2 px-4">
                    View More <i class="fa fa-arrow-right ms-2"></i>
                </a>
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
            {{-- <div class="modal-socials">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div> --}}
        </div>
    </div>
</div>

<script>
    // Modal open — data attribute থেকে সরাসরি নেওয়া
    document.querySelectorAll('.gallery-card').forEach(function (card) {
        card.querySelector('.card-img-wrap').addEventListener('click', function () {
            document.getElementById('modalImg').src          = card.dataset.src;
            document.getElementById('modalImg').alt          = card.dataset.name;
            document.getElementById('modalName').textContent = card.dataset.name;
            document.getElementById('modalRole').textContent = card.dataset.role;
            document.getElementById('teacherModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    function closeModal() {
        document.getElementById('teacherModal').classList.remove('active');
        document.body.style.overflow = '';
    }

    document.getElementById('modalClose').addEventListener('click', closeModal);
    document.getElementById('teacherModal').addEventListener('click', function (e) {
        if (e.target === this) closeModal();
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeModal();
    });
</script>
<style>
    .teacher-modal-overlay {
    display: none; /* বা visibility: hidden */
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.7);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}

.teacher-modal-overlay.active {
    display: flex; /* active হলে দেখাবে */
}
</style>
<!-- Leadership Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Leadership</h6>
            <h1 class="mb-5">Our Leadership</h1>
        </div>
        <div class="row g-4">
            @foreach($leaderships as $leadership)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    {{-- Fixed image container --}}
                    <div style="width: 100%; height: 280px; overflow: hidden;">
                        <img src="{{ asset($leadership->l_img) }}"
                             alt="{{ $leadership->l_name }}"
                             style="width: 100%; height: 100%; object-fit: cover; object-position: top;">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            @if($leadership->l_fc)
                            <a class="btn btn-sm-square btn-primary mx-1" href="{{ $leadership->l_fc }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            @endif
                            @if($leadership->l_ldn)
                            <a class="btn btn-sm-square btn-primary mx-1" href="{{ $leadership->l_ldn }}" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{ $leadership->l_name }}</h5>
                        <small>{{ $leadership->l_desg }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Leadership End -->

{{-- 3D Video Training Gallery Start --}}
@php
    $videos = \App\Models\Video::latest()->get();
@endphp

<section class="vg3d-section">
    <div class="container">

        <div class="vg3d-header">
            <span class="vg3d-badge">Video Gallery</span>
            <h1 class="vg3d-title">Our Video Gallery</h1>
        </div>

        <div class="vg3d-stage">
            <div class="vg3d-track" id="vg3dTrack">

                @forelse ($videos as $index => $video)
                    <div class="vg3d-card"
                        data-index="{{ $index }}"
                        data-src="{{ asset($video->video_file) }}">
                        <div class="vg3d-thumb-wrap">
                            <video src="{{ asset($video->video_file) }}"
                                   style="width:100%; height:100%; object-fit:cover;"
                                   preload="metadata">
                            </video>
                        </div>
                        <div class="vg3d-overlay">
                            <div class="vg3d-play-ring"><i class="fa fa-play"></i></div>
                        </div>
                        <div class="vg3d-card-info">
                            <p>Video {{ $index + 1 }}</p>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5 w-100">
                        <p class="text-muted">No videos found.</p>
                    </div>
                @endforelse

            </div>
        </div>

        {{-- Navigation --}}
        <div class="vg3d-nav">
            <button class="vg3d-btn" id="vg3dPrev" aria-label="Previous">
                <i class="fa fa-arrow-left"></i>
            </button>
            <div class="vg3d-dots" id="vg3dDots"></div>
            <button class="vg3d-btn" id="vg3dNext" aria-label="Next">
                <i class="fa fa-arrow-right"></i>
            </button>
        </div>

    </div>
</section>

{{-- ===================== MODAL ===================== --}}
<div id="vg3dModal" class="vg3d-modal-bg"
    role="dialog"
    aria-modal="true"
    aria-label="Video preview"
    style="display:none; opacity:0; visibility:hidden;">
    <div class="vg3d-modal-box">
        <div class="vg3d-modal-top">
            <video id="vg3dModalVideo" src="" class="vg3d-modal-thumb" controls style="width:100%;"></video>
            <button class="vg3d-modal-close" id="vg3dModalClose" aria-label="Close modal">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="vg3d-modal-body">
            <h4 id="vg3dModalTitle"></h4>
            <div class="vg3d-modal-actions">
                <button class="vg3d-act-btn"><i class="fa fa-share-alt"></i> Share</button>
                <button class="vg3d-act-btn"><i class="fa fa-download"></i> Download</button>
                <button class="vg3d-act-btn"><i class="fa fa-bookmark"></i> Save</button>
            </div>
        </div>
    </div>
</div>

{{-- 3D Video Training Gallery End --}}


{{-- ===================== CSS ===================== --}}
<style>
    /* -------- Section -------- */
    .vg3d-section {
        background: #ffffff;
        padding: 60px 0 50px;
    }

    /* -------- Header -------- */
    .vg3d-header {
        text-align: center;
        margin-bottom: 50px;
    }
    .vg3d-badge {
        display: inline-block;
        background: #3b82f6;
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        padding: 5px 20px;
        border-radius: 20px;
        margin-bottom: 12px;
    }
    .vg3d-title {
        font-size: 34px;
        font-weight: 700;
        color: #090909;
        margin: 0;
    }

    /* -------- 3D Stage -------- */
    .vg3d-stage {
        perspective: 1100px;
        height: 360px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: visible;
    }

    .vg3d-track {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
    }

    /* -------- Card -------- */
    .vg3d-card {
        position: absolute;
        width: 280px;
        height: 320px;
        border-radius: 18px;
        overflow: hidden;
        cursor: pointer;
        border: 1.5px solid rgba(255, 255, 255, 0.08);
        transform-style: preserve-3d;
        transition: transform .5s cubic-bezier(.4, 0, .2, 1),
                    opacity .5s ease,
                    box-shadow .5s ease;
        will-change: transform, opacity;
    }

    .vg3d-thumb-wrap {
        width: 100%;
        height: 100%;
    }
    .vg3d-thumb-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        filter: brightness(.8);
        transition: filter .4s;
    }

    /* -------- Overlay & Play -------- */
    .vg3d-overlay {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0);
        transition: background .3s;
    }
    .vg3d-card.vg3d-active .vg3d-overlay {
        background: rgba(0, 0, 0, .15);
    }

    .vg3d-play-ring {
        width: 62px;
        height: 62px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .92);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transform: scale(.7);
        transition: opacity .3s, transform .3s;
        box-shadow: 0 6px 24px rgba(0,0,0,.3);
    }
    .vg3d-card.vg3d-active .vg3d-play-ring {
        opacity: 1;
        transform: scale(1);
    }
    .vg3d-play-ring i {
        font-size: 20px;
        color: #3b82f6;
        margin-left: 3px;
    }

    /* -------- Card Info Label -------- */
    .vg3d-card-info {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        padding: 28px 16px 14px;
        background: linear-gradient(to top, rgba(0,0,0,.88), transparent);
        opacity: 0;
        transform: translateY(6px);
        transition: opacity .3s, transform .3s;
    }
    .vg3d-card.vg3d-active .vg3d-card-info {
        opacity: 1;
        transform: translateY(0);
    }
    .vg3d-card-info p {
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        margin: 0 0 3px;
    }
    .vg3d-card-info span {
        font-size: 12px;
        color: rgba(255,255,255,.6);
    }

    /* -------- Navigation -------- */
    .vg3d-nav {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
        margin-top: 32px;
    }
    .vg3d-btn {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 1.5px solid rgba(255,255,255,.18);
        background: rgba(255,255,255,.06);
        color: #050505;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        transition: background .2s, border-color .2s;
    }
    .vg3d-btn:hover {
        background: rgba(255,255,255,.15);
        border-color: rgba(255,255,255,.4);
    }

    .vg3d-dots {
        display: flex;
        gap: 8px;
        align-items: center;
    }
    .vg3d-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: rgba(255,255,255,.25);
        cursor: pointer;
        transition: background .3s, transform .3s;
        border: none;
        padding: 0;
    }
    .vg3d-dot.vg3d-dot-active {
        background: #3b82f6;
        transform: scale(1.35);
    }

    /* -------- Modal Overlay -------- */
    .vg3d-modal-bg {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .9);
        z-index: 99999;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
    }
    .vg3d-modal-bg.vg3d-modal-open {
        display: flex;
    }

    /* -------- Modal Box -------- */
    .vg3d-modal-box {
        background: #0d1526;
        border-radius: 18px;
        width: 100%;
        max-width: 760px;
        overflow: hidden;
        animation: vg3dUp .32s ease;
    }
    @keyframes vg3dUp {
        from { transform: translateY(24px); opacity: 0; }
        to   { transform: translateY(0);   opacity: 1; }
    }

    .vg3d-modal-top {
        position: relative;
    }
    .vg3d-modal-thumb {
        width: 100%;
        aspect-ratio: 16 / 9;
        object-fit: cover;
        display: block;
        filter: brightness(.5);
    }
    .vg3d-modal-play-center {
        position: absolute;
        inset: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .vg3d-modal-play-big {
        width: 74px;
        height: 74px;
        border-radius: 50%;
        background: #3b82f6;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 32px rgba(59,130,246,.55);
        cursor: pointer;
        transition: transform .2s;
    }
    .vg3d-modal-play-big:hover { transform: scale(1.08); }
    .vg3d-modal-play-big i {
        font-size: 28px;
        color: #fff;
        margin-left: 4px;
    }
    .vg3d-modal-close {
        position: absolute;
        top: 12px; right: 14px;
        width: 36px; height: 36px;
        border-radius: 50%;
        border: none;
        background: rgba(255,255,255,.14);
        color: #fff;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        transition: background .2s;
    }
    .vg3d-modal-close:hover { background: rgba(255,255,255,.28); }

    .vg3d-modal-body {
        padding: 18px 22px 22px;
    }
    .vg3d-modal-body h4 {
        font-size: 17px;
        font-weight: 600;
        color: #f1f5f9;
        margin: 0 0 5px;
    }
    .vg3d-modal-body > p {
        font-size: 13px;
        color: rgba(255,255,255,.45);
        margin: 0;
    }
    .vg3d-modal-actions {
        display: flex;
        gap: 8px;
        margin-top: 16px;
        flex-wrap: wrap;
    }
    .vg3d-act-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255,255,255,.07);
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 8px;
        color: rgba(255,255,255,.72);
        font-size: 12px;
        padding: 8px 16px;
        cursor: pointer;
        transition: background .2s, color .2s;
    }
    .vg3d-act-btn:hover {
        background: rgba(255,255,255,.16);
        color: #fff;
    }
    .vg3d-act-btn i { font-size: 13px; }

    /* -------- Responsive -------- */
    @media (max-width: 768px) {
        .vg3d-stage { height: 300px; }
        .vg3d-card  { width: 220px; height: 260px; }
    }
    @media (max-width: 480px) {
        .vg3d-stage { height: 260px; }
        .vg3d-card  { width: 190px; height: 230px; }
        .vg3d-title { font-size: 24px; }
    }
</style>



{{-- ===================== JS ===================== --}}

<script>
(function () {
    const cards    = Array.from(document.querySelectorAll('.vg3d-card'));
    const track    = document.getElementById('vg3dTrack');
    const dotsWrap = document.getElementById('vg3dDots');
    const prevBtn  = document.getElementById('vg3dPrev');
    const nextBtn  = document.getElementById('vg3dNext');
    const modal    = document.getElementById('vg3dModal');
    const mVideo   = document.getElementById('vg3dModalVideo');
    const mTitle   = document.getElementById('vg3dModalTitle');
    const mClose   = document.getElementById('vg3dModalClose');

    const n = cards.length;
    let current = 0;

    /* --- Build dots --- */
    const dots = cards.map((_, i) => {
        const d = document.createElement('button');
        d.className = 'vg3d-dot';
        d.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        d.addEventListener('click', () => { current = i; render(); });
        dotsWrap.appendChild(d);
        return d;
    });

    /* --- Render 3D positions --- */
    function render() {
        cards.forEach((c, i) => {
            let offset = ((i - current) % n + n) % n;
            if (offset > n / 2) offset -= n;

            const tx = offset * 210;
            const tz = -Math.abs(offset) * 170;
            const ry = -offset * 28;
            const sc = Math.max(offset === 0 ? 1 : 0.82 - Math.abs(offset) * 0.06, 0.6);
            const op = Math.max(offset === 0 ? 1 : 0.5 - Math.abs(offset) * 0.08, 0);
            const zi = 10 - Math.abs(offset) * 2;
            const sh = offset === 0 ? '0 24px 60px rgba(0,0,0,0.6)' : 'none';

            c.style.transform = `translateX(${tx}px) translateZ(${tz}px) rotateY(${ry}deg) scale(${sc})`;
            c.style.opacity   = op;
            c.style.zIndex    = zi;
            c.style.boxShadow = sh;
            c.classList.toggle('vg3d-active', offset === 0);
        });

        dots.forEach((d, i) => d.classList.toggle('vg3d-dot-active', i === current));
    }

    /* --- Open Modal --- */
    function openModal(card) {
        mVideo.src         = card.dataset.src;
        mTitle.textContent = card.dataset.title || ('Video ' + (parseInt(card.dataset.index) + 1));

        modal.style.display       = 'flex';
        modal.style.opacity       = '1';
        modal.style.visibility    = 'visible';
        modal.style.pointerEvents = 'all';

        document.body.style.overflow = 'hidden';
        mVideo.load();
        mVideo.play().catch(() => {});
    }

    /* --- Close Modal --- */
    function closeModal() {
        mVideo.pause();
        mVideo.src = '';

        modal.style.display       = 'none';
        modal.style.opacity       = '0';
        modal.style.visibility    = 'hidden';
        modal.style.pointerEvents = 'none';

        document.body.style.overflow = '';
    }

    /* --- Card click --- */
    cards.forEach((c, i) => {
        c.addEventListener('click', () => {
            let offset = ((i - current) % n + n) % n;
            if (offset > n / 2) offset -= n;
            if (offset === 0) {
                openModal(c);
            } else {
                current = i;
                render();
            }
        });
    });

    /* --- Nav buttons --- */
    prevBtn.addEventListener('click', () => { current = (current - 1 + n) % n; render(); });
    nextBtn.addEventListener('click', () => { current = (current + 1) % n;     render(); });

    /* --- Modal close --- */
    mClose.addEventListener('click', closeModal);
    modal.addEventListener('click', e => { if (e.target === modal) closeModal(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });

    /* --- Touch / Swipe --- */
    let touchStartX = 0;
    track.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
    track.addEventListener('touchend', e => {
        const dx = e.changedTouches[0].clientX - touchStartX;
        if (Math.abs(dx) > 40) {
            current = dx < 0 ? (current + 1) % n : (current - 1 + n) % n;
            render();
        }
    });

    /* --- Auto-play (optional) --- */
    // setInterval(() => { current = (current + 1) % n; render(); }, 4000);

    render();
})();
</script>

<!-- END MAIN CONTENT -->
<!-- START FOOTER -->
@include('frontend.layouts.footer')
<!-- END FOOTER -->


@endsection
