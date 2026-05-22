<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" href="{{ asset('/') }}user/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/') }}user/assets/images/favicon.png" type="image/x-icon">
    <title>LearnStack | @yield('title')</title>
</head>
<body>
   @include('user.layouts.navbar')
 <div class="page-wrapper compact-wrapper" id="pageWrapper">
   @yield('user_content')
 </div> 
   @include('user.layouts.footer')
   
   {{-- @include('user.layouts.sidebar') --}}
   
   @include('user.layouts.style')

   @include('user.layouts.script')
</body>
</html>