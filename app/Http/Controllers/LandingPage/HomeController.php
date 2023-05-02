<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guide;
use Validator;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('landing-page.index');
    }

    public function perusahaan()
    {
        $guides = Guide::latest()->get();
        return view('landing-page.perusahaan',[
            'guides' => $guides
        ]);
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

    public function kontak_kami(Request $request)
    {
        $errors = Validator::make($request->all(), [
            'nama' => 'required | max:255',
            'email' => 'required | max:255',
            'no_hp' => 'required | max:255',
            'subjek' => 'required | max:255',
            'message' => 'required | max:255',
        ]);

        if($errors -> fails())
        {
            return response()->json(['errors' => $errors->errors()->all()]);
        }

        $data = [
            'email' => $request->email,
            'subjek' => $request->subjek,
            'body' => $request->message
        ];

        Mail::send('emails.kontak-kami', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('skadi1268@gmail.com', 'Kristoforus Fasco');
            $message->subject($data['subjek']);
        });

        return response()->json(['success' => 'Berhasil']);
    }
}
