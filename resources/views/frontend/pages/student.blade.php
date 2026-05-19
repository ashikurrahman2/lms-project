@extends('layouts.app')
@section('title','Student')
@section('content')
<!-- START HEADER -->
@include('frontend.layouts.header')

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
@include('frontend.layouts.footer')
<!-- END FOOTER -->
@endsection
