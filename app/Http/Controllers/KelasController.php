<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::latest()->get();
        return view('admin.kelas.index', [
            "title" => "Master Kelas",
            "url" => url('/assets'),
            "data" => $data
        ]);
    }

    public function create()
    {
        return view('admin.kelas.create', [
            "title" => "Create Kelas",
            "url" => url('/assets'),
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate(['title' => 'required']);
        Kelas::create($validate);

        return redirect('/dashboard/masterKelas')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Kelas::find($id);
        return view('admin.kelas.update', [
            "title" => "Master Kelas",
            "url" => url('/assets'),
            "data" => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate(['title' => 'required']);
        Kelas::find($id)->update($validate);

        return redirect('/dashboard/masterKelas')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $find = Kelas::find($id);
        $find->delete();

        return redirect('/dashboard/masterKelas')->with('success', 'Data berhasil dihapus');
    }


    public function indexJadwal()
    {
        $data = Jadwal::latest()->get();
        return view('admin.jadwal.index', [
            "title" => "Master Jadwal Kelas",
            "url" => url('/assets'),
            "data" => $data
        ]);
    }

    public function createJadwal()
    {
        $data = Kelas::get();
        return view('admin.jadwal.create', [
            "title" => "Create Jadwal",
            "url" => url('/assets'),
            "data" => $data
        ]);
    }

    public function storeJadwal(Request $request)
    {
        $validate = $request->validate([
            "id_kelas" => "required",
            "jadwal" => "required"
        ]);

        Jadwal::create($validate);
        return redirect('/dashboard/masterJadwal')->with('success', 'Data berhasil ditambahkan');
    }

    public function editJadwal($id)
    {
        $data = Jadwal::find($id);

        return view('admin.jadwal.update', [
            "title" => "Update Jadwal",
            "url" => url('/assets'),
            "data" => $data
        ]);
    }

    public function updateJadwal(Request $request, $id)
    {
        // dd($request);
        $validate = $request->validate([
            "id_kelas" => "required",
            "jadwal" => "required"
        ]);
        // dd($validate);
        $find = Jadwal::where('id', $id);
        $find->update($validate);

        return redirect('/dashboard/masterJadwal')->with('success', 'Data berhasil diupdate');
    }
}
