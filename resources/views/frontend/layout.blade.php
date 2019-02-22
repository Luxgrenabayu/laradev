<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.includes.head')
</head>
<body>
    <!-- Navigation -->
    @include('frontend.includes.nav')
    <!-- Header -->
    @yield('header2')
    
    <!-- Page Content -->
    @yield('content')

    @include('frontend.includes.footer')

    @include('frontend.includes.foot')
</body>
</html>