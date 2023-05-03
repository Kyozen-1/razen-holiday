@extends('landing-page.layouts.app')
@section('title', 'Beranda | Razen Holiday')

@section('content')
    @php
        use App\Models\LandingPageBeranda;
        use Carbon\Carbon;

        $beranda = LandingPageBeranda::first();

        $section_1 = json_decode($beranda->section_1, true);
        $section_2 = json_decode($beranda->section_2, true);
        $section_3 = json_decode($beranda->section_3, true);
        $section_4 = json_decode($beranda->section_4, true);
        $section_5 = json_decode($beranda->section_5, true);
        $section_6 = json_decode($beranda->section_6, true);
        $section_7 = json_decode($beranda->section_7, true);
        $section_8 = json_decode($beranda->section_8, true);
        $section_9 = json_decode($beranda->section_9, true);
        $section_10 = json_decode($beranda->section_10, true);
    @endphp
    <!-- banner starts -->
    <section class="banner pt-10 pb-0 overflow-hidden" style="background-image:url({{ asset('images/landing-page/beranda/'.$section_1['gambar_background']) }});">
        <div class="container">
            <div class="banner-in">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="banner-content text-lg-start text-center">
                            <h4 class="theme mb-0">{{$section_1?$section_1['sub_judul']:'' }}</h4>
                            <h1>{{$section_1?$section_1['judul']:'' }}</h1>
                            {!!$section_1?$section_1['deskripsi']:'' !!}
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="banner-image">
                            <img src="{{ asset('images/landing-page/beranda/'.$section_1['gambar']) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="category-main-inner border-t pt-1">
                    <div class="row side-slider">
                        @foreach ($kategoris as $kategori)
                            <div class="col-lg-3 col-md-6 my-4">
                                <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                    <div class="trending-topic-content">
                                        <img src="{{env('RAZEN_URL')}}storage/{{$kategori->image}}" class="mb-1 d-inline-block" alt="">
                                        <h4 class="mb-0"><a href="#">{{$kategori->name}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about-us starts -->
    <section class="about-us pb-6 pt-6" style="background-image:url({{asset('travelin/assets/images/shape4.png')}}); background-position:center;">
        <div class="container">

            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_2?$section_2['sub_judul'] : ''}}</h4>
                <h2 class="mb-1">{{$section_2?$section_2['judul'] : ''}}</h2>
                {!! $section_2?$section_2['deskripsi'] : '' !!}
            </div>

            <!-- why us starts -->
            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        @if ($section_2['konten'] != '')
                            @foreach ($section_2['konten'] as $item)
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="why-us-item text-center p-4 py-5 border rounded bg-white">
                                        <div class="why-us-content">
                                            <div class="why-us-icon">
                                                <i class="{{$item['ikon']}} theme"></i>
                                            </div>
                                            <h4><a href="{{ route('perusahaan') }}">{{$item['judul']}}</a></h4>
                                            <p class="mb-0">{{$item['deskripsi_singkat']}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- why us ends -->
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- top Destination starts -->
    <section class="trending pb-5 pt-0">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_3?$section_3['sub_judul']:'' }}s</h4>
                <h2 class="mb-1">{{$section_3?$section_3['judul']:'' }}</h2>
                {!! $section_3?$section_3['deskripsi'] : '' !!}
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="{{ asset('travelin/assets/images/destination/destination1.jpg') }}" alt="image">
                            <div
                                class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="tour-grid.html" class="theme1">England</a></h5>
                                    <h3 class="mb-0 white">London</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">15 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item1">
                                <div class="trend-image position-relative rounded">
                                    <img src="{{ asset('travelin/assets/images/destination/destination17.jpg') }}" alt="image">
                                    <div
                                        class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                        <div class="trend-content-title">
                                            <h5 class="mb-0"><a href="tour-grid.html" class="theme1">Italy</a>
                                            </h5>
                                            <h3 class="mb-0 white">Caspian Valley</h3>
                                        </div>
                                        <span class="white bg-theme p-1 px-2 rounded">18 Tours</span>
                                    </div>
                                    <div class="color-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item1">
                                <div class="trend-image position-relative rounded">
                                    <img src="{{ asset('travelin/assets/images/destination/destination14.jpg') }}" alt="image">
                                    <div
                                        class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                        <div class="trend-content-title">
                                            <h5 class="mb-0"><a href="tour-grid.html" class="theme1">Tokyo</a>
                                            </h5>
                                            <h3 class="mb-0 white">Japan</h3>
                                        </div>
                                        <span class="white bg-theme p-1 px-2 rounded">21 Tours</span>
                                    </div>
                                    <div class="color-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item1">
                                <div class="trend-image position-relative rounded">
                                    <img src="{{ asset('travelin/assets/images/destination/destination15.jpg') }}" alt="image">
                                    <div
                                        class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100">
                                        <div class="trend-content-title">
                                            <h5 class="mb-0"><a href="tour-grid.html" class="theme1">Moscow</a>
                                            </h5>
                                            <h3 class="mb-0 white">Russia</h3>
                                        </div>
                                        <span class="white bg-theme p-1 px-2 rounded">15 Tours</span>
                                    </div>
                                    <div class="color-overlay"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                            <div class="trend-item1">
                                <div class="trend-image position-relative rounded">
                                    <img src="{{ asset('travelin/assets/images/destination/destination16.jpg') }}" alt="image">
                                    <div
                                        class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                        <div class="trend-content-title">
                                            <h5 class="mb-0"><a href="tour-grid.html" class="theme1">Florida</a>
                                            </h5>
                                            <h3 class="mb-0 white">America</h3>
                                        </div>
                                        <span class="white bg-theme p-1 px-2 rounded">32 Tours</span>
                                    </div>
                                    <div class="color-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top Destination ends -->

    <!-- about-us starts -->
    <section class="about-us pt-0" style="background-image:url({{ asset('images/landing-page/beranda/'.$section_4['gambar_background']) }});">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image overflow-hidden">
                            <img src="{{ asset('images/landing-page/beranda/'.$section_4['gambar']) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 ps-4">
                        <div class="about-content text-center text-lg-start mb-4">
                            <h4 class="theme d-inline-block mb-0">{{$section_4?$section_4['sub_judul'] : ''}}</h4>
                            <h2 class="border-b mb-2 pb-1">{{$section_4?$section_4['judul'] : ''}}</h2>
                            <p class="border-b mb-2 pb-2">{!! $section_4?$section_4['deskripsi'] : '' !!}</p>
                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    @if ($section_4['konten'] != '')
                                        @foreach ($section_4['konten'] as $item)
                                            <li><i class="{{$item['ikon']}} theme"></i> {{$item['judul']}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Counter -->
                        <div class="counter-main w-75 float-end">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">20</h2>
                                                <span class="m-0">Years Experiences</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">530</h2>
                                                <span class="m-0">Tour Packages</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item border-end pe-4">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">850</h2>
                                                <span class="m-0">Happy Customers</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                        <div class="counter-item">
                                            <div class="counter-content">
                                                <h2 class="value mb-0 theme">320</h2>
                                                <span class="m-0">Award Winning</span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Counter -->
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- best tour Starts -->
    <section class="trending pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h4 class="mb-1 theme1">{{$section_5?$section_5['sub_judul']:'' }}</h4>
                        <h2 class="mb-1">{{$section_5?$section_5['judul']:'' }}</h2>
                        {!! $section_5?$section_5['deskripsi'] : '' !!}
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending2.jpg') }}" alt="image" class="">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Piazza Castello</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(12)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending3.jpg') }}" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Santorini, Oia</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending4.jpg') }}" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Maldives</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Hurawalhi Island</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(18)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending1.jpg') }}" alt="image">
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 5 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Santorini, Oia</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best tour Ends -->

    <!-- Last Minute Deal Starts -->
    <section class="trending pb-0 pt-6" style="background-image: url({{asset('travelin/assets/images/shape2.png')}});">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_6?$section_6['sub_judul']:'' }}</h4>
                <h2 class="mb-1">{!!$section_6?$section_6['judul']:'' !!}</h2>
                {!! $section_6?$section_6['deskripsi'] : '' !!}
            </div>
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <div class="trend-item1 rounded box-shadow mb-4">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trendingb-2.jpg') }}" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Norway</h5>
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">Norway Lake</a>
                                    </h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ms-2 white">(16)</span>
                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $180.00</span> |
                                                Per person</p>
                                        </div>
                                        <div class="entry-author">
                                            <i class="icon-calendar white"></i>
                                            <span class="fw-bold white"> 6 Days Tours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="trend-item1 rounded box-shadow mb-4">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending-large.jpg') }}" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Egpyt</h5>
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">Pyramid Land</a>
                                    </h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ms-2 white">(16)</span>
                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $180.00</span> |
                                                Per person</p>
                                        </div>
                                        <div class="entry-author">
                                            <i class="icon-calendar white"></i>
                                            <span class="fw-bold white"> 6 Days Tours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="trend-item1 rounded box-shadow">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trendingb-1.jpg') }}" alt="image" class="">
                                <div class="trend-content1 p-4">
                                    <h5 class="theme1 mb-1"><i class="flaticon-location-pin"></i> Usa</h5>
                                    <h3 class="mb-1 white"><a href="tour-grid.html" class="white">New York
                                            City</a></h3>
                                    <div class="rating-main d-flex align-items-center pb-2">
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="ms-2 white">(12)</span>
                                    </div>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author d-flex align-items-center">
                                            <p class="mb-0 white"><span class="theme1 fw-bold fs-5"> $140.00</span> |
                                                Per person</p>
                                        </div>
                                        <div class="entry-author">
                                            <i class="icon-calendar white"></i>
                                            <span class="fw-bold white"> 3 Days Tours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item rounded box-shadow">
                                    <div class="trend-image position-relative">
                                        <img src="{{ asset('travelin/assets/images/trending/trending1.jpg') }}" alt="image" class="">
                                        <div class="color-overlay"></div>
                                    </div>
                                    <div class="trend-content p-4 pt-5 position-relative bg-white">
                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                            <div class="entry-author">
                                                <i class="icon-calendar"></i>
                                                <span class="fw-bold"> 4 Days Tours</span>
                                            </div>
                                        </div>
                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Spain</h5>
                                        <h3 class="mb-1"><a href="tour-grid.html">Barcelona city beach</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(21)</span>
                                        </div>
                                        <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum</p>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $220.00</span> | Per
                                                    person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item rounded box-shadow">
                                    <div class="trend-image position-relative">
                                        <img src="{{ asset('travelin/assets/images/trending/trending2.jpg') }}" alt="image" class="">
                                        <div class="color-overlay"></div>
                                    </div>
                                    <div class="trend-content p-4 pt-5 position-relative bg-white">
                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                            <div class="entry-author">
                                                <i class="icon-calendar"></i>
                                                <span class="fw-bold"> 7 Days Tours</span>
                                            </div>
                                        </div>
                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Indonesia</h5>
                                        <h3 class="mb-1"><a href="tour-grid.html">Bali Province</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(11)</span>
                                        </div>
                                        <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum</p>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $210.00</span> | Per
                                                    person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item rounded box-shadow">
                                    <div class="trend-image position-relative">
                                        <img src="{{ asset('travelin/assets/images/trending/trending3.jpg') }}" alt="image" class="">
                                        <div class="color-overlay"></div>
                                    </div>
                                    <div class="trend-content p-4 pt-5 position-relative bg-white">
                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                            <div class="entry-author">
                                                <i class="icon-calendar"></i>
                                                <span class="fw-bold"> 3 Days Tours</span>
                                            </div>
                                        </div>
                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Russia</h5>
                                        <h3 class="mb-1"><a href="tour-grid.html">Red City Land</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(25)</span>
                                        </div>
                                        <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum</p>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $120.00</span> | Per
                                                    person</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="trend-item rounded box-shadow">
                                    <div class="trend-image position-relative">
                                        <img src="{{ asset('travelin/assets/images/trending/trending4.jpg') }}" alt="image" class="">
                                        <div class="color-overlay"></div>
                                    </div>
                                    <div class="trend-content p-4 pt-5 position-relative bg-white">
                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                            <div class="entry-author">
                                                <i class="icon-calendar"></i>
                                                <span class="fw-bold"> 5 Days Tours</span>
                                            </div>
                                        </div>
                                        <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Bangladesh</h5>
                                        <h3 class="mb-1"><a href="tour-grid.html">Cox's bazar Beach</a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                            <span class="ms-2">(32)</span>
                                        </div>
                                        <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in
                                            voluptate velit esse cillum</p>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <p class="mb-0"><span class="theme fw-bold fs-5"> $100.00</span> | Per
                                                    person</p>
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
    <!-- Last Minute Deal Ends -->

    <!-- Discount action starts -->
    <section class="discount-action pt-6"
        style="background-image:url({{ asset('images/landing-page/beranda/'.$section_7['gambar']) }}); background-position:center;">
        <div class="section-shape section-shape1 top-inherit bottom-0"
            style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
        <div class="container">
            <div class="call-banner rounded pt-10 pb-14">
                <div class="call-banner-inner w-75 mx-auto text-center px-5">
                    <div class="trend-content-main">
                        <div class="trend-content mb-5 pb-2 px-5">
                            <h5 class="mb-1 theme">{{$section_7?$section_7['sub_judul'] : ''}}</h5>
                            <h2><a href="#">{!!$section_7?$section_7['judul'] : ''!!}</a></h2>
                            {!! $section_7?$section_7['deskripsi'] : '' !!}
                        </div>
                        <div class="video-button text-center position-relative">
                            <div class="call-button text-center">
                                <button type="button" class="play-btn js-video-button" data-video-id="152879427"
                                    data-channel="vimeo">
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
    </section>
    <!-- Discount action Ends -->

    <!-- offer Packages Starts -->
    <section class="trending pb-0 pt-4">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_8?$section_8['sub_judul']:'' }}</h4>
                <h2 class="mb-1">{!!$section_8?$section_8['judul']:'' !!}</h2>
                <p>{!! $section_8?$section_8['deskripsi'] : '' !!}</p>
            </div>
            <div class="trend-box">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item rounded box-shadow bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending3.jpg') }}" alt="image" class="">
                                <div class="ribbon ribbon-top-left"><span class="fw-bold">20% OFF</span></div>
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Croatia</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Piazza Castello</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(12)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $170.00</span> | Per person
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="trend-item box-shadow rounded bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending1.jpg') }}" alt="image">
                                <div class="ribbon ribbon-top-left"><span class="fw-bold">30% OFF</span></div>
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Greece</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Santorini, Oia</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(38)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $180.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="trend-item box-shadow rounded bg-white">
                            <div class="trend-image position-relative">
                                <img src="{{ asset('travelin/assets/images/trending/trending2.jpg') }}" alt="image">
                                <div class="ribbon ribbon-top-left"><span class="fw-bold">15% OFF</span></div>
                                <div class="color-overlay"></div>
                            </div>
                            <div class="trend-content p-4 pt-5 position-relative">
                                <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                    <div class="entry-author">
                                        <i class="icon-calendar"></i>
                                        <span class="fw-bold"> 9 Days Tours</span>
                                    </div>
                                </div>
                                <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Maldives</h5>
                                <h3 class="mb-1"><a href="tour-grid.html">Hurawalhi Island</a></h3>
                                <div class="rating-main d-flex align-items-center pb-2">
                                    <div class="rating">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="ms-2">(18)</span>
                                </div>
                                <p class=" border-b pb-2 mb-2">Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum</p>
                                <div class="entry-meta">
                                    <div class="entry-author d-flex align-items-center">
                                        <p class="mb-0"><span class="theme fw-bold fs-5"> $260.00</span> | Per person
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Packages Ends -->

    <!-- our teams starts -->
    <section class="our-team pb-6">
        <div class="container">

            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_9?$section_9['sub_judul']:'' }}</h4>
                <h2 class="mb-1">{!!$section_9?$section_9['judul']:'' !!}</h2>
                {!! $section_9?$section_9['deskripsi'] : '' !!}
            </div>
            <div class="team-main">
                <div class="row shop-slider">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ asset('travelin/assets/images/team/img1.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Salmon Thuir</h4>
                                <p class="mb-0 white">Senior Agent</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ asset('travelin/assets/images/team/img2.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Horke Pels</h4>
                                <p class="mb-0 white">Head Officer</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ asset('travelin/assets/images/team/img4.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Solden kalos</h4>
                                <p class="mb-0 white">Supervisor</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ asset('travelin/assets/images/team/img3.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Nelson Bam</h4>
                                <p class="mb-0 white">Quality Assurance</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="{{ asset('travelin/assets/images/team/img4.jpg') }}" alt="team">
                            </div>
                            <div class="team-content text-center bg-theme p-3">
                                <h4 class="mb-0 white">Cacics Coold</h4>
                                <p class="mb-0 white">Asst. Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->

    <!-- recent-articles starts -->
    <section class="trending recent-articles pb-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_10?$section_10['sub_judul']:'' }}</h4>
                <h2 class="mb-1">{!!$section_10?$section_10['judul']:'' !!}</h2>
                {!! $section_10?$section_10['deskripsi'] : '' !!}
            </div>
            <div class="recent-articles-inner">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                            <div class="trend-image">
                                <img src="{{ asset('travelin/assets/images/trending/trending10.jpg') }}" alt="image">
                            </div>
                            <div class="trend-content-main p-4 pb-2">
                                <div class="trend-content">
                                    <h5 class="theme mb-1">Technology</h5>
                                    <h4><a href="detail-1.html">How a developer duo at Deutsche Bank keep remote
                                            alive.</a></h4>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author mb-2">
                                            <img src="{{ asset('travelin/assets/images/reviewer/2.jpg') }}" alt="" class="rounded-circle me-1">
                                            <span>Sollmond Nell</span>
                                        </div>
                                        <div class="entry-button d-flex align-items-centermb-2">
                                            <a href="#" class="nir-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                            <div class="trend-image">
                                <img src="{{ asset('travelin/assets/images/trending/trending12.jpg') }}" alt="image">
                            </div>
                            <div class="trend-content-main p-4 pb-2">
                                <div class="trend-content">
                                    <h5 class="theme mb-1">Inspiration</h5>
                                    <h4><a href="detail-1.html">Inspire Runner with Autism Graces of Women's Running</a>
                                    </h4>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author mb-2">
                                            <img src="{{ asset('travelin/assets/images/reviewer/1.jpg') }}" alt="" class="rounded-circle me-1">
                                            <span>David Scott</span>
                                        </div>
                                        <div class="entry-button d-flex align-items-center mb-2">
                                            <a href="#" class="nir-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                            <div class="trend-image">
                                <img src="{{ asset('travelin/assets/images/trending/trending13.jpg') }}" alt="image">
                            </div>
                            <div class="trend-content-main p-4 pb-2">
                                <div class="trend-content">
                                    <h5 class="theme mb-1">Public</h5>
                                    <h4><a href="detail-1.html">Services To Grow Your Business Sell Affiliate
                                            Products</a></h4>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                    <div class="entry-meta d-flex align-items-center justify-content-between">
                                        <div class="entry-author mb-2">
                                            <img src="{{ asset('travelin/assets/images/reviewer/3.jpg') }}" alt="" class="rounded-circle me-1">
                                            <span>John Bolden</span>
                                        </div>
                                        <div class="entry-button d-flex align-items-center mb-2">
                                            <a href="#" class="nir-btn">Read More</a>
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
    <!-- recent-articles ends -->
@endsection
