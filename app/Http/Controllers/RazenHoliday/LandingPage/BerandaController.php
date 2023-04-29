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
use App\Models\LandingPageBeranda;

class BerandaController extends Controller
{
    public function index()
    {
        return view('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_1(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($beranda->section_1)
            {
                $errors = Validator::make($request->all(), [
                    'gambar_background' => 'mimes:png,jpg,jpeg',
                    'gambar' => 'mimes:png,jpg,jpeg'
                ]);

                if($errors -> fails())
                {
                    Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
                    return redirect()->route('razen-holiday.landing-page.beranda.index');
                }

                $get_section_1 = json_decode($beranda->section_1, true);

                if ($request->gambar_background) {
                    $gambarBackgroundName = $get_section_1['gambar_background'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_section_1['gambar_background'];
                }

                if ($request->gambar) {
                    $gambarName = $get_section_1['gambar'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_1['gambar'];
                }
            } else {
                $errors = Validator::make($request->all(), [
                    'gambar_background' => 'required|mimes:png,jpg,jpeg',
                    'gambar' => 'required|mimes:png,jpg,jpeg'
                ]);

                if($errors -> fails())
                {
                    Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
                    return redirect()->route('razen-holiday.landing-page.beranda.index');
                }

                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                $gambar->save($gambarSize, 100);
            }
        } else {
            $errors = Validator::make($request->all(), [
                'gambar_background' => 'required|mimes:png,jpg,jpeg',
                'gambar' => 'required|mimes:png,jpg,jpeg'
            ]);

            if($errors -> fails())
            {
                Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
                return redirect()->route('razen-holiday.landing-page.beranda.index');
            }

            $beranda = new LandingPageBeranda;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);
        }


        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'gambar_background' => $gambarBackgroundName
        ];

        $beranda->section_1 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 1');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_2(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();

        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($cek->section_2)
            {
                $get_section_2 = json_decode($beranda->section_2, true);

                if($get_section_2['konten'] != '')
                {
                    $konten = $get_section_2['konten'];
                } else {
                    $konten = '';
                }

            } else {
                $konten = '';
            }

        } else {
            $beranda = new LandingPageBeranda;

            $konten = '';
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $konten
        ];

        $beranda->section_2 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_2_konten(Request $request)
    {
        $konten_section_2 = $request->section_2;

        $get = LandingPageBeranda::first();

        if($get->section_2)
        {
            $beranda = LandingPageBeranda::find($get->id);

            $data_section_2 = json_decode($get->section_2, true);

            if($data_section_2['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_2); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'ikon' => $konten_section_2[$i]['ikon'],
                        'judul' => $konten_section_2[$i]['judul'],
                        'deskripsi_singkat' => $konten_section_2[$i]['deskripsi_singkat']
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_2['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'ikon' => $value['ikon'],
                        'judul' => $value['judul'],
                        'deskripsi_singkat' => $value['deskripsi_singkat'],
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_2); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'ikon' => $konten_section_2[$i]['ikon'],
                        'judul' => $konten_section_2[$i]['judul'],
                        'deskripsi_singkat' => $konten_section_2[$i]['deskripsi_singkat'],
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'sub_judul' => $data_section_2['sub_judul'],
                'judul' => $data_section_2['judul'],
                'deskripsi' => $data_section_2['deskripsi'],
                'konten' => $data
            ];

            $beranda->section_2 = json_encode($array);
            $beranda->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 2');
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 2');
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }
    }

    public function hapus_section_2_konten(Request $request)
    {
        $get = LandingPageBeranda::first();
        $data = [];
        $data_section_2 = json_decode($get->section_2, true);
        foreach ($data_section_2['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'ikon' => $value['ikon'],
                    'judul' => $value['judul'],
                    'deskripsi_singkat' => $value['deskripsi_singkat'],
                ];
            }
        }

        $landingpage_beranda = LandingPageBeranda::find($get->id);
        $array = [
            'sub_judul' => $data_section_2['sub_judul'],
            'judul' => $data_section_2['judul'],
            'deskripsi' => $data_section_2['deskripsi'],
            'konten' => $data
        ];
        $landingpage_beranda->section_2 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_3(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
        } else {
            $beranda = new LandingPageBeranda;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $beranda->section_3 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 3');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_4(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();

        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($cek->section_4)
            {
                $get_section_4 = json_decode($beranda->section_4, true);

                if($request->gambar)
                {
                    $gambarName = $get_section_4['gambar'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_4['gambar'];
                }

                if($request->gambar_background)
                {
                    $gambarBackgroundName = $get_section_4['gambar_background'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarBackgroundName));

                    $gambarBackgroundExtension = $request->gambar_background->extension();
                    $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                    $gambarBackground = Image::make($request->gambar_background);
                    $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
                    $gambarBackground->save($gambarBackgroundSize, 100);
                } else {
                    $gambarBackgroundName = $get_section_4['gambar_background'];
                }

                if($get_section_4['konten'] != '')
                {
                    $konten = $get_section_4['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);

                $konten = '';
            }

        } else {
            $beranda = new LandingPageBeranda;

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/landing-page/beranda/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);

            $konten = '';
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'gambar_background' => $gambarBackgroundName,
            'konten' => $konten
        ];

        $beranda->section_4 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_4_konten(Request $request)
    {
        $konten_section_4 = $request->section_4;

        $get = LandingPageBeranda::first();

        if($get->section_4)
        {
            $beranda = LandingPageBeranda::find($get->id);

            $data_section_4 = json_decode($get->section_4, true);

            if($data_section_4['konten'] == '')
            {
                for ($i=0; $i < count($konten_section_4); $i++) {
                    $data[] = [
                        'id' => uniqid(),
                        'ikon' => $konten_section_4[$i]['ikon'],
                        'judul' => $konten_section_4[$i]['judul'],
                    ];
                }
            } else {
                $data_lama = [];
                foreach ($data_section_4['konten'] as $value) {
                    $data_lama[] = [
                        'id' => $value['id'],
                        'ikon' => $value['ikon'],
                        'judul' => $value['judul']
                    ];
                }

                $data_baru = [];
                for ($i=0; $i < count($konten_section_4); $i++) {
                    $data_baru[] = [
                        'id' => uniqid(),
                        'ikon' => $konten_section_4[$i]['ikon'],
                        'judul' => $konten_section_4[$i]['judul']
                    ];
                }

                $data = array_merge($data_lama, $data_baru);
            }

            $array = [
                'sub_judul' => $data_section_4['sub_judul'],
                'judul' => $data_section_4['judul'],
                'deskripsi' => $data_section_4['deskripsi'],
                'gambar_background' => $data_section_4['gambar_background'],
                'gambar' => $data_section_4['gambar'],
                'konten' => $data
            ];

            $beranda->section_4 = json_encode($array);
            $beranda->save();

            Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 4');
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        } else {
            Alert::error('Gagal!', 'Isi terlebih dahulu section 4');
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }
    }

    public function hapus_section_4_konten(Request $request)
    {
        $get = LandingPageBeranda::first();
        $data = [];
        $data_section_4 = json_decode($get->section_4, true);
        foreach ($data_section_4['konten'] as $value) {
            if($value['id'] != $request->id)
            {
                $data[] = [
                    'id' => $value['id'],
                    'ikon' => $value['ikon'],
                    'judul' => $value['judul'],
                ];
            }
        }

        $landingpage_beranda = LandingPageBeranda::find($get->id);
        $array = [
            'sub_judul' => $data_section_4['sub_judul'],
            'judul' => $data_section_4['judul'],
            'deskripsi' => $data_section_4['deskripsi'],
            'gambar_background' => $data_section_4['gambar_background'],
            'gambar' => $data_section_4['gambar'],
            'konten' => $data
        ];
        $landingpage_beranda->section_4 = json_encode($array);
        $landingpage_beranda->save();

        return response()->json(['success' => 'Berhasil menghapus']);
    }

    public function store_section_5(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
        } else {
            $beranda = new LandingPageBeranda;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $beranda->section_5 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 5');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_6(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
        } else {
            $beranda = new LandingPageBeranda;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $beranda->section_6 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 6');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_7(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'tautan' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();

        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $request->tautan, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $request->tautan, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $url = 'https://www.youtube.com/embed/' . $youtube_id ;

        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
            if($cek->section_7)
            {
                $get_section_7 = json_decode($beranda->section_7, true);

                if($request->gambar)
                {
                    $gambarName = $get_section_7['gambar'];
                    File::delete(public_path('images/landing-page/beranda/'.$gambarName));

                    $gambarExtension = $request->gambar->extension();
                    $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                    $gambar = Image::make($request->gambar);
                    $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                    $gambar->save($gambarSize, 100);
                } else {
                    $gambarName = $get_section_7['gambar'];
                }

                if($get_section_7['konten'] != '')
                {
                    $konten = $get_section_7['konten'];
                } else {
                    $konten = '';
                }
            } else {

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
                $gambar->save($gambarSize, 100);

                $konten = '';
            }

        } else {
            $beranda = new LandingPageBeranda;
            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/landing-page/beranda/'.$gambarName);
            $gambar->save($gambarSize, 100);

            $konten = '';
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tautan' => $url,
            'gambar' => $gambarName,
            'konten' => $konten
        ];

        $beranda->section_7 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 7');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_8(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
        } else {
            $beranda = new LandingPageBeranda;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $beranda->section_8 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 8');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_9(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
        } else {
            $beranda = new LandingPageBeranda;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $beranda->section_9 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 9');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }

    public function store_section_10(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.landing-page.beranda.index');
        }

        $cek = LandingPageBeranda::first();
        if($cek)
        {
            $beranda = LandingPageBeranda::find($cek->id);
        } else {
            $beranda = new LandingPageBeranda;
        }

        $array = [
            'sub_judul' => $request->sub_judul,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ];

        $beranda->section_10 = json_encode($array);
        $beranda->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section 10');
        return redirect()->route('razen-holiday.landing-page.beranda.index');
    }
}
