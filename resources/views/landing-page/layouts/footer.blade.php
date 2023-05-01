@php
    use App\Models\Profil;
    use Carbon\Carbon;
    use App\Models\PivotProfilMediaSosial;

    $profil = Profil::first();
    $pivot_profil_media_sosials = PivotProfilMediaSosial::where('profil_id', $profil->id)->get();
@endphp
<footer class="pt-20 pb-4" style="background-image: url({{asset('travelin/assets/images/background_pattern.png')}});">
    <div class="section-shape top-0" style="background-image: url({{asset('travelin/assets/images/shape8.png')}});"></div>
    <!-- Instagram starts -->
    <div class="insta-main pb-10">
        <div class="container">
            <div class="insta-inner">
                <div class="follow-button">
                    <h5 class="m-0 rounded"><i class="fab fa-instagram"></i> Follow on Instagram</h5>
                </div>
                <div class="row attract-slider">
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-3.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-4.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-5.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-1.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-7.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-8.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-2.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-6.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image rounded">
                            <a href="gallery.html"><img src="{{ asset('travelin/assets/images/insta/ins-9.jpg') }}" alt="insta"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram ends -->
    <div class="footer-upper pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                    <div class="footer-about">
                        <img src="{{ asset('images/razen-holiday/logo/'.$profil->logo) }}" alt="">
                        <p class="mt-3 mb-3 white">
                            {!! $profil->deskripsi !!}
                        </p>
                        <ul>
                            <li class="white"><strong>Telepon:</strong> {{$profil->no_hp}}</li>
                            <li class="white"><strong>Lokasi:</strong> {{$profil->alamat}}</li>
                            <li class="white"><strong>Email:</strong> {{$profil->email}}</li>
                            <li class="white"><strong>Website:</strong> www.razenholiday.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Tautan cepat</h3>
                        <ul>
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
                            <li><a href="{{ route('layanan') }}">Layanan</a></li>
                            <li><a href="https://shop.razen.co.id/stores/razen-holiday" target="blank">E-Commerce</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="{{ route('proyek') }}">Proyek</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="footer-links">
                        <h3 class="white">Newsletter</h3>
                        <div class="newsletter-form ">
                            <p class="mb-3">Jin our community of over 200,000 global readers who receives emails
                                filled with news, promotions, and other good stuff.</p>
                            <form action="#" method="get" accept-charset="utf-8"
                                class="border-0 d-flex align-items-center">
                                <input type="text" placeholder="Email Address">
                                <button class="nir-btn ms-2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                <div class="copyright-text">
                    <p class="m-0 white">{{Carbon::now()->year}} {{$profil->pt}}. All rights reserved.</p>
                </div>
                <div class="social-links">
                    <ul>
                        @foreach ($pivot_profil_media_sosials as $item)
                            <li><a href="{{$item->tautan}}" target="blank"><i class="{{$item->media_sosial->kode_ikon}}" aria-hidden="true"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</footer>
