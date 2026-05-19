@extends('layouts.app')
@section('title','Leadership')
@section('content')
@include('frontend.layouts.header')
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

@include('frontend.layouts.footer')
@endsection