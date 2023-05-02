@extends('landing-page.layouts.app')
@section('title', 'Layanan | Razen Holiday')

@section('content')
    @php
        use App\Models\LandingPageLayanan;
        use App\Models\LandingPageBeranda;

        $Layanan = LandingPageLayanan::first();

        $section_1 = json_decode($Layanan->section_1, true);

        $beranda = LandingPageBeranda::first();

        $beranda_section_7 = json_decode($beranda->section_7, true);
    @endphp
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('images/landing-page/layanan/'.$section_1['gambar']) }});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Layanan</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    <div class="list-results d-flex align-items-center justify-content-between">
                        <div class="list-results-sort">
                            <p class="m-0">Showing 1-5 of 80 results</p>
                        </div>
                        <div class="click-menu d-flex align-items-center justify-content-between">
                            <div class="change-list f-active me-2"><a href="tour-list.html"><i class="fa fa-bars rounded"></i></a></div>
                            <div class="change-grid me-2"><a href="tour-grid.html"><i class="fa fa-th rounded"></i></a></div>
                            <div class="sortby d-flex align-items-center justify-content-between ml-2">
                                <select class="niceSelect">
                                    <option value="1" >Sort By</option>
                                    <option value="2">Average rating</option>
                                    <option value="3">Price: low to high</option>
                                    <option value="4">Price: high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="destination-list">
                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination17.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">Leeds Castle, Cliffs Of Dover</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Croatia</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$125</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination15.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">Adriatic Adventure–Zagreb To Athens</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Greece</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$160</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination11.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">The Spanish Riviera Cost Bay</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Spain</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$160</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination12.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">Adriatic Adventure–Zagreb To Athens</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Greece</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$160</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination13.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">Highlights scenery of Vietnam</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Vietnam</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$160</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination10.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">The Spanish Riviera Cost Bay</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Spain</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$160</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-3">
                                   <div class="trend-item2 rounded">
                                        <a href="tour-single.html" style="background-image: url({{asset('travelin/assets/images/destination/destination14.jpg')}});"></a>
                                         <div class="color-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="trend-content position-relative text-md-start text-center">
                                        <small>6+ Hours | Full Day Tours</small>
                                        <h3 class="mb-1"><a href="tour-single.html">Empire Prestige Causeway Bay</a></h3>
                                        <h6 class="theme mb-0"><i class="icon-location-pin"></i> Egypt</h6>
                                        <p class="mt-4 mb-0">Taking Safety Measures <br><a href="#"><span class="theme"> Free cancellation</span></a></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="trend-content text-md-end text-center">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <small>200 Reviews</small>
                                        <div class="trend-price my-2">
                                            <span class="mb-0">From</span>
                                            <h3 class="mb-0">$160</h3>
                                            <small>Per Adult</small>
                                        </div>
                                        <a href="tour-single.html" class="nir-btn">View Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="nir-btn">Load More <i class="fa fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item mb-4">
                                <h3 class="">Categories Type</h3>
                                <ul class="sidebar-category1">
                                    <li><input type="checkbox" checked> Tours <span class="float-end">92</span></li>
                                    <li><input type="checkbox"> Attractions <span class="float-end">22</span></li>
                                    <li><input type="checkbox"> Day Trips <span class="float-end">35</span></li>
                                    <li><input type="checkbox"> Outdoor Activities <span class="float-end">41</span></li>
                                    <li><input type="checkbox"> Concert & Show <span class="float-end">11</span></li>
                                    <li><input type="checkbox"> Indoor <span class="float-end">61</span></li>
                                    <li><input type="checkbox"> Sight Seeing <span class="float-end">18</span></li>
                                    <li><input type="checkbox"> Travels <span class="float-end">88</span></li>
                                </ul>
                            </div>

                            <div class="sidebar-item mb-4">
                                <h3 class="">Duration Type</h3>
                                <ul class="sidebar-category1">
                                    <li><input type="checkbox" checked> up to 1 hour <span class="float-end">92</span></li>
                                    <li><input type="checkbox"> 1 to 2 hour <span class="float-end">22</span></li>
                                    <li><input type="checkbox"> 2 to 4 hour <span class="float-end">35</span></li>
                                    <li><input type="checkbox"> 4 to 8 hour <span class="float-end">41</span></li>
                                    <li><input type="checkbox"> 8 to 1 Day <span class="float-end">11</span></li>
                                    <li><input type="checkbox"> 1 Day to 2 Days <span class="float-end">61</span></li>
                                </ul>
                            </div>

                            <div class="sidebar-item mb-4">
                                <h3 class="">Duration Type</h3>
                                <div class="range-slider mt-0">
                                    <p class="text-start mb-2">Price Range</p>
                                    <div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
                                        <span class="min-value">0 $</span>
                                        <span class="max-value">20000 $</span>
                                        <div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                            <div class="sidebar-item">
                                <h3>Related Destinations</h3>
                                <div class="sidebar-destination">
                                    <div class="row about-slider">
                                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                            <div class="trend-item1">
                                                <div class="trend-image position-relative rounded">
                                                    <img src="{{ asset('travelin/assets/images/destination/destination17.jpg') }}" alt="image">
                                                    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                        <div class="trend-content-title">
                                                            <h5 class="mb-0"><a href="tour-single.html" class="theme1">Italy</a></h5>
                                                            <h4 class="mb-0 white">Caspian Valley</h4>
                                                        </div>
                                                        <span class="white bg-theme p-1 px-2 rounded">18 Tours</span>
                                                    </div>
                                                    <div class="color-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                            <div class="trend-item1">
                                                <div class="trend-image position-relative rounded">
                                                    <img src="{{ asset('travelin/assets/images/destination/destination14.jpg') }}" alt="image">
                                                    <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                                        <div class="trend-content-title">
                                                            <h5 class="mb-0"><a href="tour-single.html" class="theme1">Tokyo</a></h5>
                                                            <h4 class="mb-0 white">Japan</h4>
                                                        </div>
                                                        <span class="white bg-theme p-1 px-2 rounded">21 Tours</span>
                                                    </div>
                                                    <div class="color-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- Discount action starts -->
    <section class="discount-action pt-0" style="background-image:url({{ asset('images/landing-page/beranda/'.$beranda_section_7['gambar']) }}); background-position:center;">
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">{{$beranda_section_7?$beranda_section_7['sub_judul'] : ''}}</h5>
                            <h2><a href="#">{!!$beranda_section_7?$beranda_section_7['judul'] : ''!!}</a></h2>
                            {!! $beranda_section_7?$beranda_section_7['deskripsi'] : '' !!}
                        </div>
                        <div class="video-button text-center position-relative">
                             <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                    <i class="fa fa-play bg-blue"></i>
                                </button>
                            </div>
                            <div class="video-figure"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
        <div class="white-overlay"></div>
        <div class="section-shape  top-inherit bottom-0" style="background-image: url({{asset('travelin/assets/images/shape6.png')}});"></div>
    </section>
    <!-- Discount action Ends -->
@endsection
