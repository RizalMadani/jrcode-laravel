<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\TempatMagang;
use Illuminate\Http\Request;

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
}