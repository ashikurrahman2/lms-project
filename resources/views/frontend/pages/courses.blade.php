@extends('layouts.app')
@section('content')
@include('frontend.layouts.header')

    {{-- Our training courses start --}}
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Our Training Courses</h1>
            <p style="
                display: inline-block;
                font-size: 15px;
                color: #555;
                margin: -10px auto 30px;
                padding: 10px 20px;
                line-height: 1.8;
                letter-spacing: 0.3px;
                border-left: 4px solid #1976d2;
                border-right: 4px solid #e53935;
                background: #f8faff;
                border-radius: 8px;
            ">
                Professional courses with
                <span style="color:#1976d2; font-weight:700;">NSDA certification</span>
                and
                <span style="color:#e53935; font-weight:700;">industry recognition</span>
                — building skilled engineers for tomorrow's workforce 🚀
            </p>
        </div>

        {{-- Cards Grid --}}
        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap:16px; padding:1rem 0;">

            {{-- Card 1: Graphic Design --}}
            <div class="wow zoomIn" data-wow-delay="0.3s"
                 style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
                <a href="#" style="text-decoration:none;">
                    <div style="position:relative; aspect-ratio:16/9; overflow:hidden;">
                        <img src="{{ asset('frontend/assets/img/cat-2.jpg') }}" alt="Graphic Design"
                             style="width:100%; height:100%; object-fit:cover;">
                        <div style="position:absolute; inset:0; background:rgba(0,0,0,0.25);"></div>
                        <span style="position:absolute; top:8px; right:8px; background:#e53935; color:#fff; font-size:10px; font-weight:600; padding:2px 8px; border-radius:20px;">Popular</span>
                    </div>
                    <div style="padding:12px;">
                        <p style="font-size:13px; font-weight:700; color:#111; margin:0 0 5px;">Graphic Design</p>
                        <p style="font-size:12px; color:#1976d2; margin:0 0 5px;">📚 49 Courses</p>
                        <p style="font-size:16px; font-weight:700; color:#e53935; margin:0 0 8px;">৳ 8,000</p>
                        <div style="display:flex; align-items:center; gap:5px; margin-bottom:12px;">
                            <span style="color:#1976d2; font-size:12px;">✔</span>
                            <span style="font-size:12px; color:#555;">Design & Creativity</span>
                        </div>
                        <div style="display:flex; align-items:center; justify-content:center; gap:6px; width:100%; padding:8px; background:#1976d2; color:#fff; border-radius:8px; font-size:12px; font-weight:600;">
                            🛒 Enroll Now
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 2: Video Editing --}}
            <div class="wow zoomIn" data-wow-delay="0.5s"
                 style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
                <a href="#" style="text-decoration:none;">
                    <div style="position:relative; aspect-ratio:16/9; overflow:hidden;">
                        <img src="{{ asset('frontend/assets/img/cat-3.jpg') }}" alt="Video Editing"
                             style="width:100%; height:100%; object-fit:cover;">
                        <div style="position:absolute; inset:0; background:rgba(0,0,0,0.25);"></div>
                        <span style="position:absolute; top:8px; right:8px; background:#e53935; color:#fff; font-size:10px; font-weight:600; padding:2px 8px; border-radius:20px;">Popular</span>
                    </div>
                    <div style="padding:12px;">
                        <p style="font-size:13px; font-weight:700; color:#111; margin:0 0 5px;">Video Editing</p>
                        <p style="font-size:12px; color:#1976d2; margin:0 0 5px;">📚 49 Courses</p>
                        <p style="font-size:16px; font-weight:700; color:#e53935; margin:0 0 8px;">৳ 10,000</p>
                        <div style="display:flex; align-items:center; gap:5px; margin-bottom:12px;">
                            <span style="color:#1976d2; font-size:12px;">✔</span>
                            <span style="font-size:12px; color:#555;">Film & Media Production</span>
                        </div>
                        <div style="display:flex; align-items:center; justify-content:center; gap:6px; width:100%; padding:8px; background:#1976d2; color:#fff; border-radius:8px; font-size:12px; font-weight:600;">
                            🛒 Enroll Now
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 3: CNC Programming --}}
            <div class="wow zoomIn" data-wow-delay="0.7s"
                 style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
                <a href="#" style="text-decoration:none;">
                    <div style="position:relative; aspect-ratio:16/9; overflow:hidden;">
                        <img src="{{ asset('frontend/assets/img/cat-4.jpg') }}" alt="CNC Programming"
                             style="width:100%; height:100%; object-fit:cover;">
                        <div style="position:absolute; inset:0; background:rgba(0,0,0,0.25);"></div>
                        <span style="position:absolute; top:8px; right:8px; background:#e53935; color:#fff; font-size:10px; font-weight:600; padding:2px 8px; border-radius:20px;">Popular</span>
                    </div>
                    <div style="padding:12px;">
                        <p style="font-size:13px; font-weight:700; color:#111; margin:0 0 5px;">CNC Programming</p>
                        <p style="font-size:12px; color:#1976d2; margin:0 0 5px;">📚 30 Courses</p>
                        <p style="font-size:16px; font-weight:700; color:#e53935; margin:0 0 8px;">৳ 15,000</p>
                        <div style="display:flex; align-items:center; gap:5px; margin-bottom:12px;">
                            <span style="color:#1976d2; font-size:12px;">✔</span>
                            <span style="font-size:12px; color:#555;">G-Code & Machining</span>
                        </div>
                        <div style="display:flex; align-items:center; justify-content:center; gap:6px; width:100%; padding:8px; background:#1976d2; color:#fff; border-radius:8px; font-size:12px; font-weight:600;">
                            🛒 Enroll Now
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card 4: CAD Design --}}
            <div class="wow zoomIn" data-wow-delay="0.9s"
                 style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.06);">
                <a href="#" style="text-decoration:none;">
                    <div style="position:relative; aspect-ratio:16/9; overflow:hidden;">
                        <img src="{{ asset('frontend/assets/img/cat-5.jpg') }}" alt="CAD Design"
                             style="width:100%; height:100%; object-fit:cover;">
                        <div style="position:absolute; inset:0; background:rgba(0,0,0,0.25);"></div>
                        <span style="position:absolute; top:8px; right:8px; background:#e53935; color:#fff; font-size:10px; font-weight:600; padding:2px 8px; border-radius:20px;">New</span>
                    </div>
                    <div style="padding:12px;">
                        <p style="font-size:13px; font-weight:700; color:#111; margin:0 0 5px;">CAD Design</p>
                        <p style="font-size:12px; color:#1976d2; margin:0 0 5px;">📚 25 Courses</p>
                        <p style="font-size:16px; font-weight:700; color:#e53935; margin:0 0 8px;">৳ 12,000</p>
                        <div style="display:flex; align-items:center; gap:5px; margin-bottom:12px;">
                            <span style="color:#1976d2; font-size:12px;">✔</span>
                            <span style="font-size:12px; color:#555;">AutoCAD & SolidWorks</span>
                        </div>
                        <div style="display:flex; align-items:center; justify-content:center; gap:6px; width:100%; padding:8px; background:#1976d2; color:#fff; border-radius:8px; font-size:12px; font-weight:600;">
                            🛒 Enroll Now
                        </div>
                    </div>
                </a>
            </div>

        </div>
        {{-- ↑ Grid শেষ --}}

        {{-- View All Button — grid এর নিচে, center এ --}}
        <div style="text-align:center; margin-top:30px;">
            <a href="#"
               style="
                   display:inline-flex;
                   align-items:center;
                   gap:8px;
                   padding:12px 30px;
                   background:#1976d2;
                   color:#fff;
                   font-size:14px;
                   font-weight:600;
                   border-radius:30px;
                   text-decoration:none;
                   letter-spacing:0.5px;
                   transition:all 0.3s ease;
                   box-shadow:0 4px 15px rgba(25,118,210,0.35);
               "
               onmouseover="this.style.background='#e53935'; this.style.boxShadow='0 4px 15px rgba(229,57,53,0.35)';"
               onmouseout="this.style.background='#1976d2'; this.style.boxShadow='0 4px 15px rgba(25,118,210,0.35)';"
            >
                📚 View All Courses
                <span style="font-size:16px;">→</span>
            </a>
        </div>

    </div>{{-- /.container --}}
</div>{{-- /.container-xxl --}}

@include('frontend.layouts.footer')
@endsection