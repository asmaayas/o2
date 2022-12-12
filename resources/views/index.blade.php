<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NFTMAK - NFT Marketplace Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset("/assets/img/favicon.png") }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/magnific-popup.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/fontawesome-all.min.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/uicons-solid-rounded.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/jquery.mCustomScrollbar.min.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/flaticon.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/slick.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/default.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("/assets/css/responsive.css") }}">
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
            <div class="sidebar-logo mb-25">
                <a href="{{ url("index.html") }}"><img src="{{ asset("/assets/img/logo/logo.png") }}" alt=""></a>
            </div>
            <div class="sidebar-icon">
                <ul>
                    <li class="active"><a href="{{ url("index.html") }}"><i class="fi-sr-apps-delete"></i></a></li>
                    <li><a href="{{ url("nft-live-bidding.html") }}"><i class="fi-sr-book-alt"></i></a></li>
                    <li><a href="{{ url("collections.html") }}"><i class="fi-sr-butterfly"></i></a></li>
                    <li><a href="{{ url("create-item.html") }}"><i class="fi-sr-camping"></i></a></li>
                    <li><a href="{{ url("category.html") }}"><i class="fi-sr-crown"></i></a></li>
                    <li><a href="{{ url("author-profile.html") }}"><i class="fi-sr-settings"></i></a></li>
                    <li><a href="{{ url("#") }}" id="btnFullscreen"><i class="fi-sr-tool-marquee"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- sidebar-end -->

        <!-- Offcanvas-area -->
        <div class="offcanvas-wrapper">
            <div class="menu-trigger"><i class="fi-sr-angle-small-left"></i></div>
            <div class="menu-close"><i class="fi-sr-angle-small-right"></i></div>
            <div class="offcanvas-inner scroll">
                <div class="author-profile text-center mb-30">
                    <div class="author-img">
                        <img src="{{ asset("/assets/img/others/author_img.png") }}" alt="">
                    </div>
                    <div class="author-content">
                        <h4 class="title">Author Profile</h4>
                        <p>Super Author</p>
                        <a href="{{ url("login-register.html") }}" class="btn">Checkout</a>
                    </div>
                </div>
                <div class="sidebar-slider text-center mb-25">
                    <div class="sidebar-active">
                        <div class="sidebar-img">
                            <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/sidebar_img01.png") }}" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/sidebar_img02.png") }}" alt=""></a>
                        </div>
                        <div class="sidebar-img">
                            <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/sidebar_img03.png") }}" alt=""></a>
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
                            <a href="{{ url("nft-marketplace.html") }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class="fi-sr-mountains"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Successful Completed</h4>
                                <span>546</span>
                            </div>
                            <a href="{{ url("nft-marketplace.html") }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <i class=" fi-sr-hourglass-end"></i>
                            </div>
                            <div class="overview-content">
                                <h4 class="title">trending</h4>
                                <span>32</span>
                            </div>
                            <a href="{{ url("nft-marketplace.html") }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- Offcanvas-area-end -->

        <!-- main-content -->
        <div class="main-content">
            <!-- header-area -->
            <header>
                <div class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                                <div class="menu-wrap">
                                    <nav class="menu-nav">
                                        <div class="logo"><a href="{{ url("index.html") }}"><img src="{{ asset("/assets/img/logo/naftmak.svg") }}" alt=""></a></div>
                                        <div class="header-form">
                                            <form action="#">
                                                <button><i class="flaticon-search"></i></button>
                                                <input type="text" placeholder="Search Artwork">
                                            </form>
                                        </div>
                                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                                            <ul class="navigation">
                                                <li class="active"><a href="{{ url("index.html") }}">Home</a></li>
                                                <li><a href="{{ url("nft-marketplace.html") }}">Explore</a></li>
                                                <li><a href="{{ url("collections.html") }}">Collection</a></li>
                                                <li class="menu-item-has-children"><a href="{{ url("#") }}">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url("activity.html") }}">Activity</a></li>
                                                        <li><a href="{{ url("category.html") }}">Category</a></li>
                                                        <li><a href="{{ url("ranking.html") }}">Ranking</a></li>
                                                        <li><a href="{{ url("creators.html") }}">Creators</a></li>
                                                        <li><a href="{{ url("market-single.html") }}">Market Single</a></li>
                                                        <li><a href="{{ url("nft-live-bidding.html") }}">Live Bidding</a></li>
                                                        <li><a href="{{ url("create-item.html") }}">Create Item</a></li>
                                                        <li><a href="{{ url("author-profile.html") }}">Author Profile</a></li>
                                                        <li><a href="{{ url("login-register.html") }}">Login & Register</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="{{ url("#") }}">Blog</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ url("blog.html") }}">Our Blog</a></li>
                                                        <li><a href="{{ url("blog-details.html") }}">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="header-action d-none d-md-block">
                                            <ul>
                                                <li class="header-btn"><a href="{{ url("connect-wallets.html") }}" class="btn">Wallet Connect</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <!-- Mobile Menu  -->
                                <div class="mobile-menu">
                                    <nav class="menu-box">
                                        <div class="close-btn"><i class="fas fa-times"></i></div>
                                        <div class="nav-logo"><a href="{{ url("index.html") }}"><img src="{{ asset("/assets/img/logo/logo.png") }}" alt=""></a>
                                        </div>
                                        <div class="menu-outer">
                                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                        </div>
                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li><a href="{{ url("#") }}"><span class="fab fa-twitter"></span></a></li>
                                                <li><a href="{{ url("#") }}"><span class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="{{ url("#") }}"><span class="fab fa-pinterest-p"></span></a></li>
                                                <li><a href="{{ url("#") }}"><span class="fab fa-instagram"></span></a></li>
                                                <li><a href="{{ url("#") }}"><span class="fab fa-youtube"></span></a></li>
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
            </header>
            <!-- header-area-end -->

            <!-- main-area -->
            <main>

                <div class="banner-bg">
                    <!-- banner-area -->
                    <div class="banner-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8">
                                    <div class="banner-content">
                                        <h2 class="title">Buy and sell digital art <br> <span>NFT</span> collection</h2>
                                        <p>Everything you need to build, host, scale amazing dapps free by creating account today</p>
                                        <a href="{{ url("login-register.html") }}" class="banner-btn">Let’s get started <i class="fi-sr-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-area-end -->

                    <!-- top-seller-area -->
                    <div class="top-seller-area">
                        <div class="container">
                            <div class="top-seller-wrap">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title mb-40">
                                            <h2 class="title">Top Seller <img src="{{ asset("/assets/img/icons/title_icon01.png") }}" alt=""></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="top-seller-item">
                                            <div class="top-seller-img">
                                                <img src="{{ asset("/assets/img/others/top-seller-img.jpg") }}" alt="">
                                            </div>
                                            <div class="top-seller-content">
                                                <h5 class="title"><a href="{{ url("author-profile.html") }}">Alan walker</a></h5>
                                                <p>885.5 <span>Eth</span></p>
                                                <ul class="icon">
                                                    <li><a href="{{ url("collections.html") }}"><i class="fi-sr-pharmacy"></i></a></li>
                                                    <li><a href="{{ url("login-register.html") }}"><i class="fi-sr-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="top-seller-item">
                                            <div class="top-seller-img">
                                                <img src="{{ asset("/assets/img/others/top-seller-img02.jpg") }}" alt="">
                                            </div>
                                            <div class="top-seller-content">
                                                <h5 class="title"><a href="{{ url("author-profile.html") }}">Mazanov Sky</a></h5>
                                                <p>885.5 <span>Eth</span></p>
                                                <ul class="icon">
                                                    <li><a href="{{ url("collections.html") }}"><i class="fi-sr-pharmacy"></i></a></li>
                                                    <li><a href="{{ url("login-register.html") }}"><i class="fi-sr-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="top-seller-item">
                                            <div class="top-seller-img">
                                                <img src="{{ asset("/assets/img/others/top-seller-img03.jpg") }}" alt="">
                                            </div>
                                            <div class="top-seller-content">
                                                <h5 class="title"><a href="{{ url("author-profile.html") }}">Alvin Nov</a></h5>
                                                <p>885.5 <span>Eth</span></p>
                                                <ul class="icon">
                                                    <li><a href="{{ url("collections.html") }}"><i class="fi-sr-pharmacy"></i></a></li>
                                                    <li><a href="{{ url("login-register.html") }}"><i class="fi-sr-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-sm-6">
                                        <div class="top-seller-item">
                                            <div class="top-seller-img">
                                                <img src="{{ asset("/assets/img/others/top-seller-img04.jpg") }}" alt="">
                                            </div>
                                            <div class="top-seller-content">
                                                <h5 class="title"><a href="{{ url("author-profile.html") }}">Jimmy Dom</a></h5>
                                                <p>885.5 <span>Eth</span></p>
                                                <ul class="icon">
                                                    <li><a href="{{ url("collections.html") }}"><i class="fi-sr-pharmacy"></i></a></li>
                                                    <li><a href="{{ url("login-register.html") }}"><i class="fi-sr-share"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- top-seller-area-end -->
                </div>

                <!-- top-collection-area -->
                <section class="top-collection-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title mb-40">
                                    <h2 class="title">Top collections <img src="{{ asset("/assets/img/icons/title_icon01.png") }}" alt=""></h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="top-collection-nav"></div>
                            </div>
                        </div>
                        <div class="row top-collection-active">
                            <div class="col-xl-3">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection01.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection02.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">Colorful Abstract</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection03.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">The girl firefly</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection04.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">Forest Princess</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection05.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">NFT Painting</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- top-collection-area-end -->

                <div class="area-bg">
                <!-- week-features-area -->
                <section class="week-features-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title mb-35">
                                    <h2 class="title">Features of the week <img src="{{ asset("/assets/img/icons/title_icon02.png") }}" alt=""></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="week-features-item">
                                    <div class="features-item-top">
                                        <div class="features-avatar">
                                            <div class="features-avatar-thumb">
                                                <a href="{{ url("author-profile.html") }}"><img src="{{ asset("/assets/img/others/features_avatar.png") }}" alt=""></a>
                                            </div>
                                            <div class="features-avatar-info">
                                                <h5 class="title"><a href="{{ url("nft-marketplace.html") }}">Deploy Abstract</a></h5>
                                                <span>Created by <a href="{{ url("author-profile.html") }}">Konx</a></span>
                                            </div>
                                        </div>
                                        <div class="features-item-wishlist">
                                            <a href="{{ url("#") }}">100</a>
                                        </div>
                                    </div>
                                    <ul class="features-img-wrap">
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img01.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img02.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img03.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img04.png") }}" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="week-features-item">
                                    <div class="features-item-top">
                                        <div class="features-avatar">
                                            <div class="features-avatar-thumb">
                                                <a href="{{ url("author-profile.html") }}"><img src="{{ asset("/assets/img/others/features_avatar02.png") }}" alt=""></a>
                                            </div>
                                            <div class="features-avatar-info">
                                                <h5 class="title"><a href="{{ url("nft-marketplace.html") }}">Random Abstract</a></h5>
                                                <span>Created by <a href="{{ url("author-profile.html") }}">Tanuok</a></span>
                                            </div>
                                        </div>
                                        <div class="features-item-wishlist">
                                            <a href="{{ url("#") }}">300</a>
                                        </div>
                                    </div>
                                    <ul class="features-img-wrap">
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/s_features_img01.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img02.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/s_features_img03.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/s_features_img04.png") }}" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5">
                                <div class="week-features-item">
                                    <div class="features-item-top">
                                        <div class="features-avatar">
                                            <div class="features-avatar-thumb">
                                                <a href="{{ url("author-profile.html") }}"><img src="{{ asset("/assets/img/others/features_avatar03.png") }}" alt=""></a>
                                            </div>
                                            <div class="features-avatar-info">
                                                <h5 class="title"><a href="{{ url("nft-marketplace.html") }}">Colorful Abstract</a></h5>
                                                <span>Created by <a href="{{ url("author-profile.html") }}">Jonson</a></span>
                                            </div>
                                        </div>
                                        <div class="features-item-wishlist">
                                            <a href="{{ url("#") }}">190</a>
                                        </div>
                                    </div>
                                    <ul class="features-img-wrap">
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/t_features_img01.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img02.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/features_img03.png") }}" alt=""></li>
                                        <li class="grid-item"><img src="{{ asset("/assets/img/others/t_features_img04.png") }}" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- week-features-area-end -->

                <!-- sell-nfts-area -->
                <section class="sell-nfts-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title mb-45">
                                    <h2 class="title">Create And Sell Your NFTs <img src="{{ asset("/assets/img/icons/title_icon03.png") }}" alt=""></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="{{ asset("/assets/img/icons/nfts_01.png") }}" alt="" class="icon">
                                    <span class="step-count">go step 1</span>
                                    <h5 class="title">Create And Sell</h5>
                                    <p>Wallet that is functional for NFT purchasing. You have Coinbase account at this point.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="{{ asset("/assets/img/icons/nfts_02.png") }}" alt="" class="icon">
                                    <span class="step-count">go step 2</span>
                                    <h5 class="title">Create Collection</h5>
                                    <p>Wallet that is functional for NFT purchasing. You have Coinbase account at this point.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="{{ asset("/assets/img/icons/nfts_03.png") }}" alt="" class="icon">
                                    <span class="step-count">go step 3</span>
                                    <h5 class="title">Add Your NFTs</h5>
                                    <p>Wallet that is functional for NFT purchasing. You have Coinbase account at this point.</p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="sell-nfts-item">
                                    <img src="{{ asset("/assets/img/icons/nfts_04.png") }}" alt="" class="icon">
                                    <span class="step-count">go step 4</span>
                                    <h5 class="title">List Them For Sale</h5>
                                    <p>Wallet that is functional for NFT purchasing. You have Coinbase account at this point.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- sell-nfts-area-end -->
                </div>

                <!-- explore-products-area -->
                <section class="explore-products-area">
                    <div class="container">
                        <div class="row mb-35">
                            <div class="col-md-7 col-sm-8">
                                <div class="section-title">
                                    <h2 class="title">Explore Product <img src="{{ asset("/assets/img/icons/title_icon01.png") }}" alt=""></h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-4">
                                <div class="section-button text-end">
                                    <a href="{{ url("#") }}" class="btn filter-btn filter-toggle"><i class="fi-sr-filter"></i> filter</a>
                                </div>
                            </div>
                        </div>
                        <div class="filter-category-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <ul class="category-list">
                                        <li class="active"><a href="{{ url("index.html") }}"><img src="{{ asset("/assets/img/icons/cat_001.png") }}" alt=""> All</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_01.png") }}" alt=""> Games</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_02.png") }}" alt=""> Art</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_03.png") }}" alt=""> Trading Cards</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_04.png") }}" alt=""> Music</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_05.png") }}" alt=""> Domain Names</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_06.png") }}" alt=""> Memes</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/icons/cat_07.png") }}" alt=""> Collectibles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection01.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection05.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">Colorful Abstract</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("nft-marketplace.html") }}"><img src="{{ asset("/assets/img/others/top_collection06.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("nft-marketplace.html") }}">The Girl Firefly</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection07.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">Forest Princess</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection08.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">NFT Painting</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection09.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">Colorful Abstract</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection10.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">Bid Collection</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="top-collection-item">
                                    <div class="collection-item-top">
                                        <ul>
                                            <li class="avatar"><a href="{{ url("author-profile.html") }}" class="thumb"><img src="{{ asset("/assets/img/others/top_col_avatar.png") }}" alt=""></a>By <a href="{{ url("author-profile.html") }}" class="name">Jonson</a></li>
                                            <li class="info-dots dropdown">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <a href="{{ url("#") }}" class="dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Artwork</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Action</a></li>
                                                    <li><a href="{{ url("nft-marketplace.html") }}">Author Action</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="collection-item-thumb">
                                        <a href="{{ url("market-single.html") }}"><img src="{{ asset("/assets/img/others/top_collection11.jpg") }}" alt=""></a>
                                    </div>
                                    <div class="collection-item-content">
                                        <h5 class="title"><a href="{{ url("market-single.html") }}">NFT Collection</a> <span class="price">5.4 ETH</span></h5>
                                    </div>
                                    <div class="collection-item-bottom">
                                        <ul>
                                            <li class="bid"><a href="{{ url("market-single.html") }}" class="btn">place a bid</a></li>
                                            <li class="wishlist"><a href="{{ url("login-register.html") }}">59</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- explore-products-area-end -->

                <!-- latest-news -->
                <section class="latest-news-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="section-title mb-45">
                                    <h2 class="title">Latest News Update <img src="{{ asset("/assets/img/icons/title_icon01.png") }}" alt=""></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-md-6 col-sm-9">
                                <div class="latest-news-item">
                                    <div class="latest-news-thumb">
                                        <img src="{{ asset("/assets/img/blog/news_thumb01.png") }}" alt="">
                                    </div>
                                    <div class="latest-news-content">
                                        <ul class="latest-news-meta">
                                            <li><i class="flaticon-user"></i><a href="{{ url("blog.html") }}">Admin</a></li>
                                            <li><i class="fi-sr-calendar"></i> Jan 12, 2022</li>
                                        </ul>
                                        <h4 class="title"><a href="{{ url("blog-details.html") }}">Top 5 Most Popular NFT Games world most powerful ?</a></h4>
                                        <a href="{{ url("blog-details.html") }}" class="btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-9">
                                <div class="latest-news-item">
                                    <div class="latest-news-thumb">
                                        <img src="{{ asset("/assets/img/blog/news_thumb02.png") }}" alt="">
                                    </div>
                                    <div class="latest-news-content">
                                        <ul class="latest-news-meta">
                                            <li><i class="flaticon-user"></i><a href="{{ url("blog.html") }}">Admin</a></li>
                                            <li><i class="fi-sr-calendar"></i> Jan 19, 2022</li>
                                        </ul>
                                        <h4 class="title"><a href="{{ url("blog-details.html") }}">NFTs, rare digital items worlds crypto collectibles</a></h4>
                                        <a href="{{ url("blog-details.html") }}" class="btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-9">
                                <div class="latest-news-item">
                                    <div class="latest-news-thumb">
                                        <img src="{{ asset("/assets/img/blog/news_thumb03.png") }}" alt="">
                                    </div>
                                    <div class="latest-news-content">
                                        <ul class="latest-news-meta">
                                            <li><i class="flaticon-user"></i><a href="{{ url("blog.html") }}">Admin</a></li>
                                            <li><i class="fi-sr-calendar"></i> Jan 19, 2022</li>
                                        </ul>
                                        <h4 class="title"><a href="{{ url("blog-details.html") }}">Crypto enthusiasts on a single platform to create</a></h4>
                                        <a href="{{ url("blog-details.html") }}" class="btn">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- latest-news-end -->

                <!-- design-ways-area -->
                <section class="design-ways-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="design-ways-item">
                                    <div class="overlay-icon"><i class="flaticon-download"></i></div>
                                    <div class="icon"><i class="flaticon-download"></i></div>
                                    <div class="content">
                                        <h3 class="title">Free</h3>
                                        <p>Only two download</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="design-ways-item">
                                    <div class="overlay-icon"><i class="flaticon-download-1"></i></div>
                                    <div class="icon"><i class="flaticon-download-1"></i></div>
                                    <div class="content">
                                        <h3 class="title">Unlimited</h3>
                                        <p>Personal & commercial use</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="design-ways-item">
                                    <div class="overlay-icon"><i class="flaticon-help"></i></div>
                                    <div class="icon"><i class="flaticon-help"></i></div>
                                    <div class="content">
                                        <h3 class="title">Support</h3>
                                        <p>You can download</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="design-ways-item">
                                    <div class="overlay-icon"><i class="flaticon-repairing-service"></i></div>
                                    <div class="icon"><i class="flaticon-repairing-service"></i></div>
                                    <div class="content">
                                        <h3 class="title">Private</h3>
                                        <p>Personal data collection</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- design-ways-area-end -->

                <!-- testimonial-area -->
                <section class="testimonial--area">
                    <div class="container">
                        <div class="testimonial-shape-wrap">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9 col-md-10">
                                    <div class="testimonial-active">
                                        <div class="testimonial--item text-center">
                                            <div class="testimonial-rating">
                                                <img src="{{ asset("/assets/img/others/star.png") }}" alt="">
                                            </div>
                                            <div class="testimonial--content">
                                                <p>“ What even is an NFT? NFT stands for non-fungible token, which basically means that it's one kind digital asset that belongs to you and you only. The most popular NFTs right include artwork and music, include videos and even tweets “</p>
                                                <div class="testimonial--avatar--info">
                                                    <h5 class="title">Alexandra Pilot</h5>
                                                    <a href="{{ url("contact.html") }}" class="see-all">See All Reviews</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial--item text-center">
                                            <div class="testimonial-rating">
                                                <img src="{{ asset("/assets/img/others/star.png") }}" alt="">
                                            </div>
                                            <div class="testimonial--content">
                                                <p>“ What even is an NFT? NFT stands for non-fungible token, which basically means that it's one kind digital asset that belongs to you and you only. The most popular NFTs right include artwork and music, include videos and even tweets “</p>
                                                <div class="testimonial--avatar--info">
                                                    <h5 class="title">Alexandra Pilot</h5>
                                                    <a href="{{ url("contact.html") }}" class="see-all">See All Reviews</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial--item text-center">
                                            <div class="testimonial-rating">
                                                <img src="{{ asset("/assets/img/others/star.png") }}" alt="">
                                            </div>
                                            <div class="testimonial--content">
                                                <p>“ What even is an NFT? NFT stands for non-fungible token, which basically means that it's one kind digital asset that belongs to you and you only. The most popular NFTs right include artwork and music, include videos and even tweets “</p>
                                                <div class="testimonial--avatar--info">
                                                    <h5 class="title">Alexandra Pilot</h5>
                                                    <a href="{{ url("contact.html") }}" class="see-all">See All Reviews</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonial-area-end -->

            </main>
            <!-- main-area-end -->


            <!-- footer-area -->
            <footer>
                <div class="footer-top-wrap">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-9">
                                <div class="footer-widget">
                                    <div class="footer-logo mb-25">
                                        <a href="{{ url("index.html") }}"><img src="{{ asset("/assets/img/logo/logo.png") }}" alt=""></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus veritatis sequi doloribus fuga.</p>
                                    <ul class="footer-social">
                                        <li><a href="{{ url("#") }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ url("#") }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ url("#") }}"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="{{ url("#") }}"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Useful Links</h4>
                                    <ul class="fw-links">
                                        <li><a href="{{ url("nft-marketplace.html") }}">All NFTs</a></li>
                                        <li><a href="{{ url("login-register.html") }}">How It Works</a></li>
                                        <li><a href="{{ url("create-item.html") }}">Create</a></li>
                                        <li><a href="{{ url("nft-marketplace.html") }}">Explore</a></li>
                                        <li><a href="{{ url("login-register.html") }}">Privacy & Terms</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Community</h4>
                                    <ul class="fw-links">
                                        <li><a href="{{ url("login-register.html") }}">Help Center</a></li>
                                        <li><a href="{{ url("login-register.html") }}">Partners</a></li>
                                        <li><a href="{{ url("login-register.html") }}">Suggestions</a></li>
                                        <li><a href="{{ url("blog.html") }}">Blog</a></li>
                                        <li><a href="{{ url("login-register.html") }}">Newsletter</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="footer-widget">
                                    <h4 class="fw-title">Subscribe Us</h4>
                                    <form action="#" class="newsletter-form">
                                        <input type="email" placeholder="info@youmail.com">
                                        <button type="submit"><i class="flaticon-small-rocket-ship-silhouette"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-wrap">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="copyright-text">
                                    <p>All rights reserved © 2022 by <a href="{{ url("#") }}">ThemeBeyond</a></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <ul class="copyright-link-list">
                                    <li><a href="{{ url("login-register.html") }}">Privacy Policy</a></li>
                                    <li><a href="{{ url("login-register.html") }}">Terms And Condition</a></li>
                                    <li><a href="{{ url("login-register.html") }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->

        </div>
        <!-- main-content-end -->



		<!-- JS here -->
        <script src="{{ asset("/assets/js/vendor/jquery-3.6.0.min.js") }}"></script>
        <script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
        <script src="{{ asset("/assets/js/isotope.pkgd.min.js") }}"></script>
        <script src="{{ asset("/assets/js/imagesloaded.pkgd.min.js") }}"></script>
        <script src="{{ asset("/assets/js/jquery.magnific-popup.min.js") }}"></script>
        <script src="{{ asset("/assets/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
        <script src="{{ asset("/assets/js/slick.min.js") }}"></script>
        <script src="{{ asset("/assets/js/wow.min.js") }}"></script>
        <script src="{{ asset("/assets/js/plugins.js") }}"></script>
        <script src="{{ asset("/assets/js/main.js") }}"></script>
    </body>
</html>