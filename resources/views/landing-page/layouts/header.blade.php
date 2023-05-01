@php
    use Carbon\Carbon;
    use App\Models\Profil;
    use App\Models\PivotProfilMediaSosial;

    $profil = Profil::first();
    $pivot_profil_media_sosials = PivotProfilMediaSosial::where('profil_id', $profil->id)->get();
@endphp
<header class="main_header_area">
    <div class="header-content py-1 bg-theme">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="links">
                <ul>
                    <li><a href="#" class="white"><i class="icon-calendar white"></i> {{Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, j F Y')}}</a>
                    </li>
                    <li><a href="#" class="white"><i class="icon-location-pin white"></i>{{$profil->alamat}}</a>
                    </li>
                    <li><a href="#" class="white"><i class="icon-clock white"></i> {{$profil->kerja_dari_hari}}-{{$profil->kerja_sampai_hari}}: {{Carbon::parse($profil->kerja_dari_jam)->format('g:i A')}} - {{Carbon::parse($profil->kerja_sampai_jam)->format('g:i A')}}</a></li>
                </ul>
            </div>
            <div class="links float-right">
                <ul>
                    @foreach ($pivot_profil_media_sosials as $item)
                        <li><a href="{{$item->tautan}}" class="white" target="blank"><i class="{{$item->media_sosial->kode_ikon}}" aria-hidden="true"></i></a></li>
                    @endforeach
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
                            @if (request()->routeIs('beranda'))
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="{{ route('beranda') }}">Beranda</a>
                            </li>

                            @if (request()->routeIs('perusahaan'))
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="{{ route('perusahaan') }}">Perusahaan</a>
                            </li>

                            @if (request()->routeIs('layanan'))
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="{{ route('layanan') }}">Layanan</a>
                            </li>

                            <li>
                                <a href="https://shop.razen.co.id/stores/razen-holiday">E-Commerce</a>
                            </li>

                            <li>
                                <a href="#">E-Learning</a>
                            </li>

                            @if (request()->routeIs('proyek'))
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="{{ route('proyek') }}">Proyek</a>
                            </li>

                            <li>
                                <a href="#">Blog</a>
                            </li>

                            @if (request()->routeIs('kontak'))
                            <li class="active">
                            @else
                            <li>
                            @endif
                                <a href="{{ route('kontak') }}">Kontak</a>
                            </li>
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
