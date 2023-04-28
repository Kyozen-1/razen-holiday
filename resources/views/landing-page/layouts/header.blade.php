@php
    use Carbon\Carbon;
@endphp
<header class="main_header_area">
    <div class="header-content py-1 bg-theme">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i class="icon-calendar white"></i> {{Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</a>
                    </li>
                    <li><a href="#" class="white"><i class="icon-location-pin white"></i> Hollywood, America</a>
                    </li>
                    <li><a href="#" class="white"><i class="icon-clock white"></i> Mon-Fri: 10 AM – 5 PM</a></li>
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    <li><a href="#" class="white"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="white"><i class="fab fa-linkedin " aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Navigation Bar -->
    <div class="header_menu" id="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-3 pt-3">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('beranda') }}">
                            <img src="{{ asset('travelin/assets/images/logo.png') }}" alt="image">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="responsive-menu">
                            <li><a href="{{ route('beranda') }}">Beranda</a></li>
                            <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
                            <li><a href="{{ route('layanan') }}">Layanan</a></li>
                            <li><a href="https://shop.razen.co.id/stores/razen-holiday">E-Commerce</a></li>
                            <li><a href="#">E-Learning</a></li>
                            <li><a href="{{ route('proyek') }}">Proyek</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    {{-- <div class="register-login d-flex align-items-center">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="me-3">
                            <i class="icon-user"></i> Login/Register
                        </a>
                        <a href="#" class="nir-btn white">Book Now</a>
                    </div> --}}

                    <div id="slicknav-mobile"></div>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
    </div>
    <!-- Navigation Bar Ends -->
</header>
