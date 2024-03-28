<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="Sikshanation - Find Top Colleges, Universities in India, Explore Courses, Exams, Admissions, Latest News">
    <meta name="keywords" content="Sikshanation - Find Top Colleges, Universities in India, Explore Courses, Exams, Admissions, Latest News">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('assets/css/metismenu.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Scripts -->
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('pages.header') <!-- Assuming 'header.php' is in 'pages' folder -->
    
        <!-- Page Content -->
        <main>
        @yield('content')
        </main>
    </div>
    @include('pages.footer')
</body>
</html>
