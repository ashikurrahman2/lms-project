@extends('layouts.app')
@section('title','Gallery')
@section('content')
@include('frontend.layouts.header')
{{-- Our Training Gallery Start --}}
{{-- Our Training Gallery Start --}}
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
            <h1 class="mb-5">Our Training Gallery</h1>
        </div>

        <!-- 3D Gallery -->
        <div class="gallery-wrap">
            <div class="gallery-stage" id="galleryStage">

                <div class="gallery-card" data-index="0">
                    <div class="card-img-wrap">
                        <img src="{{ asset('frontend/assets/img/course_1771728981_699a7055ce538.png') }}" alt="MD. SHOBUJ AHMED">
                    </div>
                    <div class="card-info">
                        <h5 class="card-name">MD. SHOBUJ AHMED</h5>
                        <p class="card-role">CEO, CAD & CAM Design Specialist</p>
                        <div class="card-socials">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="gallery-card" data-index="1">
                    <div class="card-img-wrap">
                        <img src="{{ asset('frontend/assets/img/gallery_1768881663_696efdffec162.jpg') }}" alt="Raiyan Rahman">
                    </div>
                    <div class="card-info">
                        <h5 class="card-name">Raiyan Rahman</h5>
                        <p class="card-role">Trainer, Tool & Technology Institute (TTI) BITAC Dhaka</p>
                        <div class="card-socials">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="gallery-card" data-index="2">
                    <div class="card-img-wrap">
                        <img src="{{ asset('frontend/assets/img/gallery_1768896393_696f37899525d.jpg') }}" alt="Yousuf Khan Onik">
                    </div>
                    <div class="card-info">
                        <h5 class="card-name">Yousuf Khan Onik</h5>
                        <p class="card-role">CAD & CAM Design Specialist</p>
                        <div class="card-socials">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="gallery-card" data-index="3">
                    <div class="card-img-wrap">
                        <img src="{{ asset('frontend/assets/img/gallery_1768881578_696efdaabcaa9.jpg') }}" alt="Shariyar Ahmed Rifat">
                    </div>
                    <div class="card-info">
                        <h5 class="card-name">Shariyar Ahmed Rifat</h5>
                        <p class="card-role">CAD Design Specialist</p>
                        <div class="card-socials">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

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
            <div class="modal-socials">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

{{-- Our Training Gallery End --}}

@include('frontend.layouts.footer')
@endsection