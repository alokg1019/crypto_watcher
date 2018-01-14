<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>

<!-- Preloader -->
<div class="preloader">
    <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
    </div>
</div>


<!-- Sidebar -->
@include('partials.sidebar')
<!-- END Sidebar -->


<!-- Topbar -->
@include('partials.topbar')
<!-- END Topbar -->


<!-- Main container -->
<main>
    <div class="main-content">


        @yield('main-content')


    </div><!--/.main-content -->


    <!-- Footer -->
@include('partials.footer')
<!-- END Footer -->

</main>
<!-- END Main container -->


<!-- Global quickview -->
<div id="qv-global" class="quickview" data-url="/data/quickview-global.html">
    <div class="spinner-linear">
        <div class="line"></div>
    </div>
</div>
<!-- END Global quickview -->


<!-- Scripts -->
@include('partials.scripts')

@yield('extra-script')