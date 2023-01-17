<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function index()
    {
        $getDdata = Portofolio::get()->all();
        $data = [
            "title" => "Master Portofolio",
            "url" => url('/assets'),
            "data" => $getDdata,
        ];

        return view('admin.portofolio.index', $data);
    }

    public function create()
    {
        return view('admin.portofolio.create', [
            "title" => "Create new Portofolio",
            "url" => url('/assets'),
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "title" => "required|max:20",
            "link" => "required",
            "image" => "required|image|file|max:2048",
            "body" => "required",
        ]);

        $validate['image'] = $request->file('image')->store('portofolio-images');
        $validate['body'] = strip_tags($validate["body"]);

        Portofolio::create($validate);
        return redirect('/dashboard/masterPortofolio')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Portofolio::find($id);

        return view('admin.portofolio.update', [
            "title" => "Edit Portofolio",
            "url" => url('/assets'),
            "data" => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $validate = $request->validate([
            "title" => "required|max:50",
            "link" => "required|max:100",
            "image" => "image|file|max:2048",
            "body" => "required",
        ]);

        if ($request->file('image')) {
            Storage::delete($request->oldImage);
            $validate['image'] = $request->file('image')->store('portofolio-images');
        }

        $validate['body'] = strip_tags($validate["body"]);

        $find = Portofolio::where('id', $id);
        $find->update($validate);

        return redirect('/dashboard/masterPortofolio')->with('success', 'Data berhasil di update');
    }

    public function destroy($id)
    {
        $find = Portofolio::find($id);
        Storage::delete($find->image);
        $find->delete();

        return redirect('/dashboard/masterPortofolio')->with('success', 'Data berhasil dihapus');
    }

    public function viewAll()
    {
        $data = Portofolio::get()->all();
        return view('portofolio.portofolio', [
            "title" => "Portofolio",
            "url" => url('/assets'),
            "data" => $data,
        ]);
    }
}