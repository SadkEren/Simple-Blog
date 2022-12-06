<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
<body>
    @if(Auth::user())
    <!-- Header-->
    @include('includes.header')

    <!-- Content-->
    @yield('content')

    <!-- Footer-->
    @include('includes.footer')

    @endif
</body>
</html>
