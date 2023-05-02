@extends('landing-page.layouts.app')
@section('title', 'Proyek | Razen Holiday')

@section('content')
    @php
        use App\Models\LandingPageProyek;

        $proyek = LandingPageProyek::first();

        $section_1 = json_decode($proyek->section_1, true);
        $section_2 = json_decode($proyek->section_2, true);
    @endphp
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('images/landing-page/proyek/'.$section_1['gambar']) }});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Proyek</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Proyek</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Gallery starts -->
    <div class="gallery pt-6 pb-0">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">{{$section_2?$section_2['sub_judul'] : ''}}</h4>
                <h2 class="mb-1">{{$section_2?$section_2['judul'] : ''}}</h2>
                {!!$section_2?$section_2['deskripsi'] : ''!!}
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/trending/trending1.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Barcelona - Spain</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending1.jpg') }}"  data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/trending/trending2.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Beijing - China</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending2.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/trending/trending3.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Moscow - Russia</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending3.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/trending/trending4.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bangkok - Thailand</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending4.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/trending/trending8.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">FLorida - USA</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending5.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/destination/destination14.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Tokyo - Japan</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending6.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/destination/destination7.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bali - Indonesia</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending7.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/destination/destination6.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bangkok - Thailand</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending8.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery-item mb-4 rounded overflow-hidden">
                        <div class="gallery-image">
                            <img src="{{ asset('travelin/assets/images/destination/destination4.jpg') }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Bangkok - Thailand</h5>
                            <ul>
                                <li><a href="{{ asset('travelin/assets/images/trending/trending8.jpg') }}" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Ends -->
@endsection
