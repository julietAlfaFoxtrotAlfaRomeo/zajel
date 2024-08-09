<!DOCTYPE html>
<html lang="en">

    @include('layout.header')

    <body>
        <!-- Navbar Start -->
       @include('layout.nav')
        <!-- Navbar End -->
        @yield('isi')
        <!-- Footer Start -->
        @include('layout.footer')
        <!-- Footer End -->

        @include('layout.sc')
    </body>

</html>