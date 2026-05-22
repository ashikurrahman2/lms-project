<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login — LMS Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sora: ['Sora', 'sans-serif'],
              mono: ['JetBrains Mono', 'monospace'],
            },
            colors: {
              ink: {
                950: '#07080d',
                900: '#0d0f1a',
                800: '#141628',
                700: '#1c1f35',
                600: '#252944',
              },
              sapphire: {
                400: '#5b8df6',
                500: '#3b6ef0',
                600: '#2355d4',
              },
              arctic: {
                100: '#e8eeff',
                200: '#c3d0fc',
                400: '#8aa4f8',
              },
            },
            animation: {
              'float-slow': 'float 8s ease-in-out infinite',
              'float-mid': 'float 6s ease-in-out infinite 1s',
              'float-fast': 'float 5s ease-in-out infinite 2s',
              'fade-up': 'fadeUp 0.6s ease forwards',
              'fade-up-delay': 'fadeUp 0.6s ease 0.15s forwards',
              'fade-up-delay2': 'fadeUp 0.6s ease 0.3s forwards',
              'fade-up-delay3': 'fadeUp 0.6s ease 0.45s forwards',
              'shimmer': 'shimmer 2.5s linear infinite',
              'pulse-ring': 'pulseRing 2s ease-out infinite',
            },
            keyframes: {
              float: {
                '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                '50%': { transform: 'translateY(-20px) rotate(3deg)' },
              },
              fadeUp: {
                from: { opacity: '0', transform: 'translateY(18px)' },
                to: { opacity: '1', transform: 'translateY(0)' },
              },
              shimmer: {
                '0%': { backgroundPosition: '-200% center' },
                '100%': { backgroundPosition: '200% center' },
              },
              pulseRing: {
                '0%': { transform: 'scale(0.95)', boxShadow: '0 0 0 0 rgba(91,141,246,0.6)' },
                '70%': { transform: 'scale(1)', boxShadow: '0 0 0 10px rgba(91,141,246,0)' },
                '100%': { transform: 'scale(0.95)', boxShadow: '0 0 0 0 rgba(91,141,246,0)' },
              },
            },
          },
        },
      }
    </script>

    <style>
      * { box-sizing: border-box; }
      body { font-family: 'Sora', sans-serif; }

      .noise-bg::before {
        content: '';
        position: fixed;
        inset: 0;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
        pointer-events: none;
        z-index: 0;
        opacity: 0.4;
      }

      .glass-card {
        background: rgba(20, 22, 40, 0.75);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        border: 1px solid rgba(91, 141, 246, 0.15);
        box-shadow:
          0 0 0 1px rgba(255,255,255,0.04) inset,
          0 32px 80px rgba(0, 0, 0, 0.6),
          0 0 60px rgba(59, 110, 240, 0.06);
      }

      .input-field {
        background: rgba(7, 8, 13, 0.6);
        border: 1px solid rgba(91, 141, 246, 0.18);
        transition: all 0.25s ease;
        font-family: 'Sora', sans-serif;
      }
      .input-field:focus {
        outline: none;
        border-color: rgba(91, 141, 246, 0.7);
        background: rgba(7, 8, 13, 0.85);
        box-shadow: 0 0 0 3px rgba(91, 141, 246, 0.12), 0 0 20px rgba(91, 141, 246, 0.08);
      }
      .input-field::placeholder { color: rgba(139, 164, 248, 0.4); }

      .btn-login {
        background: linear-gradient(135deg, #3b6ef0 0%, #5b8df6 50%, #3b6ef0 100%);
        background-size: 200% auto;
        transition: all 0.4s ease;
        box-shadow: 0 4px 24px rgba(59, 110, 240, 0.35);
        font-family: 'Sora', sans-serif;
      }
      .btn-login:hover {
        background-position: right center;
        box-shadow: 0 6px 32px rgba(59, 110, 240, 0.55);
        transform: translateY(-1px);
      }
      .btn-login:active { transform: translateY(0); }

      .stat-chip {
        background: rgba(91, 141, 246, 0.08);
        border: 1px solid rgba(91, 141, 246, 0.2);
      }

      .shimmer-text {
        background: linear-gradient(90deg, #8aa4f8 0%, #fff 40%, #5b8df6 60%, #8aa4f8 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shimmer 4s linear infinite;
      }

      .orb-1 {
        background: radial-gradient(circle, rgba(59, 110, 240, 0.35) 0%, transparent 70%);
        animation: float 8s ease-in-out infinite;
      }
      .orb-2 {
        background: radial-gradient(circle, rgba(139, 92, 246, 0.25) 0%, transparent 70%);
        animation: float 6s ease-in-out infinite 1s;
      }
      .orb-3 {
        background: radial-gradient(circle, rgba(16, 185, 129, 0.2) 0%, transparent 70%);
        animation: float 5s ease-in-out infinite 2s;
      }

      .badge-dot {
        width: 8px; height: 8px;
        background: #10b981;
        border-radius: 50%;
        animation: pulseRing 2s ease-out infinite;
        display: inline-block;
      }

      .opacity-0-start { opacity: 0; }

      .left-feature-item {
        border-left: 2px solid rgba(91, 141, 246, 0.3);
        padding-left: 12px;
        transition: border-color 0.3s;
      }
      .left-feature-item:hover { border-left-color: rgba(91, 141, 246, 0.8); }

      .grid-lines {
        background-image:
          linear-gradient(rgba(91, 141, 246, 0.04) 1px, transparent 1px),
          linear-gradient(90deg, rgba(91, 141, 246, 0.04) 1px, transparent 1px);
        background-size: 40px 40px;
      }

      .toggle-pass { cursor: pointer; }
    </style>
  </head>

  <body class="noise-bg bg-ink-950 min-h-screen flex items-center justify-center p-4 overflow-hidden relative grid-lines">

    <!-- Background Orbs -->
    <div class="orb-1 absolute w-[500px] h-[500px] rounded-full -top-40 -left-40 pointer-events-none"></div>
    <div class="orb-2 absolute w-[400px] h-[400px] rounded-full -bottom-20 -right-20 pointer-events-none"></div>
    <div class="orb-3 absolute w-[300px] h-[300px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>

    <!-- Decorative floating shapes -->
    <div class="absolute top-10 right-1/4 w-2 h-2 bg-sapphire-400 rounded-full opacity-60" style="animation: float 4s ease-in-out infinite;"></div>
    <div class="absolute bottom-20 left-1/4 w-1.5 h-1.5 bg-arctic-400 rounded-full opacity-40" style="animation: float 5s ease-in-out infinite 1.5s;"></div>
    <div class="absolute top-1/3 right-10 w-1 h-1 bg-emerald-400 rounded-full opacity-50" style="animation: float 3.5s ease-in-out infinite 0.8s;"></div>

    <!-- Main Container -->
    <div class="relative z-10 w-full max-w-5xl flex rounded-2xl overflow-hidden glass-card min-h-[600px]">

      <!-- ===== LEFT PANEL ===== -->
      <div class="hidden lg:flex flex-col justify-between w-1/2 p-10 relative overflow-hidden"
           style="background: linear-gradient(145deg, rgba(59,110,240,0.12) 0%, rgba(13,15,26,0.4) 100%);">

        <!-- Top Left Brand -->
        <div class="animate-fade-up opacity-0-start" style="animation: fadeUp 0.5s ease 0.1s forwards;">
          <div class="flex items-center gap-3 mb-1">
            <div class="w-9 h-9 rounded-xl bg-sapphire-500 flex items-center justify-center shadow-lg shadow-sapphire-500/30">
              <i class="bx bxs-graduation text-white text-xl"></i>
            </div>
            <div>
              <div class="text-white font-semibold text-sm tracking-wide">
                {{$setting->site_name ?? 'EduAdmin'}}
              </div>
              <div class="flex items-center gap-1.5">
                <span class="badge-dot"></span>
                <span class="text-emerald-400 text-xs font-mono">System Online</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Center Content -->
        <div class="space-y-6">
          <div style="animation: fadeUp 0.6s ease 0.2s forwards; opacity:0;">
            <p class="text-arctic-200/50 text-xs font-mono tracking-widest uppercase mb-3">Learning Management System</p>
            <h1 class="text-4xl font-bold leading-tight text-white">
              Manage Your <br />
              <span class="shimmer-text">Learning Universe</span>
            </h1>
            <p class="mt-4 text-arctic-200/60 text-sm leading-relaxed max-w-xs">
              {{$seo->meta_description ?? 'Complete control over courses, students, instructors, and analytics — all from one powerful dashboard.'}}
            </p>
          </div>

          <!-- Feature List -->
          <div class="space-y-3" style="animation: fadeUp 0.6s ease 0.35s forwards; opacity:0;">
            <div class="left-feature-item">
              <p class="text-arctic-100/80 text-sm font-medium">Course & Curriculum Builder</p>
              <p class="text-arctic-200/40 text-xs mt-0.5">Design, publish, and manage courses</p>
            </div>
            <div class="left-feature-item">
              <p class="text-arctic-100/80 text-sm font-medium">Student Analytics Dashboard</p>
              <p class="text-arctic-200/40 text-xs mt-0.5">Track progress, grades & engagement</p>
            </div>
            <div class="left-feature-item">
              <p class="text-arctic-100/80 text-sm font-medium">Instructor Management</p>
              <p class="text-arctic-200/40 text-xs mt-0.5">Assign, schedule & communicate</p>
            </div>
          </div>

          <!-- Stats -->
          <div class="flex gap-3" style="animation: fadeUp 0.6s ease 0.5s forwards; opacity:0;">
            <div class="stat-chip rounded-xl px-4 py-2.5 text-center">
              <div class="text-sapphire-400 font-bold text-lg font-mono">12k+</div>
              <div class="text-arctic-200/50 text-xs">Students</div>
            </div>
            <div class="stat-chip rounded-xl px-4 py-2.5 text-center">
              <div class="text-sapphire-400 font-bold text-lg font-mono">340+</div>
              <div class="text-arctic-200/50 text-xs">Courses</div>
            </div>
            <div class="stat-chip rounded-xl px-4 py-2.5 text-center">
              <div class="text-emerald-400 font-bold text-lg font-mono">98%</div>
              <div class="text-arctic-200/50 text-xs">Uptime</div>
            </div>
          </div>
        </div>

        <!-- Bottom Social -->
        <div class="flex items-center gap-3" style="animation: fadeUp 0.6s ease 0.6s forwards; opacity:0;">
          <span class="text-arctic-200/30 text-xs">Follow us</span>
          <div class="flex gap-2">
            <a href="#" class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-arctic-200/50 hover:text-sapphire-400 hover:border-sapphire-400/40 transition-all duration-200 hover:scale-110">
              <i class="bx bxl-facebook text-sm"></i>
            </a>
            <a href="#" class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-arctic-200/50 hover:text-sapphire-400 hover:border-sapphire-400/40 transition-all duration-200 hover:scale-110">
              <i class="bx bxl-instagram text-sm"></i>
            </a>
            <a href="#" class="w-7 h-7 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center text-arctic-200/50 hover:text-sapphire-400 hover:border-sapphire-400/40 transition-all duration-200 hover:scale-110">
              <i class="bx bxl-linkedin text-sm"></i>
            </a>
          </div>
        </div>

        <!-- Decorative corner accent -->
        <div class="absolute top-0 right-0 w-32 h-32 pointer-events-none opacity-20"
             style="background: radial-gradient(circle at top right, rgba(91,141,246,0.5), transparent 70%);">
        </div>
      </div>

      <!-- Divider Line -->
      <div class="hidden lg:block w-px" style="background: linear-gradient(to bottom, transparent, rgba(91,141,246,0.3) 30%, rgba(91,141,246,0.3) 70%, transparent);"></div>

      <!-- ===== RIGHT PANEL (Login Form) ===== -->
      <div class="flex flex-col justify-center w-full lg:w-1/2 p-8 md:p-10">

        <!-- Mobile Logo -->
        <div class="lg:hidden flex items-center gap-2 mb-8">
          <div class="w-8 h-8 rounded-xl bg-sapphire-500 flex items-center justify-center">
            <i class="bx bxs-graduation text-white"></i>
          </div>
          <span class="text-white font-semibold text-sm">{{$setting->site_name ?? 'EduAdmin'}}</span>
        </div>

        <!-- Header -->
        <div class="mb-8" style="animation: fadeUp 0.6s ease 0.15s forwards; opacity:0;">
          <div class="inline-flex items-center gap-2 bg-sapphire-500/10 border border-sapphire-500/20 rounded-full px-3 py-1 mb-4">
            <i class="bx bxs-lock-alt text-sapphire-400 text-xs"></i>
            <span class="text-sapphire-400 text-xs font-mono tracking-wide">ADMIN ACCESS</span>
          </div>
          <h2 class="text-white text-2xl font-bold mb-1">Welcome back</h2>
          <p class="text-arctic-200/50 text-sm">Sign in to your admin dashboard</p>
        </div>

        <!-- Flash Error -->
        @if (session('error'))
          <div class="mb-5 flex items-center gap-3 bg-red-500/10 border border-red-500/25 text-red-400 text-sm rounded-xl px-4 py-3"
               style="animation: fadeUp 0.4s ease forwards;">
            <i class="bx bxs-error-circle text-base flex-shrink-0"></i>
            <span>{{ session('error') }}</span>
          </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('admin.login') }}" class="space-y-5"
              style="animation: fadeUp 0.6s ease 0.3s forwards; opacity:0;">
          @csrf

          <!-- Email -->
          <div>
            <label class="block text-arctic-100/70 text-xs font-medium mb-2 tracking-wide uppercase">Email Address</label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-arctic-400/50">
                <i class="bx bx-envelope text-lg"></i>
              </span>
              <input
                type="email"
                name="email"
                placeholder="admin@example.com"
                required
                value="{{ old('email') }}"
                class="input-field w-full rounded-xl pl-11 pr-4 py-3.5 text-white text-sm placeholder:text-arctic-400/40 focus:ring-0"
              />
            </div>
            @error('email')
              <p class="mt-1.5 text-red-400/80 text-xs flex items-center gap-1">
                <i class="bx bx-error-circle"></i> {{ $message }}
              </p>
            @enderror
          </div>

          <!-- Password -->
          <div>
            <label class="block text-arctic-100/70 text-xs font-medium mb-2 tracking-wide uppercase">Password</label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-arctic-400/50">
                <i class="bx bx-lock-alt text-lg"></i>
              </span>
              <input
                type="password"
                id="passwordInput"
                name="password"
                placeholder="Enter your password"
                required
                class="input-field w-full rounded-xl pl-11 pr-12 py-3.5 text-white text-sm placeholder:text-arctic-400/40 focus:ring-0"
              />
              <button type="button" class="toggle-pass absolute right-4 top-1/2 -translate-y-1/2 text-arctic-400/40 hover:text-arctic-400 transition-colors duration-200"
                      onclick="togglePassword()">
                <i class="bx bx-hide text-lg" id="eyeIcon"></i>
              </button>
            </div>
            @error('password')
              <p class="mt-1.5 text-red-400/80 text-xs flex items-center gap-1">
                <i class="bx bx-error-circle"></i> {{ $message }}
              </p>
            @enderror
          </div>

          <!-- Remember + Forgot -->
          <div class="flex items-center justify-between">
            <label class="flex items-center gap-2.5 cursor-pointer group">
              <div class="relative">
                <input type="checkbox" name="remember" id="rememberMe" class="sr-only peer" />
                <div class="w-4 h-4 rounded border border-arctic-400/30 bg-ink-950/50 peer-checked:bg-sapphire-500 peer-checked:border-sapphire-500 transition-all duration-200 flex items-center justify-center"
                     onclick="document.getElementById('rememberMe').click(); this.innerHTML = document.getElementById('rememberMe').checked ? '<svg width=\'10\' height=\'8\' viewBox=\'0 0 10 8\' fill=\'none\'><path d=\'M1 4L3.5 6.5L9 1\' stroke=\'white\' stroke-width=\'1.5\' stroke-linecap=\'round\' stroke-linejoin=\'round\'/></svg>' : '';">
                </div>
              </div>
              <span class="text-arctic-200/60 text-sm group-hover:text-arctic-200/80 transition-colors duration-200">Remember me</span>
            </label>
            <a href="#" class="text-sapphire-400 text-sm hover:text-arctic-200 transition-colors duration-200">Forgot password?</a>
          </div>

          <!-- Submit -->
          <button type="submit" class="btn-login w-full rounded-xl py-3.5 text-white font-semibold text-sm tracking-wide flex items-center justify-center gap-2 group mt-2">
            <span>Sign In to Dashboard</span>
            <i class="bx bx-right-arrow-alt text-lg group-hover:translate-x-1 transition-transform duration-200"></i>
          </button>

        </form>

        <!-- Register Link -->
        <p class="mt-6 text-center text-arctic-200/40 text-sm" style="animation: fadeUp 0.6s ease 0.45s forwards; opacity:0;">
          Need an account?
          <a href="{{ route('admin.register') }}" class="text-sapphire-400 hover:text-arctic-200 font-medium transition-colors duration-200 ml-1">
            Request Access
          </a>
        </p>

        <!-- Security Footer -->
        <div class="mt-8 pt-6 border-t border-white/5 flex items-center justify-center gap-4"
             style="animation: fadeUp 0.6s ease 0.55s forwards; opacity:0;">
          <div class="flex items-center gap-1.5 text-arctic-200/30 text-xs">
            <i class="bx bxs-shield-alt-2 text-emerald-500/50 text-sm"></i>
            <span>SSL Secured</span>
          </div>
          <span class="text-white/10">·</span>
          <div class="flex items-center gap-1.5 text-arctic-200/30 text-xs">
            <i class="bx bxs-lock text-sapphire-400/50 text-sm"></i>
            <span>256-bit Encrypted</span>
          </div>
          <span class="text-white/10">·</span>
          <div class="text-arctic-200/30 text-xs font-mono">v2.4.1</div>
        </div>
      </div>
    </div>

    <script>
      function togglePassword() {
        const input = document.getElementById('passwordInput');
        const icon = document.getElementById('eyeIcon');
        if (input.type === 'password') {
          input.type = 'text';
          icon.className = 'bx bx-show text-lg';
        } else {
          input.type = 'password';
          icon.className = 'bx bx-hide text-lg';
        }
      }
    </script>
  </body>
</html>