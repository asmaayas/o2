@extends('layout.master')
@section('title', 'Single Site')

@section('link')
    {{-- <link rel="stylesheet" href=" {{ asset('css/home.css') }} "> --}}
    <style>
        .author-collection span {
            font-size: 12px
        }

        .collection-item-thumb {
            height: 100px;
            width: 100px;
            margin: auto;
        }


        .sponsored-btn {
            background: radial-gradient(ellipse farthest-corner at right bottom, #FEDB37 0%, #FDB931 8%, #9f7928 30%, #8A6E2F 40%, transparent 80%),
                radial-gradient(ellipse farthest-corner at left top, #FFFFFF 0%, #FFFFAC 8%, #D1B464 25%, #5d4a1f 62.5%, #5d4a1f 100%)
        }
    </style>
@endsection

@section('content')

    {{-- ************************* Start SideBar ************************* --}}
@section('sidebar')
    <div class="menu-trigger"><i class="fi-sr-angle-small-left"></i></div>
    <div class="menu-close"><i class="fi-sr-angle-small-right"></i></div>
    <div class="offcanvas-inner scroll">
        <div class="author-profile text-center mb-30">
            <div class="author-img">
                <img src="{{ asset('img/dive/dive.png') }}" alt="">
            </div>
            <div class="author-content">
                <h4 class="title">ALDC</h4>
                <p>Aqaba</p>
                <a href="{{ url('') }}" class="btn sponsored-btn">Sponsored</a>
            </div>
        </div>

        <div class="overview">
            <div class="overview-title">
                <h4 class="title">Book Service</h4>
            </div>
            <div class="overview-item-wrap">
                <div class="overview-item">
                    <div class="overview-icon">
                        <img src="{{ asset('img/icons/snorkling.png') }}" height="50px" width="50px">
                    </div>
                    <div class="overview-content">
                        <h4 class="title">Snorkling</h4>
                    </div>
                    <a href="#">Book <i class=" fi-sr-angle-small-right"></i></a>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <img src="{{ asset('img/icons/dive.png') }}" height="50px" width="50px">
                    </div>
                    <div class="overview-content">
                        <h4 class="title">Dive</h4>
                    </div>
                    <a href="#">Book <i class=" fi-sr-angle-small-right"></i></a>
                </div>
                <div class="overview-item">
                    <div class="overview-icon">
                        <img src="{{ asset('img/icons/courses.png') }}" height="50px" width="50px">
                    </div>
                    <div class="overview-content">
                        <h4 class="title">Courses</h4>
                    </div>
                    <a href="#">Book <i class=" fi-sr-angle-small-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- *************************** End SideBar ************************* --}}

<main>


    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg breadcrumb-bg-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="breadcrumb-content text-center">
                        <h3 class="title">The Tank (M42 Duster)</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- category-area-end -->
 
    <!-- author-profile-area -->
    <div class="author-profile-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 order-2 order-lg-0">
                    <aside class="author-profile-wrap">
                        <div class="author-profile-thumb">
                            <img src="/img/site/site1.jpeg" alt="">
                        </div>
                        <div class="author-info">
                            <h5 class="title">The Tank (M42 Duster) <img src="assets/img/icons/star.svg"
                                    alt=""></h5>
                            <span><i class="fa fa-check"></i> Artificial</span>
                            {{-- <p>Myself Olivia_ ipsum dolor amet this consectetur adipisicing elit. Quis non fugit totam laborio.</p> --}}
                        </div>
                        <ul class="author-collection">
                            <div class="row">
                                <li class="col-lg-6">
                                    <p>Dive Site</p>
                                    <span>Wreck , Reef</span>
                                </li>
                                <li class="col-lg-6">
                                    <p>Depth</p>
                                    <span>Surface to 10m</span>
                                </li>
                                <li class="col-lg-6">
                                    <p>Access</p>
                                    <span>Boat/ Shore</span>
                                </li>
                                <li class="col-lg-6">
                                    <p>Level</p>
                                    <span>Beginner and higher</span>
                                </li>
                            </div>
                        </ul>
                        <div class="author-social">
                            <h6 class="title">Overview :</h6>
                            {{-- <ul>
                                    <li><a href="#"><div class="icon"><i class="fab fa-facebook-f"></i></div> Facebook / @joys_Aoi</a></li>
                                    <li><a href="#"><div class="icon"><i class="fab fa-facebook-messenger"></i></div> Messenger / @joys_Avi</a></li>
                                    <li><a href="#"><div class="icon"><i class="fab fa-whatsapp"></i></div> Whatsapp / @joys_Avi</a></li>
                                    <li><a href="#"><div class="icon"><i class="fab fa-youtube"></i></div> Youtube / @joys_Avi</a></li>
                                </ul> --}}
                            <ul>
                                <p>The wreck known simply as ‘The Tank’ is in actual fact an M42 ‘duster’ anti-aircraft
                                    vehicle, sunk in 1999 by the Jordanian Royal Ecological Diving Society as another
                                    artificial reef project. With a maximum depth of only 6 m and just 20 m from shore,
                                    it’s ease of access makes it a fantastic site for dive training, novice divers and
                                    snorkelers.
                                    <br>
                                    <a href="https://jordan-travel.com/wreck-tank-dive-site-aqaba/" target="_blank"
                                        style="color:#058090">Read More</a>
                                </p>
                            </ul>


                        </div>






                    </aside>
                </div>
                <div class="col-xl-8 col-lg-8">

                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="top-collection-item">

                                <div class="collection-item-thumb">
                                    <a href=""><img src="{{ asset('/img/icons/augmented-reality.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="collection-item-content">
                                    <h5 class="title"><a href="">AR</a></h5>
                                </div>
                                <div class="collection-item-bottom">
                                    <ul>
                                        <li class="bid">
                                            <a href="#test-modal" class="btn popup-modal" 
                                                data-target="#exampleModal">Watch</a>
                                        </li>
                                        <li><a href="#" style=" color: #fff"><i class="fa fa-eye"></i> 59</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="top-collection-item">

                                <div class="collection-item-thumb">
                                    <a href=""><img src="{{ asset('/img/icons/vr-glasses.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="collection-item-content">
                                    <h5 class="title"><a href="">VR</a></h5>
                                </div>
                                <div class="collection-item-bottom">
                                    <ul>
                                        <li class="bid"><a href="#test-modal" class="btn popup-modal">Watch</a></li>
                                        <li><a href="#" style=" color: #fff"><i class="fa fa-eye"></i> 59</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6">
                            <div class="top-collection-item">

                                <div class="collection-item-thumb">
                                    <a href=""><img src="{{ asset('/img/icons/360-degree.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="collection-item-content">
                                    <h5 class="title"><a href="">VT</a></h5>
                                </div>
                                <div class="collection-item-bottom">
                                    <ul>
                                        <li class="bid"><a  href="#test-modal" class="btn popup-modal">Watch</a></li>
                                        <li><a href="#" style=" color: #fff"><i class="fa fa-eye"></i> 59</a>
                                        </li>
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

{{-- model --}}
   {{-- <a class="popup-modal" href="#test-modal">Open modal</a> --}}

   <div id="test-modal" class="mfp-hide white-popup-block">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close popup-modal-dismiss" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="popup-modal-dismiss">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</main>

<script>
    $(function() {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#username',
            modal: true
        });
        $(document).on('click', '.popup-modal-dismiss', function(e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    });
</script>

@endsection
