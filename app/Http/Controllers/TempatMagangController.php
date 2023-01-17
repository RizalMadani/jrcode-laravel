<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\TempatMagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TempatMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getDdata = TempatMagang::all();
        $data = [
            "title" => "Master Tempat Magang",
            "url" => url('/assets'),
            "data" => $getDdata,
        ];

        return view('admin.tempat-magang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tempat-magang.create', [
            "title" => "Create new Apprenticeship Place",
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
            "kode_perusahaan" => "required|max:20|unique:tempat_magang",
            "nama_perusahaan" => "required",
            "logo_perusahaan" => "required|image|file",
            "kota" => "required",
            "alamat" => "required",
            "nomor_telepon" => "required",
            "email_perusahaan" => "required|email",
        ]);

        $validate['logo_perusahaan'] = $request->file('logo_perusahaan')->store('tempat-magang-images');

        TempatMagang::create($validate);
        return redirect('/dashboard/masterTempatMagang')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TempatMagang  $tempatMagang
     * @return \Illuminate\Http\Response
     */
    public function show(TempatMagang $tempatMagang)
    {
        $data = $tempatMagang;

        return view('admin.tempat-magang.show', [
            "title" => "Lihat Tempat Magang",
            "url" => url('/assets'),
            "data" => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TempatMagang  $tempatMagang
     * @return \Illuminate\Http\Response
     */
    public function edit(TempatMagang $tempatMagang)
    {

        return view('admin.tempat-magang.edit', [
            "title" => "Edit Tempat Magang",
            "url" => url('/assets'),
            "data" => $tempatMagang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TempatMagang  $tempatMagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TempatMagang $tempatMagang)
    {
        $update = [
            "nama_perusahaan" => "required",
            "logo_perusahaan" => "image|file",
            "kota" => "required",
            "alamat" => "required",
            "nomor_telepon" => "required",
            "email_perusahaan" => "required|email",
        ];
        if ($request->kode_perusahaan != $tempatMagang->kode_perusahaan) {
            $update["kode_perusahaan"] = "required|max:20|unique:tempat_magang";
        }
        $validate = $request->validate($update);

        if ($request->file('logo_perusahaan')) {
            Storage::delete($tempatMagang->logo_perusahaan);
            $validate['logo_perusahaan'] = $request->file('logo_perusahaan')->store('tempat-magang-images');
        }

        TempatMagang::where('id', $tempatMagang->id)->update($validate);

        return redirect('/dashboard/masterTempatMagang')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TempatMagang  $tempatMagang
     * @return \Illuminate\Http\Response
     */
    public function destroy(TempatMagang $tempatMagang)
    {
        TempatMagang::destroy($tempatMagang->id);

        Storage::delete($tempatMagang->logo_perusahaan);

        return redirect('/dashboard/masterTempatMagang')->with('success', 'Data berhasil dihapus');
    }

    //Peserta

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tempat_magang()
    {
        $getDdata = TempatMagang::all();

        

        // $ct_lowongan = Lowongan::where('tempat_magang_id', $tempatMagang->id)->get();

        $data = [
            "title" => "Tempat Magang",
            "url" => url('/assets'),
            "data" => $getDdata,
        ];

        return view('peserta.tempat-magang.index', $data);
    }
}