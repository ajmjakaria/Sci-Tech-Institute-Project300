<div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="clever_temp/img/core-img/STIlogo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{URL('/')}}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{URL('/')}}">Home</a></li>
                                        <li><a href="{{URL('/courses-category')}}">Courses</a></li>
                                        <li><a href="{{URL('/single-course')}}">Single Courses</a></li>
                                        <li><a href="{{URL('/instructors')}}">Instructors</a></li>
                                        <li><a href="{{URL('/blog')}}">Blog</a></li>
                                        <li><a href="{{URL('/blog-details')}}">Single Blog</a></li>
                                        <li><a href="{{URL('/regular-page')}}">Guidelines</a></li>
                                        <li><a href="{{URL('/about')}}">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{URL('/courses-category')}}">Courses</a></li>
                                <li><a href="{{URL('/instructors')}}">Instructors</a></li>
                                <li><a href="{{URL('/blog')}}">Blog</a></li>
                                <li><a href="{{URL('/about')}}">Contact</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                               <!-- <a href="{{URL('/register')}}" class="btn">Register</a>
                                <a href="index-login.html" class="btn active">Login</a>
                                <a href="{{URL('/login')}}" class="btn active">Login</a>-->
                                <a href="{{URL('/login')}}" class="btn active">Login Status</a>                
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
        </div>
</div>