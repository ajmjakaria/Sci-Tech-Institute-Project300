<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="clever_temp/style.css">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sci-Tech Institute|Courses</title>

    <!-- Favicon -->
    <link rel="icon" href="clever_temp/img/core-img/favicon.ico">

    <!-- Stylesheet <link rel="stylesheet" href="{{ asset('clever_temp/style.css') }}">-->
    
    

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        @include('topheader');

        <!-- Navbar Area -->
        @include('main-nav');
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Courses-Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Design</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(clever_temp/img/bg-img/bg2.jpg);">
        <h3>We provide best online resources<br>|Design|</h3>
    </div>

    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
    	@include('browse_courses.common_files');
    </section>
    <!-- ##### Popular Course Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
            @include('main_footer');
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="clever_temp/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="clever_temp/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="clever_temp/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="clever_temp/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="clever_temp/js/active.js"></script>
</body>

</html>