<!DOCTYPE HTML>
<html lang="vi">

<!-- Mirrored from gmag.kwst.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 16:27:50 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    @include('clients.layouts.partials.css')
</head>

<body>
    <!-- main start  -->
    <div id="main">
        <!-- progress-bar  -->
        <div class="progress-bar-wrap">
            <div class="progress-bar color-bg"></div>
        </div>
        <!-- progress-bar end -->
        <!-- header -->
        <header class="main-header">
            <!-- top bar -->
            @include('clients.layouts.partials.top-bar')
            <!-- top bar end -->
            @include('clients.layouts.partials.header-inner')
        </header>
        <!-- header end  -->
        <!-- wrapper -->
        <div id="wrapper">
            <!-- content    -->
            @yield('content')
            <!-- content  end-->
            <!-- footer -->
            <footer class="fl-wrap main-footer">
                @include('clients.layouts.partials.footer')
            </footer>
            <!-- footer end-->
            @include('clients.layouts.partials.aside-panel')
        </div>
        <!-- wrapper end -->
        
        <!--register form -->
        <div class="main-register-container">
            <div class="reg-overlay close-reg-form"></div>
            @include('clients.layouts.partials.form-login')
        </div>
        <!--register form end -->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    @include('clients.layouts.partials.js')
</body>

<!-- Mirrored from gmag.kwst.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 16:28:24 GMT -->

</html>
