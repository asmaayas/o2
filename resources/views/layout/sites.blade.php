@extends('layout.master')
@section('title', 'All Site')

{{-- @section('link') --}}
    {{-- <link rel="stylesheet" href=" {{ asset('css/home.css') }} "> --}}
    
{{-- @endsection --}}

@section('content')
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="breadcrumb-content text-center">
                        <h3 class="title">All Sites</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

  
    <!-- category-area-end -->

    <!-- explore-products-area -->
    <section class="inner-explore-products">
        <div class="container">
            <div class="explore-product-filter">
                {{-- <div class="section-title mb-45">
                    <h2 class="title">ALL SITES <img src="assets/img/icons/title_icon01.png" alt=""></h2>
                </div> --}}
                <div class="filter-wrap">
                    <form action="#">
                        <div class="filter-item">
                            <label class="title">FILTER BY:</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="button"></span>
                            </label>
                        </div>
                        <div class="filter-item">
                            <label class="title">Natural</label>
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="button"></span>
                            </label>
                        </div>
                        <div class="filter-item">
                            <label class="title">Depth more than 40m</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="button"></span>
                            </label>
                        </div>
                        <div class="filter-item">
                            <label class="title">By Boat</label>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="button"></span>
                            </label>
                        </div>
                     
                        <button class="btn filter-btn"><i class="fi-sr-filter"></i> filter</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="top-collection-item">
                    
                        <div class="collection-item-thumb">
                            <a href="/site"><img src="{{('img/site/site1.jpeg')}}" alt="" height="270px" width= "350px"></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="/site">The Tank</a> <span class="price">Red Sea Gulf</span></h5>
                        </div>
                        <div class="collection-item-bottom">
                            <ul>
                                <li class="bid"><a href="/site" class="btn">Details</a></li>
                                <li class="wishlist"><a href="#">59</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="top-collection-item">
                    
                        <div class="collection-item-thumb">
                            <a href="/site"><img src="{{('img/site/IMG_4877-standard-scale-4_00x-scaled.jpeg')}}" alt="" height="270px" width= "350px"></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="/site">Hercules C-130</a> <span class="price">Red Sea Gulf</span></h5>
                        </div>
                        <div class="collection-item-bottom">
                            <ul>
                                <li class="bid"><a href="/site" class="btn">Details</a></li>
                                <li class="wishlist"><a href="#">59</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="top-collection-item">
                    
                        <div class="collection-item-thumb">
                            <a href="/site"><img src="{{('img/site/IMG_4901.jpeg')}}" alt="" height="270px" width= "350px"></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="/site">Seven sisters coral reef</a> <span class="price">Red Sea Gulf</span></h5>
                        </div>
                        <div class="collection-item-bottom">
                            <ul>
                                <li class="bid"><a href="/site" class="btn">Details</a></li>
                                <li class="wishlist"><a href="#">59</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="top-collection-item">
                    
                        <div class="collection-item-thumb">
                            <a href="/site"><img src="{{('img/site/site1.jpeg')}}" alt="" height="270px" width= "350px"></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="/site">The Tank</a> <span class="price">Red Sea Gulf</span></h5>
                        </div>
                        <div class="collection-item-bottom">
                            <ul>
                                <li class="bid"><a href="/site" class="btn">Details</a></li>
                                <li class="wishlist"><a href="#">59</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="top-collection-item">
                    
                        <div class="collection-item-thumb">
                            <a href="/site"><img src="{{('img/site/IMG_4877-standard-scale-4_00x-scaled.jpeg')}}" alt="" height="270px" width= "350px"></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="/site">Hercules C-130</a> <span class="price">Red Sea Gulf</span></h5>
                        </div>
                        <div class="collection-item-bottom">
                            <ul>
                                <li class="bid"><a href="/site" class="btn">Details</a></li>
                                <li class="wishlist"><a href="#">59</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="top-collection-item">
                    
                        <div class="collection-item-thumb">
                            <a href="/site"><img src="{{('img/site/IMG_4901.jpeg')}}" alt="" height="270px" width= "350px"></a>
                        </div>
                        <div class="collection-item-content">
                            <h5 class="title"><a href="/site">Seven sisters coral reef</a> <span class="price">Red Sea Gulf</span></h5>
                        </div>
                        <div class="collection-item-bottom">
                            <ul>
                                <li class="bid"><a href="/site" class="btn">Details</a></li>
                                <li class="wishlist"><a href="#">59</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- explore-products-area-end -->

   
    <!-- week-features-area-end -->

</main>
@endsection