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
                            <p class="m-0">Showing {{$products->current_page}}-{{$products->last_page}} of {{$products->total}} results</p>
                        </div>
                    </div>

                    <div class="destination-list">
                        @foreach ($products->data as $produk)
                            <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                                <div class="row">
                                    <div class="col-lg-4 col-md-3">
                                    <div class="trend-item2 rounded">
                                            <a href="#" style="background-image: url({{ env('RAZEN_URL') }}storage/{{json_decode($produk->gambar)[0]}});"></a>
                                            <div class="color-overlay"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="trend-content position-relative text-md-start text-center">
                                            @php
                                                $list_kategoris = $produk->kategori_produk;
                                                $list = '';
                                                $i = 0;
                                                $len = count($list_kategoris);
                                                foreach ($list_kategoris as $kategori) {
                                                    $list .= $kategori->nama;
                                                    if ($i == 0) {
                                                        $list .= ', ';
                                                    } else if ($i == $len - 1) {
                                                        $list .= '';
                                                    }
                                                    $i++;
                                                }
                                            @endphp
                                            <small>{{$list}}</small>
                                            <h3 class="mb-1"><a href="#">{{$produk->nama}}</a></h3>
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
                                                <span class="mb-0">Dari</span>
                                                <h3 class="mb-0">Rp. {{number_format($produk->harga, 2, ',', '.')}}</h3>
                                                <small>Per Orang</small>
                                            </div>
                                            <a href="{{preg_replace('#/+#','/',env('RAZEN_URL').$produk->link)}}" class="nir-btn">Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">
                            <div class="col-6 text-left">
                                <a href="{{$products->prev_page_url}}" class="nir-btn" @if($products->prev_page_url == null) style="pointer-events: none;" @endif>Sebelumnya <i class="fa fa-long-arrow-alt-left"></i></a>
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <a href="{{$products->next_page_url}}" class="nir-btn" @if($products->next_page_url == null) style="pointer-events: none;" @endif>Selanjutnya <i class="fa fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pe-lg-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item mb-4">
                                <h3 class="">Kategori</h3>
                                <ul class="sidebar-category1">
                                    @foreach ($kategoris as $kategori)
                                        <li>{{$kategori->name}} <span class="float-end">{{$kategori->jumlah_produk}}</span></li>
                                    @endforeach
                                </ul>
                            </div>

                            {{-- <div class="sidebar-item mb-4">
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
                            </div> --}}
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
