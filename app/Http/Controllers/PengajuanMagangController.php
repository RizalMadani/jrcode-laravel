<?php

namespace App\Http\Controllers;

use App\Mail\KonfirmasiEmail;
use App\Models\PengajuanMagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PengajuanMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getDdata = pengajuanMagang::where('status', 0)->get();
        $data = [
            "title" => "Pengajuan Magang",
            "url" => url('/assets'),
            "data" => $getDdata,
        ];

        return view('admin.tempat-magang.lowongan.pengajuan-magang.index', $data);
    }

    public function ubahStatus(Request $request, PengajuanMagang $pengajuanMagang)
    {
        $find = PengajuanMagang::where('id', $pengajuanMagang->id);
        $find->update([
            'status' => $request->status,
        ]);

        $peserta = $find->first()->peserta;

        Mail::to($peserta->email)->send(new KonfirmasiEmail([
            'nama_peserta' => $peserta->nama,
            'status'       => $request->status,
        ]));

        return back()->with('success', 'Status pengajuan magang telah di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PengajuanMagang  $pengajuanMagang
     * @return \Illuminate\Http\Response
     */
    public function show(PengajuanMagang $pengajuanMagang)
    {
        $data = [
            "title" => "Pengajuan Magang",
            "url" => url('/assets'),
            "pengajuanMagang" => $pengajuanMagang,
        ];

        return view('admin.tempat-magang.lowongan.pengajuan-magang.show', $data);
    }

}
