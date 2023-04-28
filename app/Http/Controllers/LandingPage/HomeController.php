<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('landing-page.index');
    }

    public function perusahaan()
    {
        return view('landing-page.perusahaan');
    }

    public function layanan()
    {
        return view('landing-page.layanan');
    }

    public function proyek()
    {
        return view('landing-page.proyek');
    }

    public function kontak()
    {
        return view('landing-page.kontak');
    }
}
