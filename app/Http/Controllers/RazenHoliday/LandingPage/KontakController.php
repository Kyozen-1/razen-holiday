<?php

namespace App\Http\Controllers\RazenHoliday\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use Carbon\Carbon;
use App\Models\LandingPageKontak;

class KontakController extends Controller
{
    public function index()
    {
        return view('razen-holiday.landing-page.kontak.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPageKontak::first();
        if($cek)
        {
            $kontak = LandingPageKontak::find($cek->id);
            if($kontak->section_1)
            {
                $get_section_1 = json_decode($kontak->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/kontak/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/kontak/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/kontak/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $kontak = new LandingPageKontak;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/kontak/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'gambar' => $gambarName
        ];

        $kontak->section_1 = json_encode($array);
        $kontak->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-holiday.landing-page.kontak.index');
    }

    public function store_section_2(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.kontak.index');
        }

        $cek = LandingPageKontak::first();

        if($cek)
        {
            $kontak = LandingPageKontak::find($cek->id);
        } else {
            $kontak = new LandingPageKontak;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul
        ];

        $kontak->section_2 = json_encode($array);
        $kontak->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-holiday.landing-page.kontak.index');
    }
}
