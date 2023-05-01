@extends('landing-page.layouts.app')
@section('title', 'Perusahaan | Razen Holiday')

@section('content')
    @php
        use App\Models\LandingPagePerusahaan;
        use App\Models\LandingPageBeranda;
        use Carbon\Carbon;

        $perusahaan = LandingPagePerusahaan::first();

        $section_1 = json_decode($perusahaan->section_1, true);
        $section_4 = json_decode($perusahaan->section_4, true);

        $beranda = LandingPageBeranda::first();
        $beranda_section_2 = json_decode($beranda->section_2, true);
        $beranda_section_4 = json_decode($beranda->section_4, true);
    @endphp
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('images/landing-page/perusahaan/'.$section_1['gambar']) }});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Perusahaan</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Perusahaan</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- about-us starts -->
    <section class="about-us pt-6" style="background-image:url({{asset('travelin/assets/images/background_pattern.png')}}); background-position:bottom right;">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block mb-0">{{$beranda_section_4?$beranda_section_4['sub_judul'] : ''}}</h4>
                            <h2 class="border-b mb-2 pb-1">{{$beranda_section_4?$beranda_section_4['judul'] : ''}}</h2>
                            <p class="border-b mb-2 pb-2">{!! $beranda_section_4?$beranda_section_4['deskripsi'] : '' !!}</p>
                            <div class="about-listing">
                                <ul class="d-flex justify-content-between">
                                    @if ($beranda_section_4['konten'] != '')
                                        @foreach ($beranda_section_4['konten'] as $item)
                                            <li><i class="{{$item['ikon']}} theme"></i> {{$item['judul']}}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <img src="{{ asset('images/landing-page/beranda/'.$beranda_section_4['gambar']) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Counter -->
                        <div class="counter-main w-75 float-start z-index3 position-relative">
                            <div class="counter p-4 pb-0 box-shadow bg-white rounded mt-minus">
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

    <!-- about-us starts -->
    <section class="about-us pb-0">
        <div class="section-shape section-shape1" style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
        <div class="container">

            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$beranda_section_2?$beranda_section_2['sub_judul'] : ''}}</h4>
                <h2 class="mb-1">{{$beranda_section_2?$beranda_section_2['judul'] : ''}}</h2>
                {!! $beranda_section_2?$beranda_section_2['deskripsi'] : '' !!}
            </div>

            <!-- why us starts -->
            <div class="why-us">
                <div class="why-us-box">
                    <div class="row">
                        @if ($beranda_section_2['konten'] != '')
                            @foreach ($beranda_section_2['konten'] as $item)
                                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                    <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                                        <div class="why-us-content">
                                            <div class="why-us-icon mb-1">
                                                <i class="{{$item['ikon']}} theme"></i>
                                            </div>
                                            <h4><a href="#">{{$item['judul']}}</a></h4>
                                            <p class="mb-2">{{$item['deskripsi_singkat']}}</p>
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
    </section>
    <!-- about-us ends -->

    <!-- our teams starts -->
    <section class="our-team pb-0 pt-6">
        <div class="container">

            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h4 class="mb-1 theme1">{{$section_4?$section_4['sub_judul'] : ''}}</h4>
                <h2 class="mb-1">{{$section_4?$section_4['judul'] : ''}}</h2>
                {!!$section_4?$section_4['deskripsi'] : ''!!}
            </div>
            <div class="team-main">
                <div class="row shop-slider">
                    @foreach ($guides as $guide)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                            <div class="team-list rounded">
                                <div class="team-image">
                                    <img src="{{ asset('images/guide/'.$guide->foto) }}" alt="team">
                                </div>
                                <div class="team-content text-center p-3 bg-theme">
                                    <h4 class="mb-0 white">{{$guide->nama}}</h4>
                                    <p class="mb-0 white">{{$guide->jabatan}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->
@endsection
