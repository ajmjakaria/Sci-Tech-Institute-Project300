<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sci-Tech Institute | Regular Page</title>

    <!-- Favicon -->
    <link rel="icon" href="clever_temp/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="clever_temp/style.css">

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

    <!-- ##### Regular Page Area Start ##### -->
    <div class="regular-page-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content">
                        <h4>Community Guidelines</h4>
                        <p>Sed elementum lacus a risus luctus suscipit. Aenean sollicitudin sapien neque, in fermentum lorem dignissim a. Nullam eu mattis quam. Donec porttitor nunc a diam molestie blandit. Maecenas quis ultrices ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eget vehicula lorem, vitae porta nisi. Ut vel quam erat. Ut vitae erat tincidunt, tristique mi ac, pharetra dolor. In et suscipit ex. Pellentesque aliquet velit tortor, eget placerat mi scelerisque a. Aliquam eu dui efficitur purus posuere viverra. Proin ut elit mollis, euismod diam et, fermentum enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Regular Page Area End ##### -->

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