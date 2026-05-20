<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>LMS Registration</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-blue-100 via-indigo-50 to-purple-100 overflow-x-hidden">

<!-- Background Blur -->
<div class="absolute top-0 left-0 w-72 h-72 bg-blue-300 rounded-full blur-3xl opacity-30"></div>
<div class="absolute bottom-0 right-0 w-80 h-80 bg-purple-300 rounded-full blur-3xl opacity-30"></div>

<section class="relative py-14 px-4">

    <div class="max-w-7xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-12">

            <span class="bg-blue-100 text-blue-700 text-sm font-semibold px-5 py-2 rounded-full shadow">
                Learning Management System
            </span>

            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mt-5 leading-tight">
                Create Your Student Account
            </h1>

            <p class="text-gray-500 text-lg mt-4 max-w-2xl mx-auto leading-8">
                Register now to access online courses, assignments, student dashboard,
                live classes and premium learning resources.
            </p>

        </div>

        <!-- Main Card -->
        <div class="bg-white shadow-2xl rounded-[35px] overflow-hidden grid grid-cols-1 lg:grid-cols-2">

            <!-- Left Side -->
            <div class="relative hidden lg:flex flex-col justify-center bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-600 p-14 overflow-hidden">

                <!-- Decorative -->
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full"></div>
                <div class="absolute bottom-0 left-0 w-52 h-52 bg-white/10 rounded-full"></div>

                <div class="relative z-10">

                    <h2 class="text-5xl font-bold text-white leading-tight mb-6">
                        Start Your <br>
                        Learning <br>
                        Journey
                    </h2>

                    <p class="text-blue-100 text-lg leading-8 mb-10">
                        Build your future with professional online learning
                        and smart education management tools.
                    </p>

                    <!-- Features -->
                    <div class="space-y-5">

                        <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md p-4 rounded-2xl">

                            <div class="w-12 h-12 bg-white text-blue-600 rounded-xl flex items-center justify-center text-xl font-bold">
                                ✓
                            </div>

                            <div>
                                <h4 class="text-white font-semibold">
                                    Live Classes
                                </h4>

                                <p class="text-blue-100 text-sm">
                                    Interactive online sessions
                                </p>
                            </div>

                        </div>

                        <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md p-4 rounded-2xl">

                            <div class="w-12 h-12 bg-white text-indigo-600 rounded-xl flex items-center justify-center text-xl font-bold">
                                ✓
                            </div>

                            <div>
                                <h4 class="text-white font-semibold">
                                    Expert Teachers
                                </h4>

                                <p class="text-blue-100 text-sm">
                                    Learn from professionals
                                </p>
                            </div>

                        </div>

                        <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md p-4 rounded-2xl">

                            <div class="w-12 h-12 bg-white text-purple-600 rounded-xl flex items-center justify-center text-xl font-bold">
                                ✓
                            </div>

                            <div>
                                <h4 class="text-white font-semibold">
                                    Student Dashboard
                                </h4>

                                <p class="text-blue-100 text-sm">
                                    Track your progress easily
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Right Side -->
            <div class="p-6 md:p-12">

                <!-- Error -->
                @if ($errors->any())

                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-4 rounded-2xl mb-6">

                        <ul class="list-disc pl-5 space-y-1">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <!-- Form -->
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-6">

                    @csrf

                    <!-- Name & Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Name -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Full Name <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Enter your full name"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >

                        </div>

                        <!-- Email -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Email Address <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >

                        </div>

                    </div>

                    <!-- Phone Password -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Phone -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Phone Number <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="01XXXXXXXXX"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >

                        </div>

                        <!-- Password -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Password <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="password"
                                name="password"
                                placeholder="Enter password"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >

                        </div>

                    </div>

                    <!-- Confirm Password -->
                    <div>

                        <label class="text-gray-700 font-semibold mb-2 block">
                            Confirm Password <span class="text-red-500">*</span>
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm password"
                            class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                        >

                    </div>

                    <!-- Location -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Division -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Division <span class="text-red-500">*</span>
                            </label>

                            <select
                                id="division"
                                name="division"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >
                                <option value="">Select Division</option>
                            </select>

                        </div>

                        <!-- District -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                District <span class="text-red-500">*</span>
                            </label>

                            <select
                                id="district"
                                name="district"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >
                                <option value="">Select District</option>
                            </select>

                        </div>

                        <!-- Upazila -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Upazila <span class="text-red-500">*</span>
                            </label>

                            <select
                                id="upazila"
                                name="upazila"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >
                                <option value="">Select Upazila</option>
                            </select>

                        </div>

                        <!-- Union -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Union <span class="text-red-500">*</span>
                            </label>

                            <select
                                id="union"
                                name="union"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >
                                <option value="">Select Union</option>
                            </select>

                        </div>

                    </div>

                    <!-- Postcode & Image -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Postcode -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Postcode <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="text"
                                name="postcode"
                                value="{{ old('postcode') }}"
                                placeholder="Enter postcode"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >

                        </div>

                        <!-- Image -->
                        <div>

                            <label class="text-gray-700 font-semibold mb-2 block">
                                Profile Image <span class="text-red-500">*</span>
                            </label>

                            <input
                                type="file"
                                name="image"
                                class="w-full border border-gray-200 rounded-2xl px-5 py-4 bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                            >

                        </div>

                    </div>

                    <!-- Address -->
                    <div>

                        <label class="text-gray-700 font-semibold mb-2 block">
                            Address Details <span class="text-red-500">*</span>
                        </label>

                        <textarea
                            name="address_details"
                            rows="4"
                            placeholder="Enter full address details"
                            class="w-full border border-gray-200 rounded-2xl px-5 py-4 focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition"
                        >{{ old('address_details') }}</textarea>

                    </div>

                    <!-- Checkbox -->
                    <div class="flex items-start gap-3">

                        <input
                            type="checkbox"
                            required
                            class="mt-1 w-5 h-5 accent-blue-600"
                        >

                        <p class="text-gray-500 text-sm leading-6">
                            I agree to the Terms & Conditions and Privacy Policy.
                        </p>

                    </div>

                    <!-- Button -->
                    <button
                        type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-indigo-600 hover:to-blue-600 text-white font-semibold py-4 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 text-lg"
                    >
                        Create Student Account
                    </button>
        <!-- Register Link -->
<p class="text-center text-sm text-gray-600 mt-5">
    Already have an account ?
    <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">
        Login
    </a>
</p>
                </form>

            </div>

        </div>

    </div>

</section>

<!-- Dynamic Location Script -->
<script>

document.addEventListener("DOMContentLoaded", function () {

    const divisionSelect = document.getElementById('division');
    const districtSelect = document.getElementById('district');
    const upazilaSelect = document.getElementById('upazila');
    const unionSelect = document.getElementById('union');

    // Load Divisions
    fetch('/divisions')

        .then(response => response.json())

        .then(data => {

            data.forEach(function (division) {

                let option = document.createElement('option');

                option.value = division;
                option.textContent = division;

                divisionSelect.appendChild(option);

            });

        });

    // Load Districts
    divisionSelect.addEventListener('change', function () {

        let division = this.value;

        districtSelect.innerHTML = `<option value="">Loading...</option>`;

        fetch('/districts/' + division)

            .then(response => response.json())

            .then(data => {

                districtSelect.innerHTML =
                    `<option value="">Select District</option>`;

                upazilaSelect.innerHTML =
                    `<option value="">Select Upazila</option>`;

                unionSelect.innerHTML =
                    `<option value="">Select Union</option>`;

                data.forEach(function (district) {

                    let option = document.createElement('option');

                    option.value = district;
                    option.textContent = district;

                    districtSelect.appendChild(option);

                });

            });

    });

    // Load Upazilas
    districtSelect.addEventListener('change', function () {

        let district = this.value;

        upazilaSelect.innerHTML =
            `<option value="">Loading...</option>`;

        fetch('/upazilas/' + district)

            .then(response => response.json())

            .then(data => {

                upazilaSelect.innerHTML =
                    `<option value="">Select Upazila</option>`;

                unionSelect.innerHTML =
                    `<option value="">Select Union</option>`;

                data.forEach(function (upazila) {

                    let option = document.createElement('option');

                    option.value = upazila;
                    option.textContent = upazila;

                    upazilaSelect.appendChild(option);

                });

            });

    });

    // Load Unions
    upazilaSelect.addEventListener('change', function () {

        let upazila = this.value;

        unionSelect.innerHTML =
            `<option value="">Loading...</option>`;

        fetch('/unions/' + upazila)

            .then(response => response.json())

            .then(data => {

                unionSelect.innerHTML =
                    `<option value="">Select Union</option>`;

                data.forEach(function (union) {

                    let option = document.createElement('option');

                    option.value = union;
                    option.textContent = union;

                    unionSelect.appendChild(option);

                });

            });

    });

});

</script>

</body>
</html>