<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
   
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uicons-solid-rounded.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        @yield('link')
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar-logo mb-100 mt-25">
                <a href="{{ url('index.html') }}"><img src="{{ asset('https://imgs.search.brave.com/HrlZ4j2HfBoFriokx-qOLfKh2pwclFZmC9TAjceElQ0/rs:fit:640:480:1/g:ce/aHR0cHM6Ly8yLmJw/LmJsb2dzcG90LmNv/bS8tb1RXYWx4a25f/ZE0vVWJXVjFnNEJf/cEkvQUFBQUFBQUFG/bTgvb3FmeUg3ZlB6/ejgvczE2MDAvZ2xv/c3N5K3JvdW5kK2Zs/YWcrb2Yram9yZGFu/LnBuZw') }}" alt="" ></a>
            </div>
            <div class="sidebar-icon">
                <ul>
                    <li class="active"><a href="{{ url('') }}"><i class="fi-sr-home"></i> <span id="nav1">Home</span></a></li>
                    <li><a href="{{ url('l') }}"><i class="fi-sr-globe"></i><span id="nav2"> Sites</span></a></li>
                    <li><a href="{{ url('') }}"><i class="fi-sr-building"></i><span id="nav3">Dive Center</span></a></li>
                    <li><a href="{{ url('') }}"><i class="fi-sr-camera"></i><span id="nav4">Fliter Image</span></a></li>
                    {{-- <li><a href="{{ url('category.html') }}"><i class="fi-sr-crown"></i></a></li> --}}
                    <li><a href="{{ url('') }}"><i class="fi-sr-book"></i><span id="nav5">Book</span></a></li>
                    <li><a href="{{ url("#") }}" id="btnFullscreen"><i class="fi-sr-user"></i><span id="nav6">Profile</span></a></li>
                </ul>
            </div>
        </div>
        <!-- sidebar-end -->
       
        <!-- Offcanvas-area -->
        <div class="offcanvas-wrapper">
            @yield('sidebar')
            {{-- <div class="menu-trigger"><i class="fi-sr-angle-small-left"></i></div>
            <div class="menu-close"><i class="fi-sr-angle-small-right"></i></div>
            <div class="offcanvas-inner scroll">
                <div class="author-profile text-center mb-30">
                    <div class="author-img">
                        <img src="{{ asset('/assets/img/others/author_img.png') }}" alt="">
                    </div>
                    <div class="author-content">
                        <h4 class="title">Author Profile</h4>
                        <p>Super Author</p>
                        <a href="{{ url('login-register.html') }}" class="btn">Checkout</a>
                    </div>
                </div>
                <div class="sidebar-slider text-center mb-25">
                    <div class="sidebar-active">
                        <div class="sidebar-img">
                            <a href="{{ url('market-single.html') }}"><img src="{{ asset('/assets/img/others/sidebar_img01.png') }}" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="{{ url('market-single.html') }}"><img src="{{ asset('/assets/img/others/sidebar_img02.png') }}" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="{{ url('market-single.html') }}"><img src="{{ asset('/assets/img/others/sidebar_img03.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="overview">
                    <div class="overview-title">
                        <h4 class="title">Overview</h4>
                    </div>
                    <div class="overview-item-wrap">
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-box-alt"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Open project</h4>
                                <span>820</span>
                            </div>
                            <a href="{{ url('nft-marketplace.html') }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-mountains"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Successful Completed</h4>
                                <span>546</span>
                            </div>
                            <a href="{{ url('nft-marketplace.html') }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class=" fi-sr-hourglass-end"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">trending</h4>
                                <span>32</span>
                            </div>
                            <a href="{{ url('nft-marketplace.html') }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
          
        </div>
        <div class="offcanvas-overly"></div>
        <div class="menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo"><a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a></div>
                               
                                
                           
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo"><a href="index.html"><img src="assets/img/logo/logo.png" alt="" title=""></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Offcanvas-area-end -->
       
        <!-- main-content -->
       
            <!-- header-area -->
            
            <!-- header-area-end -->

            <!-- main-area -->