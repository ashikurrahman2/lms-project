@extends('layouts.app') <!-- আপনার মেইন লেআউট ফাইলটি এখানে দিন -->

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{ $course->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Courses</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Course Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Course Detail Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Left Side: Course Info -->
            <div class="col-lg-8">
                <img class="img-fluid w-100 rounded mb-4" src="{{ asset($course->image) }}" alt="{{ $course->title }}">
                
                <div class="mb-5">
                    <h2 class="mb-4">About This Course</h2>
                    <p>Welcome to <strong>{{ $course->title }}</strong>. This course is specifically designed for students who want to excel in their professional careers. Led by <strong>{{ $course->instructor_name }}</strong>, you will learn industry-standard skills and practical applications.</p>
                    
                    <h4 class="mt-4 mb-3">What You Will Learn</h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-check text-primary me-3"></i>Comprehensive understanding of the topic.</li>
                        <li><i class="fa fa-check text-primary me-3"></i>Hands-on practical training.</li>
                        <li><i class="fa fa-check text-primary me-3"></i>Industry-relevant case studies.</li>
                        <li><i class="fa fa-check text-primary me-3"></i>Direct guidance from {{ $course->instructor_name }}.</li>
                    </ul>
                </div>

                <!-- Course Curriculum (Dummy) -->
                <div class="mb-5">
                    <h2 class="mb-4">Course Curriculum</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Module 1: Introduction
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Basic overview of the course and getting started.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Module 2: Core Concepts
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Deep dive into the technical details and advanced techniques.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Sidebar -->
            <div class="col-lg-4">
                <div class="bg-light p-4 rounded mb-5">
                    <h3 class="mb-4">Course Features</h3>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span><i class="fa fa-money-bill-alt text-primary me-2"></i>Price</span>
                        <span class="fw-bold">৳{{ number_format($course->price, 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span><i class="fa fa-user-tie text-primary me-2"></i>Instructor</span>
                        <span>{{ $course->instructor_name }}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span><i class="fa fa-clock text-primary me-2"></i>Duration</span>
                        <span>{{ $course->duration }}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span><i class="fa fa-users text-primary me-2"></i>Students</span>
                        <span>{{ $course->student_count }}</span>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2">
                        <span><i class="fa fa-star text-primary me-2"></i>Rating</span>
                        <span>{{ $course->rating }} ({{ $course->review_count }} Reviews)</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 mb-3">
                        <span><i class="fa fa-certificate text-primary me-2"></i>Certificate</span>
                        <span>Yes</span>
                    </div>
                    
                    <a href="#" class="btn btn-primary w-100 py-3 mt-2" style="border-radius: 30px;">Enroll This Course</a>
                </div>

                <div class="bg-light p-4 rounded">
                    <h4 class="mb-4">Related Courses</h4>
                    <!-- এখানে চাইলে অন্য ছোট ছোট কোর্স কার্ড দিতে পারেন -->
                    <p class="small text-muted">More courses coming soon...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Course Detail End -->

@endsection