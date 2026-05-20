<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-100 via-blue-50 to-purple-100">

<!-- Background -->
<div class="absolute top-10 left-10 w-72 h-72 bg-blue-300 rounded-full blur-3xl opacity-30"></div>
<div class="absolute bottom-10 right-10 w-72 h-72 bg-purple-300 rounded-full blur-3xl opacity-30"></div>

<!-- Card -->
<div class="relative w-full max-w-md bg-white shadow-2xl rounded-3xl p-10">

    <h1 class="text-3xl font-bold text-center text-gray-800">
        Login
    </h1>

    <p class="text-center text-gray-500 mt-2 mb-6">
        Welcome back 👋
    </p>

    <!-- Errors -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded-xl mb-5 text-sm">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <label class="text-sm font-semibold text-gray-700">
                Email <span class="text-red-500">*</span>
            </label>

            <input 
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="w-full mt-2 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none"
                required
            >
        </div>

        <!-- Password -->
        <div>
            <label class="text-sm font-semibold text-gray-700">
                Password <span class="text-red-500">*</span>
            </label>

            <input 
                type="password"
                name="password"
                class="w-full mt-2 px-4 py-3 border rounded-xl focus:ring-2 focus:ring-blue-400 outline-none"
                required
            >
        </div>

        <!-- Remember -->
        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-gray-600">
                <input type="checkbox" name="remember" class="accent-blue-600">
                Remember me
            </label>
        </div>

        <!-- Button -->
        <button 
            type="submit"
            class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 rounded-xl font-semibold hover:scale-[1.02] transition"
        >
            Login
        </button>
        <!-- Register Link -->
<p class="text-center text-sm text-gray-600 mt-5">
    Don’t have an account?
    <a href="{{ route('register') }}" class="text-blue-600 font-semibold hover:underline">
        Register
    </a>
</p>
    </form>

</div>

</body>
</html>