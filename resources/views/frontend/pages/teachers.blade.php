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

@include('frontend.layouts.footer')
@endsection