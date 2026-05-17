
    <!-- Favicon -->
    <link href="{{asset('frontend/assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

    <!-- ===================== Gallary CSS ===================== -->
<style>
    .gallery-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px 0 40px;
        overflow: hidden;
    }

    .gallery-stage {
        position: relative;
        width: 100%;
        max-width: 700px;
        height: 360px;
        perspective: 1000px;
        margin-bottom: 36px;
    }

    .gallery-card {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 200px;
        height: 300px;
        border-radius: 18px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.55s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.18);
        background: #fff;
        transform-origin: center center;
    }

    .gallery-card .card-img-wrap {
        width: 100%;
        height: 65%;
        overflow: hidden;
    }

    .gallery-card .card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
        display: block;
        transition: transform 0.4s ease;
    }

    .gallery-card:hover .card-img-wrap img {
        transform: scale(1.05);
    }

    .gallery-card .card-info {
        padding: 12px 14px 10px;
        background: #fff;
    }

    .gallery-card .card-name {
        font-size: 13px;
        font-weight: 600;
        color: #222;
        margin: 0 0 3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .gallery-card .card-role {
        font-size: 11px;
        color: #888;
        margin: 0 0 8px;
        line-height: 1.4;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .gallery-card .card-socials {
        display: flex;
        gap: 6px;
    }

    .gallery-card .card-socials a {
        width: 26px;
        height: 26px;
        border-radius: 7px;
        background: var(--primary, #06BBCC);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 11px;
        text-decoration: none;
        transition: opacity 0.2s;
    }

    .gallery-card .card-socials a:hover {
        opacity: 0.8;
    }

    /* Nav buttons */
    .gallery-nav {
        display: flex;
        gap: 14px;
    }

    .nav-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1.5px solid #ddd;
        background: #fff;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #444;
        font-size: 15px;
        transition: all 0.2s;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }

    .nav-btn:hover {
        background: var(--primary, #06BBCC);
        color: #fff;
        border-color: var(--primary, #06BBCC);
    }

    /* Responsive */
    @media (max-width: 576px) {
        .gallery-stage {
            height: 300px;
        }
        .gallery-card {
            width: 160px;
            height: 250px;
        }
    }

    /* ---- Modal ---- */
    .teacher-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.72);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }

    .teacher-modal-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .teacher-modal-box {
        background: #fff;
        border-radius: 22px;
        width: 90%;
        max-width: 420px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 24px 80px rgba(0,0,0,0.35);
        transform: scale(0.85) translateY(30px);
        transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .teacher-modal-overlay.active .teacher-modal-box {
        transform: scale(1) translateY(0);
    }

    .modal-close-btn {
        position: absolute;
        top: 14px;
        right: 14px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: none;
        background: rgba(0,0,0,0.45);
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: background 0.2s;
    }

    .modal-close-btn:hover {
        background: rgba(0,0,0,0.75);
    }

    .modal-img-wrap {
        width: 100%;
        height: 280px;
        overflow: hidden;
    }

    .modal-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
        display: block;
    }

    .modal-body-info {
        padding: 20px 24px 24px;
        text-align: center;
    }

    .modal-body-info h4 {
        font-size: 20px;
        font-weight: 700;
        color: #111;
        margin: 0 0 6px;
    }

    .modal-body-info p {
        font-size: 13px;
        color: #777;
        margin: 0 0 16px;
        line-height: 1.5;
    }

    .modal-socials {
        display: flex;
        gap: 10px;
        justify-content: center;
    }

    .modal-socials a {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: var(--primary, #06BBCC);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 14px;
        text-decoration: none;
        transition: opacity 0.2s;
    }

    .modal-socials a:hover {
        opacity: 0.8;
    }
</style>