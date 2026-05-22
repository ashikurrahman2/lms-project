<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Register</title>

<script src="https://cdn.tailwindcss.com"></script>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet"
/>

<style>

body{
font-family:'Poppins',sans-serif;
}

.input-group{
position:relative;
}

.field{

width:100%;

height:64px;

padding:
26px
20px
10px
20px;

border-radius:20px;

background:#fff;

border:1px solid #e5e7eb;

outline:none;

transition:.3s;

font-size:15px;

box-shadow:
0 8px 30px rgba(0,0,0,.05);

}

.field:focus{

border-color:#4f46e5;

box-shadow:
0 0 0 5px rgba(79,70,229,.12);

}

.input-label{

position:absolute;

left:20px;

top:20px;

color:#94a3b8;

transition:.3s;

pointer-events:none;

}

.field:focus+.input-label,
.field:not(:placeholder-shown)+.input-label{

top:8px;

font-size:11px;

font-weight:700;

color:#4f46e5;

}

.select-field{

padding:0 20px;

}

.upload-card{

height:160px;

border:2px dashed #d1d5db;

border-radius:28px;

display:flex;

align-items:center;

justify-content:center;

cursor:pointer;

transition:.3s;

}

.upload-card:hover{

border-color:#4f46e5;

background:#eef2ff;

}

</style>

</head>

<body
class="min-h-screen bg-gradient-to-br from-indigo-950 via-blue-900 to-slate-950">

<div
class="min-h-screen flex items-center justify-center p-4">

<div
class="w-full max-w-7xl overflow-hidden rounded-[36px] bg-white shadow-2xl">

<div
class="grid lg:grid-cols-2">

<!-- LEFT -->

<div
class="hidden lg:flex flex-col justify-center p-20 bg-gradient-to-br from-blue-700 to-indigo-900 text-white">

<h1
class="text-6xl font-bold">

Mistri
<span class="text-cyan-300">
Admin
</span>

</h1>

<p
class="mt-10 text-lg leading-9 text-white/80">

{{ $seo->meta_description }}

</p>

<div
class="grid grid-cols-3 gap-4 mt-10">

<div class="bg-white/10 rounded-3xl p-6">
Secure
</div>

<div class="bg-white/10 rounded-3xl p-6">
Fast
</div>

<div class="bg-white/10 rounded-3xl p-6">
Modern
</div>

</div>

</div>

<!-- RIGHT -->

<div
class="p-5 sm:p-10 lg:p-14">

<div
class="max-w-3xl mx-auto">

<div class="text-center">

<h2
class="text-4xl font-bold text-slate-800">

Create Account

</h2>

<p
class="text-slate-500 mt-2">

Register Admin Profile

</p>

</div>

<form
method="POST"
action="{{ route('admin.register') }}"
enctype="multipart/form-data"
class="space-y-5 mt-10">

@csrf

<!-- NAME -->

<div class="input-group">

<input
type="text"
name="name"
placeholder=" "
value="{{ old('name') }}"
class="field"
/>

<label class="input-label">
Full Name
</label>

</div>

<!-- EMAIL -->

<div class="input-group">

<input
type="email"
name="email"
placeholder=" "
value="{{ old('email') }}"
class="field"
/>

<label class="input-label">
Email Address
</label>

</div>

<!-- PASSWORD -->

<div
class="grid md:grid-cols-2 gap-5">

<div class="input-group">

<input
type="password"
name="password"
placeholder=" "
class="field"
/>

<label class="input-label">

Password

</label>

</div>

<div class="input-group">

<input
type="password"
name="password_confirmation"
placeholder=" "
class="field"
/>

<label class="input-label">

Confirm Password

</label>

</div>

</div>

<!-- IMAGE -->

<div
class="grid md:grid-cols-2 gap-5">

<label
class="upload-card">

<input
type="file"
name="image"
hidden
>

<div class="text-center">

<div class="text-5xl">

📷

</div>

<p class="mt-3 text-slate-500">

Upload Profile

</p>

</div>

</label>

<div class="input-group">

<input
type="text"
name="mobile_number"
placeholder=" "
class="field"
/>

<label class="input-label">

Mobile Number

</label>

</div>

</div>

<!-- SELECT -->

<div
class="grid md:grid-cols-2 gap-5">

<select
name="gender"
class="field select-field">

<option>
Select Gender
</option>

<option>
Male
</option>

<option>
Female
</option>

<option>
Other
</option>

</select>

<select
name="religion"
class="field select-field">

<option>
Select Religion
</option>

<option>
Islam
</option>

<option>
Christianity
</option>

<option>
Hinduism
</option>

</select>

</div>

<div
class="grid md:grid-cols-2 gap-5">

<select
name="blood_group"
class="field select-field">

<option>
Blood Group
</option>

<option>A+</option>
<option>B+</option>
<option>O+</option>

</select>

<select
name="profession_type"
class="field select-field">

<option>
Profession
</option>

<option>
Electrician
</option>

<option>
Plumber
</option>

<option>
Tiles Worker
</option>

</select>

</div>

<!-- LOCATION -->

<div
class="grid md:grid-cols-2 gap-5">

<select
id="division"
name="division"
class="field select-field">

<option>
Division
</option>

</select>

<select
id="district"
name="district"
class="field select-field">

<option>
District
</option>

</select>

</div>

<select
id="upazila"
name="upazila"
class="field select-field">

<option>
Upazila
</option>

</select>

<!-- BUTTON -->

<button
type="submit"
class="w-full rounded-3xl py-5 text-white font-semibold text-lg bg-gradient-to-r from-blue-600 to-indigo-700 hover:scale-[1.02] duration-300">

Create Account

</button>

<div
class="text-center">

<p
class="text-slate-500">

Already have an account?

<a
href="{{ route('admin.login') }}"
class="font-semibold text-indigo-600">

Login

</a>

</p>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</body>

</html>