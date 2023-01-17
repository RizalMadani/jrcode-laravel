<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\PengajuanMagang;
use App\Models\TempatMagang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TempatMagang $tempatMagang)
    {
        $getDdata = Lowongan::where('tempat_magang_id', $tempatMagang->id)->get();
        $data = [
            "title" => "Master Lowongan",
            "url" => url('/assets'),
            "data" => $getDdata,
            "tempatMagang" => $tempatMagang,
        ];

        return view('admin.tempat-magang.lowongan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TempatMagang $tempatMagang)
    {
        return view('admin.tempat-magang.lowongan.create', [
            "title" => "Create new Opening",
            "tempatMagang" => $tempatMagang,
            "url" => url('/assets'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "tempat_magang_id" => "",
            "judul_lowongan" => "required",
            "deskripsi" => "required",
            "tanggal_dibuka" => "required",
            "tanggal_ditutup" => "required",
        ]);
        Lowongan::create($validate);
        return redirect('/dashboard/masterLowongan/' . $request->tempat_magang_id)->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function show(Lowongan $lowongan)
    {

        return view('admin.tempat-magang.lowongan.show', [
            "title" => "Lihat Lowongan",
            "url" => url('/assets'),
            "data" => $lowongan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lowongan $lowongan)
    {
        return view('admin.tempat-magang.lowongan.edit', [
            "title" => "Edit Lowongan",
            "url" => url('/assets'),
            "data" => $lowongan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lowongan $lowongan)
    {
        $validate = $request->validate([
            "judul_lowongan" => "required",
            "deskripsi" => "required",
            "tanggal_dibuka" => "required",
            "tanggal_ditutup" => "required",
        ]);

        Lowongan::where('id', $lowongan->id)->update($validate);

        return redirect('/dashboard/masterLowongan/' . $lowongan->tempat_magang_id)->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lowongan $lowongan)
    {
        Lowongan::destroy($lowongan->id);

        return back()->with('success', 'Data berhasil dihapus');
    }

    //Peserta

    public function lowongan(TempatMagang $tempatMagang)
    {
        $getDdata = Lowongan::where('tempat_magang_id', $tempatMagang->id)->get();
        $data = [
            "title" => "Master Lowongan",
            "url" => url('/assets'),
            "data" => $getDdata,
            "tempatMagang" => $tempatMagang,
        ];

        return view('peserta.tempat-magang.lowongan.index', $data);
    }

    public function pengajuan_lowongan(Request $request)
    {

        // dd(date("Y-m-d"));

        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
            'porto' => 'mimes:pdf|max:2048',
        ]);

        // $fileName = time() . '.' . $request->file->extension();

        //untuk CV
        $file_cv = $request->file('cv');
        // dd($file->extension());
        $name_cv = Str::random(10);
        $full_name_cv = $name_cv . '.' . $file_cv->extension();
        $file_cv->move(public_path('assets/img/cv'), $full_name_cv);

        $full_name_porto = "";
        if ($request->hasFile('porto')) {
            //untuk porto
            $file_porto = $request->file('porto');
            // dd($file->extension());
            $name_porto = Str::random(10);
            $full_name_porto = $name_porto . '.' . $file_porto->extension();
            $file_porto->move(public_path('assets/img/porto'), $full_name_porto);
        }
        /*
        Write Code Here for
        Store $fileName name in DATABASE from HERE
         */

        $id_user = $request->input('id_peserta');
        $id_lowongan = $request->input('id_lowongan');
        $date = date("Y-m-d");

        PengajuanMagang::create([
            'id_peserta' => $id_user,
            'id_lowongan' => $id_lowongan,
            'cv' => $full_name_cv,
            'portofolio' => $full_name_porto,
            'tanggal_pengajuan' => $date,
        ]);

        return back()
            ->with('success', 'You have successfully upload file.');

    }

    public function history_pengajuan_lowongan()
    {

        $getDdata = PengajuanMagang::get_all_content();

        // dd($getDdata);

        $data = [
            "title" => "History Lowongan",
            "url" => url('/assets'),
            "data" => $getDdata,
        ];

        return view('peserta.tempat-magang.lowongan.history', $data);

    }
}