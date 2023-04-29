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
use App\Models\LandingPagePerusahaan;

class PerusahaanController extends Controller
{
    public function index()
    {
        return view('razen-holiday.landing-page.perusahaan.index');
    }

    public function store_section_1(Request $request)
    {
        $cek = LandingPagePerusahaan::first();
        if($cek)
        {
            $perusahaan = LandingPagePerusahaan::find($cek->id);
            if($perusahaan->section_1)
            {
                $get_section_1 = json_decode($perusahaan->section_1, true);

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/perusahaan/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/perusahaan/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/perusahaan/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $perusahaan = new LandingPagePerusahaan;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/perusahaan/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $array = [
            'gambar' => $gambarName
        ];

        $perusahaan->section_1 = json_encode($array);
        $perusahaan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-holiday.landing-page.perusahaan.index');
    }

    public function store_section_4(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.perusahaan.index');
        }

        $cek = LandingPagePerusahaan::first();

        if($cek)
        {
            $perusahaan = LandingPagePerusahaan::find($cek->id);
        } else {
            $perusahaan = new LandingPagePerusahaan;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $perusahaan->section_4 = json_encode($array);
        $perusahaan->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-holiday.landing-page.perusahaan.index');
    }
}
