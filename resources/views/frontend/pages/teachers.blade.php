@extends('layouts.app')
@section('title', 'Teachers')
@section('content')
@include('frontend.layouts.header')

<!-- Teacher Start -->

<style>
    .teacher-item{
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .teacher-item .teacher-image{
        height: 320px;
        overflow: hidden;
    }

    .teacher-item .teacher-image img{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .teacher-item .teacher-content{
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>

<div class="container-xxl py-5">
    <div class="container">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">
                Instructors
            </h6>

            <h1 class="mb-5">Our Expert Teachers</h1>
        </div>

        <div class="row g-4">

            <!-- Teacher 1 -->
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.1s">

                <div class="teacher-item bg-light w-100">

                    <div class="teacher-image">
                        <img class="img-fluid"
                             src="{{ asset('frontend/assets/img/teacher_1768809681_696de4d1843fd.png')}}"
                             alt="">
                    </div>

                    <div class="position-relative d-flex justify-content-center"
                         style="margin-top: -23px; z-index:1;">

                        <div class="bg-light d-flex justify-content-center pt-2 px-1">

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>

                    <div class="text-center p-4 teacher-content">

                        <h5 class="mb-2">MD. SHOBUJ AHMED</h5>

                        <small>
                            CEO CAD & CAM Design Specialist
                        </small>

                    </div>

                </div>
            </div>

            <!-- Teacher 2 -->
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.3s">

                <div class="teacher-item bg-light w-100">

                    <div class="teacher-image">
                        <img class="img-fluid"
                             src="{{ asset('frontend/assets/img/teacher_1768966125_697047ed1f56c.jpeg')}}"
                             alt="">
                    </div>

                    <div class="position-relative d-flex justify-content-center"
                         style="margin-top: -23px; z-index:1;">

                        <div class="bg-light d-flex justify-content-center pt-2 px-1">

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>

                    <div class="text-center p-4 teacher-content">

                        <h5 class="mb-2">Raiyan Rahman</h5>

                        <small>
                            Trainer Tool & Technology Institute (TTI)
                            BITAC Dhaka (ASSET Project)
                        </small>

                    </div>

                </div>
            </div>

            <!-- Teacher 3 -->
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.5s">

                <div class="teacher-item bg-light w-100">

                    <div class="teacher-image">
                        <img class="img-fluid"
                             src="{{ asset('frontend/assets/img/teacher_1769220318_697428de389f4.jpeg')}}"
                             alt="">
                    </div>

                    <div class="position-relative d-flex justify-content-center"
                         style="margin-top: -23px; z-index:1;">

                        <div class="bg-light d-flex justify-content-center pt-2 px-1">

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>

                    <div class="text-center p-4 teacher-content">

                        <h5 class="mb-2">Yousuf Khan Onik</h5>

                        <small>
                            CAD & CAM Design Specialist
                        </small>

                    </div>

                </div>
            </div>

            <!-- Teacher 4 -->
            <div class="col-lg-3 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.7s">

                <div class="teacher-item bg-light w-100">

                    <div class="teacher-image">
                        <img class="img-fluid"
                             src="{{ asset('frontend/assets/img/teacher_1770261699_69840cc36de24.png')}}"
                             alt="">
                    </div>

                    <div class="position-relative d-flex justify-content-center"
                         style="margin-top: -23px; z-index:1;">

                        <div class="bg-light d-flex justify-content-center pt-2 px-1">

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <a class="btn btn-sm-square btn-primary mx-1" href="">
                                <i class="fab fa-instagram"></i>
                            </a>

                        </div>
                    </div>

                    <div class="text-center p-4 teacher-content">

                        <h5 class="mb-2">Shariyar Ahmed Rifat</h5>

                        <small>
                            CAD Design Specialist
                        </small>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!-- Teacher End -->

@include('frontend.layouts.footer')
@endsection