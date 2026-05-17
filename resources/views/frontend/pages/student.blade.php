@extends('layouts.app')
@section('title','Student')
@section('content')
<!-- START HEADER -->
@include('frontend.layouts.header')

 {{-- Our successfull students Start --}}
<div class="container-xxl py-5" style="background:#f4f6fb;">
    <div class="container">

        {{-- Section Header --}}
        <div class="text-center wow fadeInUp mb-5" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Students</h6>
            <h1 style="font-size:36px; font-weight:800; color:#1a1a2e; margin-bottom:10px;">Our Successful Students</h1>
            <div style="width:60px; height:4px; background:linear-gradient(90deg,#1976d2,#00c897); border-radius:2px; margin:0 auto 16px;"></div>
            <p style="font-size:15px; color:#666; max-width:500px; margin:0 auto;">
                Meet our talented students who are shaping their future with technical skills
            </p>
        </div>

        {{-- Student Cards Grid — সবসময় 4 column --}}
        <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:16px; padding:0 0 2rem;">

            {{-- Student Card 1 --}}
            <div class="wow zoomIn" data-wow-delay="0.2s"
                 style="background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-6px)'"
                 onmouseout="this.style.transform='translateY(0)'">

                <div style="position:relative; aspect-ratio:4/3; overflow:hidden;">
                    <img src="{{ asset('frontend/assets/img/photo-1535713875002-d1d0cf377fde.avif') }}" alt="Shobuj"
                         style="width:100%; height:100%; object-fit:cover; object-position:top;">
                    <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 55%);"></div>
                    <span style="position:absolute; bottom:6px; right:6px; background:#1976d2; color:#fff; font-size:9px; font-weight:700; padding:2px 7px; border-radius:20px;">
                        Batch: 2026
                    </span>
                </div>
                <div style="padding:8px; text-align:center;">
                    <h5 style="font-size:12px; font-weight:700; color:#1a1a2e; margin:0 0 4px; text-transform:uppercase; letter-spacing:0.5px;">Shobuj</h5>
                    <span style="display:inline-block; background:#fff0f0; color:#e53935; font-size:9px; font-weight:600; padding:2px 8px; border-radius:20px; margin-bottom:6px;">
                        STU20260001
                    </span>
                    <div style="display:flex; align-items:center; justify-content:center; gap:4px; color:#1976d2; font-size:11px; font-weight:600;">
                        🎓 Industrial Training
                    </div>
                </div>
                <div style="background:linear-gradient(90deg,#1976d2,#00c897); height:3px;"></div>
            </div>

            {{-- Student Card 2 --}}
            <div class="wow zoomIn" data-wow-delay="0.3s"
                 style="background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-6px)'"
                 onmouseout="this.style.transform='translateY(0)'">

                <div style="position:relative; aspect-ratio:4/3; overflow:hidden;">
                    <img src="{{ asset('frontend/assets/img/1771866570_699c89caa6b0f.jpg') }}" alt="Farid Hasan"
                         style="width:100%; height:100%; object-fit:cover; object-position:top;">
                    <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 55%);"></div>
                    <span style="position:absolute; bottom:6px; right:6px; background:#1976d2; color:#fff; font-size:9px; font-weight:700; padding:2px 7px; border-radius:20px;">
                        Batch: 2026
                    </span>
                </div>
                <div style="padding:8px; text-align:center;">
                    <h5 style="font-size:12px; font-weight:700; color:#1a1a2e; margin:0 0 4px; text-transform:uppercase; letter-spacing:0.5px;">Farid Hasan</h5>
                    <span style="display:inline-block; background:#fff0f0; color:#e53935; font-size:9px; font-weight:600; padding:2px 8px; border-radius:20px; margin-bottom:6px;">
                        STU20260002
                    </span>
                    <div style="display:flex; align-items:center; justify-content:center; gap:4px; color:#1976d2; font-size:11px; font-weight:600;">
                        🎓 Other
                    </div>
                </div>
                <div style="background:linear-gradient(90deg,#1976d2,#00c897); height:3px;"></div>
            </div>

            {{-- Student Card 3 --}}
            <div class="wow zoomIn" data-wow-delay="0.4s"
                 style="background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-6px)'"
                 onmouseout="this.style.transform='translateY(0)'">

                <div style="position:relative; aspect-ratio:4/3; overflow:hidden;">
                    <img src="{{ asset('frontend/assets/img/photo-1535713875002-d1d0cf377fde.avif') }}" alt="Student 3"
                         style="width:100%; height:100%; object-fit:cover; object-position:top;">
                    <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 55%);"></div>
                    <span style="position:absolute; bottom:6px; right:6px; background:#00c897; color:#fff; font-size:9px; font-weight:700; padding:2px 7px; border-radius:20px;">
                        Batch: 2025
                    </span>
                </div>
                <div style="padding:8px; text-align:center;">
                    <h5 style="font-size:12px; font-weight:700; color:#1a1a2e; margin:0 0 4px; text-transform:uppercase; letter-spacing:0.5px;">Rahul Ahmed</h5>
                    <span style="display:inline-block; background:#fff0f0; color:#e53935; font-size:9px; font-weight:600; padding:2px 8px; border-radius:20px; margin-bottom:6px;">
                        STU20250010
                    </span>
                    <div style="display:flex; align-items:center; justify-content:center; gap:4px; color:#1976d2; font-size:11px; font-weight:600;">
                        🎓 CNC Programming
                    </div>
                </div>
                <div style="background:linear-gradient(90deg,#1976d2,#00c897); height:3px;"></div>
            </div>

            {{-- Student Card 4 --}}
            <div class="wow zoomIn" data-wow-delay="0.5s"
                 style="background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform 0.3s ease;"
                 onmouseover="this.style.transform='translateY(-6px)'"
                 onmouseout="this.style.transform='translateY(0)'">

                <div style="position:relative; aspect-ratio:4/3; overflow:hidden;">
                    <img src="{{ asset('frontend/assets/img/1771866570_699c89caa6b0f.jpg') }}" alt="Student 4"
                         style="width:100%; height:100%; object-fit:cover; object-position:top;">
                    <div style="position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,0.5) 0%, transparent 55%);"></div>
                    <span style="position:absolute; bottom:6px; right:6px; background:#00c897; color:#fff; font-size:9px; font-weight:700; padding:2px 7px; border-radius:20px;">
                        Batch: 2025
                    </span>
                </div>
                <div style="padding:8px; text-align:center;">
                    <h5 style="font-size:12px; font-weight:700; color:#1a1a2e; margin:0 0 4px; text-transform:uppercase; letter-spacing:0.5px;">Karim Molla</h5>
                    <span style="display:inline-block; background:#fff0f0; color:#e53935; font-size:9px; font-weight:600; padding:2px 8px; border-radius:20px; margin-bottom:6px;">
                        STU20250015
                    </span>
                    <div style="display:flex; align-items:center; justify-content:center; gap:4px; color:#1976d2; font-size:11px; font-weight:600;">
                        🎓 CAD Design
                    </div>
                </div>
                <div style="background:linear-gradient(90deg,#1976d2,#00c897); height:3px;"></div>
            </div>

        </div>

        {{-- View All Button --}}
        <div style="text-align:center; margin-top:10px;">
            <a href="#"
               style="
                   display:inline-flex;
                   align-items:center;
                   gap:10px;
                   padding:13px 35px;
                   background:#1976d2;
                   color:#fff;
                   font-size:15px;
                   font-weight:700;
                   border-radius:30px;
                   text-decoration:none;
                   letter-spacing:0.5px;
                   box-shadow:0 6px 20px rgba(25,118,210,0.35);
                   transition:all 0.3s ease;
               "
               onmouseover="this.style.background='#e53935'; this.style.boxShadow='0 6px 20px rgba(229,57,53,0.35)';"
               onmouseout="this.style.background='#1976d2'; this.style.boxShadow='0 6px 20px rgba(25,118,210,0.35)';"
            >
                👥 View All Students
                <span style="font-size:18px;">→</span>
            </a>
        </div>

    </div>
</div>
{{-- Our successfull students End --}}
@include('frontend.layouts.footer')
<!-- END FOOTER -->
@endsection
