@extends('layout.master')
@section('title', 'Home')

@section('link')
    {{-- <link rel="stylesheet" href=" {{ asset('css/home.css') }} ">
<style>
</style> --}}
@endsection

@section('content')

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="breadcrumb-content text-center">
                            <h3 class="title">About Jordan</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="breadcrumb-area market-single-breadcrumb-area ">
            <div class="breadcrumb-bg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="market-single-breadcrumb">
                            {{-- <div class="home-back-btn"><a href="{{ url("index.html") }}">go back to home</a></div> --}}
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- market-single-area -->
        <section class="market-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="market-single-img">
                            <img src="{{ asset('https://imgs.search.brave.com/HrlZ4j2HfBoFriokx-qOLfKh2pwclFZmC9TAjceElQ0/rs:fit:640:480:1/g:ce/aHR0cHM6Ly8yLmJw/LmJsb2dzcG90LmNv/bS8tb1RXYWx4a25f/ZE0vVWJXVjFnNEJf/cEkvQUFBQUFBQUFG/bTgvb3FmeUg3ZlB6/ejgvczE2MDAvZ2xv/c3N5K3JvdW5kK2Zs/YWcrb2Yram9yZGFu/LnBuZw') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <section class="">
                            <div class=" py-5">

                             

                                        <div id="wrapper-bg" class="card text-white bg-image shadow-4-strong"
                                            style="background-image: url('img/clouds.gif')">
                                            <!-- Main current data -->
                                            <div class="card-header p-4 border-0">
                                                <div class="text-center mb-3">
                                                    <p class="h2 mb-1" id="wrapper-name"></p>
                                                    <p class="mb-1" id="wrapper-description"></p>
                                                    <p class="display-1 mb-1" id="wrapper-temp"></p>
                                                    <span class="text-black">Pressure: <span
                                                            id="wrapper-pressure " class="text-black"></span></span>
                                                    <span class="mx-2 text-black">|</span>
                                                    <span class="text-black">Humidity: <span
                                                            id="wrapper-humidity" class="text-black"></span></span>
                                                </div>
                                            </div>

                                            <!-- Hourly forecast -->
                                

                                            <!-- Daily forecast -->
                                          
                                        </div>

                                    </div>
                            
                        </section>
                        {{-- <div class="market-single-top">
                        <div class="market-single-title-wrap">
                            <h2 class="title">Anatomy Science Club</h2>
                            <ul class="market-details-meta">
                                <li>Owned by <a href="{{ url("#") }}">B14484</a></li>
                                <li class="wishlist">6 favorites</li>
                            </ul>
                        </div>
                        <div class="market-single-action">
                            <ul>
                                <li><a href="{{ url("#") }}"><i class="fas fa-share-alt"></i></a></li>
                                <li><a href="{{ url("#") }}"><i class="fi-sr-menu-dots"></i></a></li>
                            </ul>
                        </div>
                    </div> --}}
                        {{-- <div class="row">
                        <div class="col-sm-6">
                            <div class="market-single-creator">
                                <div class="thumb"><img src="{{ asset("/assets/img/others/mp_avatar01.png") }}" alt=""></div>
                                <div class="info">
                                    <h5 class="title"><a href="{{ url("author-profile.html") }}">David Michels</a></h5>
                                    <span>Creators by</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="market-single-creator">
                                <div class="thumb"><img src="{{ asset("/assets/img/others/mp_avatar02.png") }}" alt=""></div>
                                <div class="info">
                                    <h5 class="title"><a href="{{ url("author-profile.html") }}">MR. Tartos</a></h5>
                                    <span>Collection by</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        {{-- <div class="market-single-content">
                        <p>What even is an NFT? NFT stands for non-fungible token, which basically means that it's one-of-kind digital asset that belongs to you and you only. The most popular NFTs right now include artwork and music also include videos.</p>
                    </div> --}}
                        {{-- <div class="highest-bid-wrap">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <h5 class="title">Highest bid</h5>
                                <div class="highest-bid-avatar">
                                    <div class="thumb"><img src="{{ asset("/assets/img/others/heighest_avatar.png") }}" alt=""></div>
                                    <div class="content">
                                        <h5 class="title"><a href="{{ url("author-profile.html") }}">Tomas lindahl</a></h5>
                                        <span>3.005wETH</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6">
                                <h5 class="title">Auction has ended</h5>
                                <div class="bid-countdown-wrap">
                                    <div class="coming-time" data-countdown="2022/05/16"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                        <a href="{{ url('#') }}" class="place-bid-btn">Place a bid</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="activity-table-responsive">

                            <table class="table activity-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="title">Description</th>
                                        <th scope="col">Floor Price</th>
                                        <th scope="col">Owners</th>
                                        <th scope="col" class="time">Assets</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="author">
                                            <img src="{{ asset('/assets/img/others/mp_activity_author01.png') }}"
                                                alt=""> <a href="{{ url('nft-marketplace.html') }}">Trading
                                                Pet</a>
                                        </th>
                                        <td>+5486%</td>
                                        <td>-965%</td>
                                        <td>2,356 ETH</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="author">
                                            <img src="{{ asset('/assets/img/others/mp_activity_author02.png') }}"
                                                alt=""> <a href="{{ url('nft-marketplace.html') }}">Trading
                                                Craft</a>
                                        </th>
                                        <td>+5486%</td>
                                        <td>-965%</td>
                                        <td>2,356 ETH</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="author">
                                            <img src="{{ asset('/assets/img/others/mp_activity_author03.png') }}"
                                                alt=""> <a href="{{ url('nft-marketplace.html') }}">Trading
                                                Cards</a>
                                        </th>
                                        <td>+5486%</td>
                                        <td>-965%</td>
                                        <td>2,356 ETH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bid-history-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="bid-tab" data-bs-toggle="tab"
                                        data-bs-target="#bid" type="button" role="tab" aria-controls="bid"
                                        aria-selected="true">Bid History</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                                        type="button" role="tab" aria-controls="info"
                                        aria-selected="false">Info</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="provenance-tab" data-bs-toggle="tab"
                                        data-bs-target="#provenance" type="button" role="tab"
                                        aria-controls="provenance" aria-selected="false">Provenance</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="bid" role="tabpanel"
                                    aria-labelledby="bid-tab">
                                    <div class="bid-history-overflow scroll">
                                        <ul class="bid-history-list">
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar02.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">David
                                                                    Michels</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar03.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">Jonny Dev</a>
                                                            </h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar04.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar05.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">Tomas
                                                                    Komai</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar06.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">Tomas
                                                                    Harne</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a
                                                                    href="{{ url('author-profile.html') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="bid-history-overflow scroll">
                                        <ul class="bid-history-list">
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar02.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar03.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar04.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar05.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar06.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar02.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="provenance" role="tabpanel"
                                    aria-labelledby="provenance-tab">
                                    <div class="bid-history-overflow scroll">
                                        <ul class="bid-history-list">
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar02.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar03.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar04.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar05.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar06.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="bid-history-item">
                                                    <div class="highest-bid-avatar">
                                                        <div class="thumb"><img
                                                                src="{{ asset('/assets/img/others/heighest_avatar.png') }}"
                                                                alt=""></div>
                                                        <div class="content">
                                                            <h5 class="title"><a href="{{ url('#') }}">Tomas
                                                                    lindahl</a></h5>
                                                            <span>Bid listed</span>
                                                        </div>
                                                    </div>
                                                    <div class="bid-history-info">
                                                        <span>8 hours ago</span>
                                                        <h6 class="title">25 ETH</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- market-single-area-end -->

        <!-- top-collection-area -->
        <section class="top-collection-area live-auctions-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title mb-40">
                            <h2 class="title">Live Auctions <img src="{{ asset('/assets/img/icons/title_icon01.png') }}"
                                    alt=""></h2>
                        </div>
                    </div>
                </div>
                <div class="row top-collection-active">
                    <div class="col-xl-3">
                        <div class="top-collection-item">
                            <div class="collection-item-top">
                                <ul>
                                    <li class="avatar"><a href="{{ url('author-profile.html') }}" class="thumb"><img
                                                src="{{ asset('/assets/img/others/top_col_avatar.png') }}"
                                                alt=""></a>By <a href="{{ url('author-profile.html') }}"
                                            class="name">Jonson</a></li>
                                    <li class="info-dots dropdown">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <a href="{{ url('#') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                            role="button" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('nft-marketplace.html') }}">Artwork</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Action</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Author Action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="collection-item-thumb">
                                <a href="{{ url('market-single.html') }}"><img
                                        src="{{ asset('/assets/img/others/top_collection01.jpg') }}" alt=""></a>
                            </div>
                            <div class="collection-item-content">
                                <h5 class="title"><a href="{{ url('market-single.html') }}">Pie Collection</a> <span
                                        class="price">5.4 ETH</span></h5>
                            </div>
                            <div class="collection-item-bottom">
                                <ul>
                                    <li class="bid"><a href="{{ url('market-single.html') }}" class="btn">place a
                                            bid</a></li>
                                    <li class="wishlist"><a href="{{ url('#') }}">59</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="top-collection-item">
                            <div class="collection-item-top">
                                <ul>
                                    <li class="avatar"><a href="{{ url('author-profile.html') }}" class="thumb"><img
                                                src="{{ asset('/assets/img/others/top_col_avatar.png') }}"
                                                alt=""></a>By <a href="{{ url('author-profile.html') }}"
                                            class="name">Jonson</a></li>
                                    <li class="info-dots dropdown">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <a href="{{ url('#') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                            role="button" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('nft-marketplace.html') }}">Artwork</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Action</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Author Action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="collection-item-thumb">
                                <a href="{{ url('market-single.html') }}"><img
                                        src="{{ asset('/assets/img/others/top_collection02.jpg') }}" alt=""></a>
                            </div>
                            <div class="collection-item-content">
                                <h5 class="title"><a href="{{ url('market-single.html') }}">Action Collection</a> <span
                                        class="price">5.4 ETH</span></h5>
                            </div>
                            <div class="collection-item-bottom">
                                <ul>
                                    <li class="bid"><a href="{{ url('market-single.html') }}" class="btn">place a
                                            bid</a></li>
                                    <li class="wishlist"><a href="{{ url('#') }}">59</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="top-collection-item">
                            <div class="collection-item-top">
                                <ul>
                                    <li class="avatar"><a href="{{ url('author-profile.html') }}" class="thumb"><img
                                                src="{{ asset('/assets/img/others/top_col_avatar.png') }}"
                                                alt=""></a>By <a href="{{ url('author-profile.html') }}"
                                            class="name">Jonson</a></li>
                                    <li class="info-dots dropdown">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <a href="{{ url('#') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                            role="button" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('nft-marketplace.html') }}">Artwork</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Action</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Author Action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="collection-item-thumb">
                                <a href="{{ url('market-single.html') }}"><img
                                        src="{{ asset('/assets/img/others/top_collection03.jpg') }}" alt=""></a>
                            </div>
                            <div class="collection-item-content">
                                <h5 class="title"><a href="{{ url('market-single.html') }}">Craft Collection</a> <span
                                        class="price">5.4 ETH</span></h5>
                            </div>
                            <div class="collection-item-bottom">
                                <ul>
                                    <li class="bid"><a href="{{ url('market-single.html') }}" class="btn">place a
                                            bid</a></li>
                                    <li class="wishlist"><a href="{{ url('#') }}">59</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="top-collection-item">
                            <div class="collection-item-top">
                                <ul>
                                    <li class="avatar"><a href="{{ url('author-profile.html') }}" class="thumb"><img
                                                src="{{ asset('/assets/img/others/top_col_avatar.png') }}"
                                                alt=""></a>By <a href="{{ url('author-profile.html') }}"
                                            class="name">Jonson</a></li>
                                    <li class="info-dots dropdown">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <a href="{{ url('#') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                            role="button" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('nft-marketplace.html') }}">Artwork</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Action</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Author Action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="collection-item-thumb">
                                <a href="{{ url('market-single.html') }}"><img
                                        src="{{ asset('/assets/img/others/top_collection04.jpg') }}" alt=""></a>
                            </div>
                            <div class="collection-item-content">
                                <h5 class="title"><a href="{{ url('market-single.html') }}">Artwork Collection</a> <span
                                        class="price">5.4 ETH</span></h5>
                            </div>
                            <div class="collection-item-bottom">
                                <ul>
                                    <li class="bid"><a href="{{ url('market-single.html') }}" class="btn">place a
                                            bid</a></li>
                                    <li class="wishlist"><a href="{{ url('#') }}">59</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="top-collection-item">
                            <div class="collection-item-top">
                                <ul>
                                    <li class="avatar"><a href="{{ url('author-profile.html') }}" class="thumb"><img
                                                src="{{ asset('/assets/img/others/top_col_avatar.png') }}"
                                                alt=""></a>By <a href="{{ url('author-profile.html') }}"
                                            class="name">Jonson</a></li>
                                    <li class="info-dots dropdown">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <a href="{{ url('#') }}" class="dropdown-toggle" data-bs-toggle="dropdown"
                                            role="button" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ url('nft-marketplace.html') }}">Artwork</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Action</a></li>
                                            <li><a href="{{ url('nft-marketplace.html') }}">Author Action</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="collection-item-thumb">
                                <a href="{{ url('market-single.html') }}"><img
                                        src="{{ asset('/assets/img/others/top_collection09.jpg') }}" alt=""></a>
                            </div>
                            <div class="collection-item-content">
                                <h5 class="title"><a href="{{ url('market-single.html') }}">Drop Collection</a> <span
                                        class="price">5.4 ETH</span></h5>
                            </div>
                            <div class="collection-item-bottom">
                                <ul>
                                    <li class="bid"><a href="{{ url('market-single.html') }}" class="btn">place a
                                            bid</a></li>
                                    <li class="wishlist"><a href="{{ url('#') }}">59</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top-collection-area-end -->

    </main>
    <!-- main-area-end -->
    <script>
        // API call
        let queryUrl = "https://api.openweathermap.org/data/2.5/onecall?";
        let lat = "lat=29.52667&";
        let lon = "lon=35.00778&";
        let apiOptions = "units=metric&exclude=minutely,alerts&";
        let apiKey = "appid=dbb76c5d98d5dbafcb94441c6a10236e";
        let file = queryUrl + lat + lon + apiOptions + apiKey;

        fetch(file)
            .then((response) => response.json())
            .then((data) => {
                // Weather main data
                let main = data.current.weather[0].main;

                let description = data.current.weather[0].description;
              
                let temp = Math.round(data.current.temp);  console.log(pressure, 'roa');
                let pressure = data.current.pressure;
                let humidity = data.current.humidity;
                let name = "Aqaba";

                document.getElementById("wrapper-description").innerHTML = description;
                document.getElementById("wrapper-temp").innerHTML = temp + "°C";
                document.getElementById("wrapper-pressure").innerHTML = pressure;
                document.getElementById("wrapper-humidity").innerHTML = humidity + "°C";
                document.getElementById("wrapper-name").innerHTML = name;

                // Weather hourly data
                let hourNow = data.hourly[0].temp;
                let hour1 = data.hourly[1].temp;
                let hour2 = data.hourly[2].temp;
                let hour3 = data.hourly[3].temp;
                let hour4 = data.hourly[4].temp;
                let hour5 = data.hourly[5].temp;

                document.getElementById("wrapper-hour-now").innerHTML = hourNow + "°";
                document.getElementById("wrapper-hour1").innerHTML = hour1 + "°";
                document.getElementById("wrapper-hour2").innerHTML = hour2 + "°";
                document.getElementById("wrapper-hour3").innerHTML = hour3 + "°";
                document.getElementById("wrapper-hour4").innerHTML = hour4 + "°";
                document.getElementById("wrapper-hour5").innerHTML = hour5 + "°";

                // Time
                let timeNow = new Date().getHours();
                let time1 = timeNow + 1;
                let time2 = time1 + 1;
                let time3 = time2 + 1;
                let time4 = time3 + 1;
                let time5 = time4 + 1;

                document.getElementById("wrapper-time1").innerHTML = time1;
                document.getElementById("wrapper-time2").innerHTML = time2;
                document.getElementById("wrapper-time3").innerHTML = time3;
                document.getElementById("wrapper-time4").innerHTML = time4;
                document.getElementById("wrapper-time5").innerHTML = time5;

                // Weather daily data
                let tomorrowTemp = Math.round(data.daily[0].temp.day);
                let dATTemp = Math.round(data.daily[1].temp.day);
                let tomorrowMain = data.daily[0].weather[0].main;
                let dATTempMain = data.daily[1].weather[0].main;

                document.getElementById("wrapper-forecast-temp-today").innerHTML =
                    temp + "°";
                document.getElementById("wrapper-forecast-temp-tomorrow").innerHTML =
                    tomorrowTemp + "°";
                document.getElementById("wrapper-forecast-temp-dAT").innerHTML =
                    dATTemp + "°";

                // Icons
                let iconBaseUrl = "http://openweathermap.org/img/wn/";
                let iconFormat = ".webp";

                // Today
                let iconCodeToday = data.current.weather[0].icon;
                let iconFullyUrlToday = iconBaseUrl + iconCodeToday + iconFormat;
                document.getElementById("wrapper-icon-today").src = iconFullyUrlToday;

                // Tomorrow
                let iconCodeTomorrow = data.daily[0].weather[0].icon;
                let iconFullyUrlTomorrow = iconBaseUrl + iconCodeTomorrow + iconFormat;
                document.getElementById(
                    "wrapper-icon-tomorrow"
                ).src = iconFullyUrlTomorrow;

                // Day after tomorrow
                let iconCodeDAT = data.daily[1].weather[0].icon;
                let iconFullyUrlDAT = iconBaseUrl + iconCodeDAT + iconFormat;
                document.getElementById("wrapper-icon-dAT").src = iconFullyUrlDAT;

                // Icons hourly

                // Hour now
                let iconHourNow = data.hourly[0].weather[0].icon;
                let iconFullyUrlHourNow = iconBaseUrl + iconHourNow + iconFormat;
                document.getElementById(
                    "wrapper-icon-hour-now"
                ).src = iconFullyUrlHourNow;

                // Hour1
                let iconHour1 = data.hourly[1].weather[0].icon;
                let iconFullyUrlHour1 = iconBaseUrl + iconHour1 + iconFormat;
                document.getElementById("wrapper-icon-hour1").src = iconFullyUrlHour1;

                // Hour2
                let iconHour2 = data.hourly[2].weather[0].icon;
                let iconFullyUrlHour2 = iconBaseUrl + iconHour2 + iconFormat;
                document.getElementById("wrapper-icon-hour2").src = iconFullyUrlHour1;

                // Hour3
                let iconHour3 = data.hourly[3].weather[0].icon;
                let iconFullyUrlHour3 = iconBaseUrl + iconHour3 + iconFormat;
                document.getElementById("wrapper-icon-hour3").src = iconFullyUrlHour3;

                // Hour4
                let iconHour4 = data.hourly[4].weather[0].icon;
                let iconFullyUrlHour4 = iconBaseUrl + iconHour4 + iconFormat;
                document.getElementById("wrapper-icon-hour4").src = iconFullyUrlHour4;

                // Hour5
                let iconHour5 = data.hourly[5].weather[0].icon;
                let iconFullyUrlHour5 = iconBaseUrl + iconHour5 + iconFormat;
                document.getElementById("wrapper-icon-hour5").src = iconFullyUrlHour5;

                // Backgrounds
                switch (main) {
                    case "Snow":
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/snow.gif')";
                        break;
                    case "Clouds":
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/clouds.gif')";
                        break;
                    case "Fog":
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/fog.gif')";
                        break;
                    case "Rain":
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/rain.gif')";
                        break;
                    case "Clear":
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/clear.gif')";
                        break;
                    case "Thunderstorm":
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/thunderstorm.gif')";
                        break;
                    default:
                        document.getElementById("wrapper-bg").style.backgroundImage =
                            "url('https://mdbgo.io/ascensus/mdb-advanced/img/clear.gif')";
                        break;
                }
            });
    </script>
@endsection
