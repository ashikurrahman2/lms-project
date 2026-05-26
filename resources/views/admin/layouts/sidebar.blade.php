 <div class="sidenav-menu">
    <!-- Brand Logo -->
    <a href="index.html" class="logo">
        <span class="logo logo-light">
            <span class="logo-lg"><img src="{{ $setting->logo }}" alt="logo" /></span>
            <span class="logo-sm"><img src="{{ asset('/') }}admin/nadmin/assets/images/logo-sm.png" alt="small logo" /></span>
        </span>

        <span class="logo logo-dark">
            <span class="logo-lg"><img src="assets/images/logo-black.png" alt="dark logo" /></span>
            <span class="logo-sm"><img src="assets/images/logo-sm.png" alt="small logo" /></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-on-hover">
        <span class="btn-on-hover-icon"></span>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-offcanvas">
        <i class="ti ti-menu-4 align-middle"></i>
    </button>

    <div class="scrollbar" data-simplebar="">
        <div id="user-profile-settings" class="sidenav-user" style="background: url({{ asset('/') }}admin/nadmin/assets/images/user-bg-pattern.svg)">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#!" class="link-reset">
                        <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle mb-2 avatar-md" />
                        <span class="sidenav-user-name fw-bold">David Dev</span>
                        <span class="fs-12 fw-semibold" data-lang="user-role">Art Director</span>
                    </a>
                </div>
                <div>
                    <a class="dropdown-toggle drop-arrow-none link-reset sidenav-user-set-icon" data-bs-toggle="dropdown" data-bs-offset="0,12" href="#!" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-settings fs-24 align-middle ms-1"></i>
                    </a>

                    <div class="dropdown-menu">
                        <!-- Header -->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome back!</h6>
                        </div>

                        <!-- My Profile -->
                        <a href="#!" class="dropdown-item">
                            <i class="ti ti-user-circle me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Profile</span>
                        </a>

                        <!-- Settings -->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="ti ti-settings-2 me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>

                        <!-- Lock -->
                        <a href="auth-lock-screen.html" class="dropdown-item">
                            <i class="ti ti-lock me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Lock Screen</span>
                        </a>

                        <!-- Logout -->
                        <a href="javascript:void(0);" class="dropdown-item text-danger fw-semibold">
                            <i class="ti ti-logout me-1 fs-lg align-middle"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!--- Sidenav Menu -->
        <div id="sidenav-menu">
            <ul class="side-nav">
                <li class="side-nav-title mt-2" data-lang="main">{{ __('menu.main') }}</li>
                <li class="side-nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                        <span class="menu-text">{{ __('menu.dashboard') }}</span>
                    </a>
                </li>
                 <li class="side-nav-title mt-2" data-lang="apps">{{ __('menu.pages') }}</li>
             @role('superadmin|admin')
<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#mainpage" aria-expanded="false" aria-controls="mainpage" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-book"></i></span>
        <span class="menu-text">{{ __('menu.main_page') }}</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="mainpage">
        <ul class="sub-menu">

            @can('view about')
            <li class="side-nav-item">
                <a href="{{ route('about.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.about_us') }}</span>
                </a>
            </li>
            @endcan

            @can('view slider')
            <li class="side-nav-item">
                <a href="{{ route('slider.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.slider_info') }}</span>
                </a>
            </li>
            @endcan

            @can('view choose_us')
            <li class="side-nav-item">
                <a href="{{ route('choose-us.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.why_choose_us') }}</span>
                </a>
            </li>
            @endcan

            @can('view contact_messages')
            <li class="side-nav-item">
                <a href="{{ route('contactus.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.contact_us') }}</span>
                </a>
            </li>
            @endcan

            <li class="side-nav-item">
                <a href="{{ route('student.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.student') }}</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('teacher.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.teacher') }}</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('leadership.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.leadership') }}</span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('service.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.service') }}</span>
                </a>
            </li>
            
               <li class="side-nav-item">
                <a href="{{ route('gallary.index') }}" class="side-nav-link">
                    <span class="menu-text">{{ __('menu.gallary') }}</span>
                </a>
            </li>

              <li class="side-nav-item">
                <a href="{{ route('course.index') }}" class="side-nav-link">
                    <span class="menu-text">Courses</span>
                </a>
            </li>
        </ul>
    </div>
</li>

          
                <li class="side-nav-title mt-2" data-lang="custom-pages">Operational Pages</li>
               <li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-files"></i></span>
        <span class="menu-text" data-lang="pages">Categories</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="categories">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('category.index') }}" class="side-nav-link">
                    <span class="menu-text" data-lang="pages-about-us">All Categories</span>
                </a>
            </li>
        </ul>
    </div>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#videoGallery" aria-expanded="false" aria-controls="videoGallery" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-video"></i></span>
        <span class="menu-text" data-lang="pages">Video Gallery</span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="videoGallery">
        <ul class="sub-menu">
            <li class="side-nav-item">
                <a href="{{ route('video.index') }}" class="side-nav-link">
                    <span class="menu-text" data-lang="pages-about-us">All Video Gallery</span>
                </a>
            </li>
        </ul>
    </div>
</li>
                @endrole
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#plugins" aria-expanded="false" aria-controls="plugins" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-cpu"></i></span>
                        <span class="menu-text" data-lang="plugins">Plugins</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="plugins">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="plugins-sortable.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-sortable">Sortable List</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-pdf-viewer.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-pdf-viewer">PDF Viewer</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-i18.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-i18">i18 Support</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-sweet-alerts.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-sweet-alerts">Sweet Alerts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-idle-timer.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-idle-timer">Idle Timer</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-pass-meter.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-pass-meter">Password Meter</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-clipboard.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-clipboard">Clipboard</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-tree-view.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-tree-view">Tree View</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-masonry.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-masonry">Masonry</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-tour.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-tour">Tour</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-animation.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-animation">Animation</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="plugins-video-player.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="plugins-video-player">Video Player</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#authentication" aria-expanded="false" aria-controls="authentication" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-password-user"></i></span>
                        <span class="menu-text" data-lang="authentication">Authentication</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="authentication">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#auth-basic" aria-expanded="false" aria-controls="auth-basic" class="side-nav-link">
                                    <span class="menu-text" data-lang="auth-basic">Basic</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="auth-basic">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="auth-sign-in.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-sign-in">Sign In</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-sign-up.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-sign-up">Sign Up</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-reset-pass.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-reset-pass">Reset Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-new-pass.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-new-pass">New Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-two-factor.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-two-factor">Two Factor</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-lock-screen.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-lock-screen">Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-success-mail.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-success-mail">Success Mail</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-login-pin.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-login-pin">Login with PIN</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-delete-account.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-delete-account">Delete Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#auth-card" aria-expanded="false" aria-controls="auth-card" class="side-nav-link">
                                    <span class="menu-text" data-lang="auth-card">Card</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="auth-card">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="auth-card-sign-in.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-sign-in">Sign In</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-sign-up.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-sign-up">Sign Up</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-reset-pass.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-reset-pass">Reset Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-new-pass.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-new-pass">New Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-two-factor.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-two-factor">Two Factor</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-lock-screen.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-lock-screen">Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-success-mail.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-success-mail">Success Mail</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-login-pin.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-login-pin">Login with PIN</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-card-delete-account.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-card-delete-account">Delete Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#auth-split" aria-expanded="false" aria-controls="auth-split" class="side-nav-link">
                                    <span class="menu-text" data-lang="auth-split">Split</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="auth-split">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="auth-split-sign-in.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-sign-in">Sign In</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-sign-up.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-sign-up">Sign Up</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-reset-pass.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-reset-pass">Reset Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-new-pass.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-new-pass">New Password</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-two-factor.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-two-factor">Two Factor</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-lock-screen.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-lock-screen">Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-success-mail.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-success-mail">Success Mail</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-login-pin.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-login-pin">Login with PIN</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="auth-split-delete-account.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="auth-split-delete-account">Delete Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#error-pages" aria-expanded="false" aria-controls="error-pages" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-alert-triangle"></i></span>
                        <span class="menu-text" data-lang="error-pages">Error Pages</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="error-pages">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="error-400.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-400">400 Bad Request</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="error-401.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-401">401 Unauthorized</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="error-403.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-403">403 Forbidden</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="error-404.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-404">404 Not Found</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="error-408.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-408">408 Request Timeout</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="error-500.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-500">500 Internal Server</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="error-maintenance.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="error-maintenance">Maintenance</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2" data-lang="layouts">Layouts</li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#layout-options" aria-expanded="false" aria-controls="layout-options" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-layout"></i></span>
                        <span class="menu-text" data-lang="layout-options">Layout Options</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="layout-options">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="layouts-horizontal.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-horizontal">Horizontal</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-boxed.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-boxed">Boxed</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-scrollable.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-scrollable">Scrollable</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-compact.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-compact">Compact</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-preloader.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-preloader">Preloader</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebars" aria-expanded="false" aria-controls="sidebars" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-layout-sidebar-inactive"></i></span>
                        <span class="menu-text" data-lang="sidebars">Sidebars</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebars">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-light.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-light">Light Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-gradient.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-gradient">Gradient Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-gray.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-gray">Gray Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-image.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-image">Image Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-compact.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-compact">Compact Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-on-hover.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-on-hover">On Hover Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-offcanvas.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-offcanvas">Offcanvas Menu</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-no-icons.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-no-icons">No Icons with Lines</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-sidebar-with-lines.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-sidebar-with-lines">Sidebar with Lines</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#topbar" aria-expanded="false" aria-controls="topbar" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-layout-bottombar"></i></span>
                        <span class="menu-text" data-lang="topbar">Topbar</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="topbar">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="layouts-topbar-dark.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-topbar-dark">Dark Topbar</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-topbar-gray.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-topbar-gray">Gray Topbar</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="layouts-topbar-gradient.html" class="side-nav-link" target="_blank">
                                    <span class="menu-text" data-lang="layouts-topbar-gradient">Gradient Topbar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2" data-lang="components">Components</li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#base-ui" aria-expanded="false" aria-controls="base-ui" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-components"></i></span>
                        <span class="menu-text" data-lang="base-ui">Base UI</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="base-ui">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="ui-accordions.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-accordions">Accordions</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-alerts.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-alerts">Alerts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-buttons.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-buttons">Buttons</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-badges.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-badges">Badges</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-colors.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-colors">Colors</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-breadcrumb.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-breadcrumb">Breadcrumb</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-cards.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-cards">Cards</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-carousel.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-carousel">Carousel</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-collapse.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-collapse">Collapse</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-images.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-images">Images</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-dropdowns.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-dropdowns">Dropdowns</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-videos.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-videos">Videos</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-grid.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-grid">Grid Options</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-links.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-links">Links</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-list-group.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-list-group">List Group</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-modals.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-modals">Modals</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-notifications.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-notifications">Notifications</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-offcanvas.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-offcanvas">Offcanvas</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-placeholders.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-placeholders">Placeholders</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-pagination.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-pagination">Pagination</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-popovers.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-popovers">Popovers</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-progress.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-progress">Progress</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-scrollspy.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-scrollspy">Scrollspy</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-spinners.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-spinners">Spinners</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-tabs.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-tabs">Tabs</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-tooltips.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-tooltips">Tooltips</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-typography.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-typography">Typography</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="ui-utilities.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="ui-utilities">Utilities</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#widgets" aria-expanded="false" aria-controls="widgets" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-category"></i></span>
                        <span class="menu-text" data-lang="widgets">Widgets</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="widgets">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="widgets-charts.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="widgets-charts">Charts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="widgets-mixed.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="widgets-mixed">Mixed</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="widgets-social.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="widgets-social">Social</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="widgets-statistics.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="widgets-statistics">Statistics</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="widgets-weather.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="widgets-weather">Weather</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-chart-donut"></i></span>
                        <span class="menu-text" data-lang="charts">Charts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#apex-charts" aria-expanded="false" aria-controls="apex-charts" class="side-nav-link">
                                    <span class="menu-text" data-lang="apex-charts">Apex Charts</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="apex-charts">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="charts-apex-area.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-area">Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-bar.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-bar">Bar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-bubble.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-bubble">Bubble</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-candlestick.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-candlestick">Candlestick</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-column.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-column">Column</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-heatmap.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-heatmap">Heatmap</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-line.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-line">Line</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-mixed.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-mixed">Mixed</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-timeline.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-timeline">Timeline</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-boxplot.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-boxplot">Boxplot</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-treemap.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-treemap">Treemap</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-pie.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-pie">Pie</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-radar.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-radar">Radar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-radialbar.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-radialbar">RadialBar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-scatter.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-scatter">Scatter</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-polar-area.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-polar-area">Polar Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-sparklines.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-sparklines">Sparklines</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-range.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-range">Range</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-funnel.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-funnel">Funnel</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-apex-slope.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-apex-slope">Slope</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#echarts" aria-expanded="false" aria-controls="echarts" class="side-nav-link">
                                    <span class="menu-text" data-lang="echarts">Echarts</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="echarts">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="charts-echart-line.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-line">Line</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-bar.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-bar">Bar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-pie.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-pie">Pie</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-scatter.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-scatter">Scatter</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-geo-map.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-geo-map">GEO Map</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-gauge.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-gauge">Gauge</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-candlestick.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-candlestick">Candlestick</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-area.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-area">Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-radar.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-radar">Radar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-heatmap.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-heatmap">Heatmap</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-echart-other.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-echart-other">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#chartjs" aria-expanded="false" aria-controls="chartjs" class="side-nav-link">
                                    <span class="menu-text" data-lang="chartjs">Chart Js</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="chartjs">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="charts-chartjs-area.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-chartjs-area">Area</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-chartjs-bar.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-chartjs-bar">Bar</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-chartjs-line.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-chartjs-line">Line</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="charts-chartjs-other.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="charts-chartjs-other">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-clipboard-list"></i></span>
                        <span class="menu-text" data-lang="forms">Forms</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="form-elements.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-elements">Basic Elements</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-validation.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-validation">Validation</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-wizard.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-wizard">Wizard</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-select.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-select">Select</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-pickers.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-pickers">Pickers</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-fileuploads.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-fileuploads">File Uploads</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-text-editors.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-text-editors">Text Editors</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-range-slider.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-range-slider">Range Slider</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-cropper.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-cropper">Image Cropper</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-layout.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-layout">Layouts</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="form-other-plugin.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="form-other-plugin">Other Plugins</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-table-column"></i></span>
                        <span class="menu-text" data-lang="tables">Tables</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="tables-static.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="tables-static">Static Tables</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="tables-custom.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="tables-custom">Custom Tables</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#datatables" aria-expanded="false" aria-controls="datatables" class="side-nav-link">
                                    <span class="menu-text" data-lang="datatables">DataTables</span>
                                    <span class="badge bg-success text-white">15</span>
                                </a>
                                <div class="collapse" id="datatables">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-basic.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-basic">Basic</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-export-data.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-export-data">Export Data</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-select.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-select">Select</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-ajax.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-ajax">Ajax</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-javascript.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-javascript">Javascript Source</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-rendering.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-rendering">Data Rendering</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-scroll.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-scroll">Scroll</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-fixed-columns.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-fixed-columns">Fixed Columns</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-fixed-header.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-fixed-header">Fixed Header</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-columns.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-columns">Show &amp; Hide Column</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-child-rows.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-child-rows">Child Rows</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-column-searching.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-column-searching">Column Searching</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-range-search.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-range-search">Range Search</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-rows-add.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-rows-add">Add Rows</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="tables-datatables-checkbox-select.html" class="side-nav-link">
                                                <span class="menu-text" data-lang="tables-datatables-checkbox-select">Checkbox Select</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-icons"></i></span>
                        <span class="menu-text" data-lang="icons">Icons</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="icons-tabler.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="icons-tabler">Tabler</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="icons-lucide.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="icons-lucide">Lucide</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="icons-remix.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="icons-remix">Remix</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="icons-solar-duotone.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="icons-solar-duotone">Solar Duotone</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="icons-flags.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="icons-flags">Flags</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-map"></i></span>
                        <span class="menu-text" data-lang="maps">Maps</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a href="maps-google.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="maps-google">Google Maps</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="maps-vector.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="maps-vector">Vector Maps</span>
                                </a>
                            </li>
                            <li class="side-nav-item">
                                <a href="maps-leaflet.html" class="side-nav-link">
                                    <span class="menu-text" data-lang="maps-leaflet">Leaflet Maps</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-title mt-2" data-lang="menu-items">Menu Items</li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#menu-levels" aria-expanded="false" aria-controls="menu-levels" class="side-nav-link">
                        <span class="menu-icon"><i class="ti ti-sitemap"></i></span>
                        <span class="menu-text" data-lang="menu-levels">Menu Levels</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="menu-levels">
                        <ul class="sub-menu">
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#second-level" aria-expanded="false" aria-controls="second-level" class="side-nav-link">
                                    <span class="menu-text" data-lang="second-level">Second Level</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="second-level">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="#" class="side-nav-link">
                                                <span class="menu-text" data-lang="menu-item-1">Item 2.1</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a href="#" class="side-nav-link">
                                                <span class="menu-text" data-lang="menu-item-2">Item 2.2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#second-level-2" aria-expanded="false" aria-controls="second-level-2" class="side-nav-link">
                                    <span class="menu-text" data-lang="second-level-2">Second Level</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="second-level-2">
                                    <ul class="sub-menu">
                                        <li class="side-nav-item">
                                            <a href="#" class="side-nav-link">
                                                <span class="menu-text" data-lang="menu-item-3">Item 2.1</span>
                                            </a>
                                        </li>
                                        <li class="side-nav-item">
                                            <a data-bs-toggle="collapse" href="#menu-item-4" aria-expanded="false" aria-controls="menu-item-4" class="side-nav-link">
                                                <span class="menu-text" data-lang="menu-item-4">Item 2.2</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="menu-item-4">
                                                <ul class="sub-menu">
                                                    <li class="side-nav-item">
                                                        <a href="#" class="side-nav-link">
                                                            <span class="menu-text" data-lang="menu-item-5">Item 3.1</span>
                                                        </a>
                                                    </li>
                                                    <li class="side-nav-item">
                                                        <a href="#" class="side-nav-link">
                                                            <span class="menu-text" data-lang="menu-item-6">Item 3.2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a href="#" class="side-nav-link disabled">
                        <span class="menu-icon"><i class="ti ti-ban"></i></span>
                        <span class="menu-text" data-lang="disabled-menu">Disabled Menu</span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="#" class="side-nav-link special-menu">
                        <span class="menu-icon"><i class="ti ti-star"></i></span>
                        <span class="menu-text" data-lang="special-menu">Special Menu</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidenav Menu End -->