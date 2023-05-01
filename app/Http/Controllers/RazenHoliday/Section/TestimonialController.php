<?php

namespace App\Http\Controllers\RazenHoliday\Section;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Validator;
use DataTables;
use Carbon\Carbon;
use Auth;
use App\Models\SectionTestimonial;
use App\Models\Testimonial as Testimoni;

class TestimonialController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $data = Testimoni::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function($data){
                    $button_show = '<button type="button" name="detail" id="'.$data->id.'" class="detail btn btn-icon waves-effect btn-info" title="Detail Data"><i class="fas fa-eye"></i></button>';
                    $button_edit = '<button type="button" name="edit" id="'.$data->id.'"
                    class="edit btn btn-icon waves-effect btn-warning" title="Edit Data"><i class="fas fa-edit"></i></button>';
                    $button_delete = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-icon waves-effect btn-danger" title="Delete Data"><i class="fas fa-trash"></i></button>';
                    $button = $button_show . ' ' . $button_edit . ' ' . $button_delete;
                    return $button;
                })
                ->editColumn('foto', function($data) {
                    return '<img src="'.asset('images/testimoni/'.$data->foto).'" style="height:5rem;">';
                })
                ->editColumn('testimoni', function($data) {
                    return strip_tags(substr($data->testimoni,0, 20)) . '...';
                })
                ->rawColumns(['aksi', 'foto'])
                ->make(true);
        }

        $section_testimonial = SectionTestimonial::first();
        return view('razen-holiday.section.testimonial.index', [
            'section_testimonial' => $section_testimonial
        ]);
    }

    public function section_store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'sub_judul' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        if($errors -> fails())
        {
            Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
            return redirect()->route('razen-holiday.section.testimonial.index');
        }

        $cek = SectionTestimonial::first();

        if($cek)
        {
            $errors = Validator::make($request->all(), [
                'gambar_background' => 'mimes:png,jpg,jpeg',
                'gambar' => 'mimes:png,jpg,jpeg'
            ]);

            if($errors -> fails())
            {
                Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
                return redirect()->route('razen-holiday.section.testimonial.index');
            }

            $section_testimonial = SectionTestimonial::find($cek->id);
            if($request->gambar_background)
            {
                $gambarBackgroundName = $section_testimonial->gambar_background;
                File::delete(public_path('images/section/testimonial/'.$gambarBackgroundName));

                $gambarBackgroundExtension = $request->gambar_background->extension();
                $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
                $gambarBackground = Image::make($request->gambar_background);
                $gambarBackgroundSize = public_path('images/section/testimonial/'.$gambarBackgroundName);
                $gambarBackground->save($gambarBackgroundSize, 100);
            } else {
                $gambarBackgroundName = $section_testimonial->gambar_background;
            }

            if ($request->gambar) {
                $gambarName = $section_testimonial->gambar;
                File::delete(public_path('images/section/testimonial/'.$gambarName));

                $gambarExtension = $request->gambar->extension();
                $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
                $gambar = Image::make($request->gambar);
                $gambarSize = public_path('images/section/testimonial/'.$gambarName);
                $gambar->save($gambarSize, 100);
            } else {
                $gambarName = $section_testimonial->gambar;
            }
        } else {
            $errors = Validator::make($request->all(), [
                'gambar_background' => 'required | mimes:png,jpg,jpeg',
                'gambar' => 'required | mimes:png,jpg,jpeg'
            ]);

            if($errors -> fails())
            {
                Alert::error('Gagal Menyimpan!', $errors->errors()->all()[0]);
                return redirect()->route('razen-holiday.section.testimonial.index');
            }

            $section_testimonial = new SectionTestimonial;

            $gambarBackgroundExtension = $request->gambar_background->extension();
            $gambarBackgroundName =  uniqid().'-'.date("ymd").'.'.$gambarBackgroundExtension;
            $gambarBackground = Image::make($request->gambar_background);
            $gambarBackgroundSize = public_path('images/section/testimonial/'.$gambarBackgroundName);
            $gambarBackground->save($gambarBackgroundSize, 100);

            $gambarExtension = $request->gambar->extension();
            $gambarName =  uniqid().'-'.date("ymd").'.'.$gambarExtension;
            $gambar = Image::make($request->gambar);
            $gambarSize = public_path('images/section/testimonial/'.$gambarName);
            $gambar->save($gambarSize, 100);
        }

        $section_testimonial->sub_judul = $request->sub_judul;
        $section_testimonial->judul = $request->judul;
        $section_testimonial->deskripsi = $request->deskripsi;
        $section_testimonial->gambar_background = $gambarBackgroundName;
        $section_testimonial->gambar = $gambarName;
        $section_testimonial->save();

        Alert::success('Berhasil', 'Berhasil Merubah Tampilan Section Testimonial');
        return redirect()->route('razen-holiday.section.testimonial.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'jabatan' => 'required | max:255',
            'foto' => 'required | mimes:png,jpg,jpeg,webp',
            'testimoni' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $fotoExtension = $request->foto->extension();
        $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
        $foto = Image::make($request->foto);
        $fotoSize = public_path('images/testimoni/'.$fotoName);
        $foto->save($fotoSize, 60);

        $testimoni = new Testimoni;
        $testimoni->nama = $request->nama;
        $testimoni->jabatan = $request->jabatan;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->foto = $fotoName;
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['result' => Testimoni::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json(['result' => Testimoni::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'jabatan' => 'required | max:255',
            'testimoni' => 'required'
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $testimoni = Testimoni::find($request->hidden_id);
        $testimoni->nama = $request->nama;
        $testimoni->jabatan = $request->jabatan;
        $testimoni->testimoni = $request->testimoni;
        if($request->foto)
        {
            File::delete(public_path('images/testimoni/'.$testimoni->foto));

            $fotoExtension = $request->foto->extension();
            $fotoName =  uniqid().'-'.date("ymd").'.'.$fotoExtension;
            $foto = Image::make($request->foto);
            $fotoSize = public_path('images/testimoni/'.$fotoName);
            $foto->save($fotoSize, 60);

            $testimoni->foto = $fotoName;
        }
        $testimoni->save();

        return response()->json(['success' => 'Berhasil menambahkan Testimoni']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);

        File::delete(public_path('images/testimoni/'.$testimoni->foto));

        $testimoni->delete();
    }
}
