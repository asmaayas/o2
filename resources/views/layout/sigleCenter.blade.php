@extends('layout.master')
@section('title', 'Single Center')

@section('link')
    {{-- <link rel="stylesheet" href=" {{ asset('css/home.css') }} ">
<style>
</style> --}}
@endsection

@section('content')

@section('sidebar')

 <div class="menu-trigger"><i class="fi-sr-angle-small-left"></i></div>
            <div class="menu-close"><i class="fi-sr-angle-small-right"></i></div>
            <div class="offcanvas-inner scroll">
             
              
                <div class="overview">
                    <div class="overview-title mt-5">
                        <h4 class="title">This Center Sponsored Site</h4>
                    </div>
                    <div class="overview-item-wrap">
                        <div class="overview-item">
                            <div class="overview-icon">
                                <img src="{{asset('img/site/site1.jpeg')}}" alt="">
                            </div>
                            <div class="overview-content">
                                <h4 class="title">The Tank (M42 Duster)</h4>
                               
                            </div>
                            <a href="{{ url('') }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <img src="{{asset('img/site/IMG_4877-standard-scale-4_00x-scaled.jpeg')}}" alt="">
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Hercules C-130 </h4>
                               
                            </div>
                            <a href="{{ url('') }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                        <div class="overview-item">
                            <div class="overview-icon">
                                <img src="{{asset('img/site/IMG_4901.jpeg')}}" alt="">
                            </div>
                            <div class="overview-content">
                                <h4 class="title">Japanese garden reef</h4>
                           
                            </div>
                            <a href="{{ url('') }}"><i class=" fi-sr-angle-small-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

@endsection

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg breadcrumb-bg-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="breadcrumb-content text-center">
                        <h3 class="title">Aqaba Lesders Dive Center (ALDC)</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->



    <!-- author-profile-area -->
    <div class="author-profile-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 order-2 order-lg-0">
                    <aside class="author-profile-wrap">
                        <div class="author-profile-thumb">
                            <img src="{{asset('img/dive/dive.png')}}" alt="">
                        </div>
                        <div class="author-info">
                            <h5 class="title">ALCD <img src="assets/img/icons/star.svg" alt=""></h5>
                            <span>@ Aqaba Leaders Dive Center</span>
                            <p>Aqaba leaders dive center was founded in 2018 and we have accomplished so much over the years.
                                Our intention in creating a safe habitat for divers and the environment has always been our goals.
                                we provide a superior quality services for recreational divers and introducing new divers to the hidden gems of Red sea , Aqaba .
                                At ALDC , we encourage our community to take the lead in adopting a new way of life.</p>
                        </div>
                        <ul class="author-collection">
                            <li>
                                <p>Loction</p>
                                <span>Aqaba</span>
                            </li>
                            <li>
                                <p>View</p>
                                <span > <i class="fa fa-eye"></i> 235</span>
                            </li>
                        </ul>
                        <div class="author-social">
                            <h6 class="title">Contact info :</h6>
                            <ul>   
                                  
                                <li><a href="https://api.whatsapp.com/send?phone=+962788885362" ><div class="icon"><i class="fa fa-phone"></i></div> +962 78 888 5362 </a></li>
                                <li><a href="https://web.facebook.com/leaders.aqaba.dive.center?_rdc=1&_rdr" target="_blank"><div class="icon"><i class="fab fa-facebook-f"></i></div> Facebook </a></li>
                                <li><a href="https://www.instagram.com/aqaba_leaders_dive_center/" target="_blank"><div class="icon"><i class="fab fa-instagram"></i></div> Instagram </a></li>
                                <li><a href="https://www.youtube.com/channel/UCentbYuxA_A25gh2JJ_6Gzw" target="_blank"><div class="icon"><i class="fab fa-youtube"></i></div> Youtube </a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-8 col-lg-8">
                 
                    <div class="row justify-content-center">
                        <h2 class="mb-5 mt-3">Services</h2>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="top-collection-item">
                                <div class="collection-item-top">
                                    <ul>
                                        <li class="avatar mb-3"><a href="" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="" class="title">Dive</a></li>
                                       
                                           
                                            
                                        </li>
                                    </ul>
                                </div>
                             
                                <div class="collection-item-content">
                                    <p class="text-center"><a href="">Daily Dive </a> </p> 
                                    <p class="text-center"><a href=""> Night Dive </a> </p> 
                                    <p class="text-center"><a href="">
                                        Nitrox Dive</a> </p>
                                </div>
                                <div class="collection-item-bottom">
                                    <ul>
                                        <li class="bid"><a href="" class="btn">Book Now</a></li>
                                        <li class="wishlist"><a href="#">59</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="top-collection-item">
                                <div class="collection-item-top">
                                    <ul>
                                        <li class="avatar mb-3"><a href="" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="" class="title">Snorkeling</a></li>
                                       
                                           
                                            
                                        </li>
                                    </ul>
                                </div>
                             
                                <div class="collection-item-content">
                                    <p class="text-center"><a href="">Rental snorkeling gear </a> </p> 
                                    <p class="text-center"><a href=""> Guided snorkeling tour </a> </p> 
                                    <p class="text-center"><a href="">
                                      snorkeling tour</a> </p>
                                </div>
                                <div class="collection-item-bottom">
                                    <ul>
                                        <li class="bid"><a href="" class="btn">Book Now</a></li>
                                        <li class="wishlist"><a href="#">59</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="top-collection-item">
                                <div class="collection-item-top">
                                    <ul>
                                        <li class="avatar mb-3"><a href="" class="thumb"><img src="assets/img/others/top_col_avatar.png" alt=""></a>By <a href="" class="title">Courses</a></li>
                                       
                                           
                                            
                                        </li>
                                    </ul>
                                </div>
                             
                                <div class="collection-item-content">
                                    <p class="text-center"><a href="">Open Water Diver </a> </p> 
                                    <p class="text-center"><a href=""> 
                                        Rescue Diver </a> </p> 
                                    <p class="text-center"><a href="">Dive master</a> </p>
                                </div>
                                <div class="collection-item-bottom">
                                    <ul>
                                        <li class="bid"><a href="" class="btn">Book Now</a></li>
                                        <li class="wishlist"><a href="#">59</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <h2 class="mb-5">Gallery</h2>
                        <div class="row">
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <img src="{{ asset('/img/site/site1.jpeg') }}" alt=""
                                    style="border-radius: 20px">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <img src="{{ asset('/img/site/site1.jpeg') }}" alt=""
                                    style="border-radius: 20px">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <img src="{{ asset('/img/site/site1.jpeg') }}" alt=""
                                    style="border-radius: 20px">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <img src="{{ asset('/img/site/site1.jpeg') }}" alt=""
                                    style="border-radius: 20px">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <img src="{{ asset('/img/site/site1.jpeg') }}" alt=""
                                    style="border-radius: 20px">
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <img src="{{ asset('/img/site/site1.jpeg') }}" alt=""
                                    style="border-radius: 20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- author-profile-area-end -->

</main>

@endsection