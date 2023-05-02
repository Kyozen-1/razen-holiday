@extends('landing-page.layouts.app')
@section('title', 'Kontak | Razen Holiday')

@section('content')
    @php
        use App\Models\LandingPageKontak;
        use App\Models\Profil;

        $kontak = LandingPageKontak::first();

        $section_1 = json_decode($kontak->section_1, true);
        $section_2 = json_decode($kontak->section_2, true);

        $profil = Profil::first();
    @endphp
    <!-- BreadCrumb Starts -->
    <section class="breadcrumb-main pb-20 pt-14" style="background-image: url({{ asset('images/landing-page/kontak/'.$section_1['gambar']) }});">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Kontak Kami</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- contact starts -->
    <section class="contact-main pt-6 pb-60">
        <div class="container">
            <div class="contact-info-main mt-0">
                <div class="row">
                    <div class="col-lg-10 col-offset-lg-1 mx-auto">
                        <div class="contact-info bg-white">
                            <div class="contact-info-title text-center mb-4 px-5">
                                <h3 class="mb-1">{{$section_2?$section_2['sub_judul'] : ''}}</h3>
                                <p class="mb-0">{{$section_2?$section_2['judul'] : ''}}</p>
                            </div>
                            <div class="contact-info-content row mb-1">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-map-marker-alt theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>Lokasi Kantor</h3>
                                            <p class="m-0">{{$profil->alamat}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-phone theme"></i>
                                        </div>
                                        <div class="info-content">
                                            <h3>Nomor HP</h3>
                                            <p class="m-0">{{$profil->no_hp}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <div class="info-item bg-lgrey px-4 py-5 border-all text-center rounded">
                                        <div class="info-icon mb-2">
                                            <i class="fa fa-envelope theme"></i>
                                        </div>
                                        <div class="info-content ps-4">
                                            <h3>Email</h3>
                                            <p class="m-0">{{$profil->email}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="contact-form1" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="map rounded overflow-hiddenb rounded mb-md-4">
                                            <div style="width: 100%">
                                                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=razen%20teknologi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div id="contactform-error-msg"></div>

                                        <form id="kontak_kami_form" method="POST">
                                            @csrf
                                            <div class="form-group mb-2">
                                                <input type="text" name="nama" class="form-control" placeholder="Masukan nama anda">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="email" name="email"  class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="no_hp" class="form-control" placeholder="Masukan Nomor HP">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="subjek" class="form-control" placeholder="Masukan Subjek">
                                            </div>
                                            <div class="textarea mb-2">
                                                <textarea name="message" placeholder="Masukan pesan"></textarea>
                                            </div>
                                            <div class="comment-btn text-center">
                                                <button class="nir-btn" type="submit" id="btn_kontak">Kirim Pesan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact Ends -->
@endsection

@section('js')
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script>
        $('#kontak_kami_form').submit(function(e){
            e.preventDefault();
            $.ajax({
                url : "{{ route('kontak-kami') }}",
                method: "POST",
                data: new FormData(this),
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function()
                {
                    return new swal({
                        title: "Checking...",
                        text: "Harap Menunggu",
                        imageUrl: "{{ asset('/images/preloader.gif') }}",
                        showConfirmButton: false,
                        allowOutsideClick: false
                    });
                },
                success: function(data){
                    if(data.errors)
                    {
                        Swal.fire({
                            icon: 'errors',
                            title: data.errors,
                            showConfirmButton: true
                        });
                    }
                    if(data.success) {
                        new swal({
                            icon: 'success',
                            title: data.success,
                            }).then(function() {
                                window.location.href = "{{ route('kontak') }}";
                        });
                    }
                }
            });
        });
    </script>
@endsection
