<!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

    <head>
        @include('landing-page.layouts.head')
    </head>

    <body>
        @php
            use App\Models\Testimonial as Testimoni;
            use App\Models\SectionTestimonial;
            use App\Models\Partner;
            use App\Models\Profil;
            use App\Models\PivotProfilMediaSosial;
            use Carbon\Carbon;

            $profil = Profil::first();
            $pivot_profil_media_sosials = PivotProfilMediaSosial::where('profil_id', $profil->id)->get();

            $section_testimonial = SectionTestimonial::first();

            $datas = Testimoni::latest()->get();
            $partners = Partner::latest()->get();
        @endphp

        <!-- Preloader -->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Preloader Ends -->

        <!-- header starts -->
        @include('landing-page.layouts.header')
        <!-- header ends -->
        <div class="tet"></div>

        @yield('content')

        <!-- testomonial start -->
        <section class="testimonial pt-9" style="background-image:url({{ asset('images/section/testimonial/'.$section_testimonial->gambar_background) }})">
            <div class="container">
                <div class="section-title mb-6 text-center w-75 mx-auto">
                    <h4 class="mb-1 theme1">{{$section_testimonial?$section_testimonial->sub_judul : ''}}</h4>
                    <h2 class="mb-1">{{$section_testimonial?$section_testimonial->judul : ''}}</h2>
                    {!!$section_testimonial?$section_testimonial->deskripsi : ''!!}
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 pe-4">
                        <div class="testimonial-image">
                            <img src="{{ asset('images/section/testimonial/'.$section_testimonial->gambar) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 ps-4">
                        <div class="row review-slider">
                            @foreach ($datas as $data)
                                <div class="col-sm-4 item">
                                    <div class="testimonial-item1 rounded">
                                        <div class="author-info d-flex align-items-center mb-4">
                                            <img src="{{ asset('images/testimoni/'.$data->foto) }}" alt="">
                                            <div class="author-title ms-3">
                                                <h5 class="m-0 theme">{{$data->nama}}</h5>
                                                <span>{{$data->jabatan}}</span>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i>{!! $data->testimoni !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial ends -->

        <!-- partner starts -->
        <div class="our-partner p-0">
            <div class="container">
                <div class="partners_inner">
                    <ul>
                        @foreach ($partners as $partner)
                            <li><img src="{{ asset('images/partner/'.$partner->foto) }}" alt=""></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- partner ends -->

        <!-- footer starts -->
        @include('landing-page.layouts.footer')
        <!-- footer ends -->

        <!-- Back to top start -->
        <div id="back-to-top">
            <a href="#"></a>
        </div>
        <!-- Back to top ends -->

        <!-- *Scripts* -->
        @include('landing-page.layouts.js')
    </body>

</html>
