<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $getDdata = User::get()->all();
        $data = [
            "title" => "Master Admin",
            "url" => url('/assets'),
            "data" => $getDdata,
        ];

        return view('admin.admin.index', $data);
    }

    public function create()
    {
        return view('admin.admin.create', [
            "title" => "Create new Admin",
            "url" => url('/assets'),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validate = $request->validate([
            "nama" => "required|max:50",
            "username" => "required|max:50",
            "password" => "required|max:50",
            "role" => "required",
            "kelamin" => "required",
            "email" => "email|unique:users",
            "no_telepon" => "required|max:20",
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);
        return redirect('/dashboard/masterAdmin')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = User::find($id);

        return view('admin.admin.update', [
            "title" => "Edit Admin",
            "url" => url('/assets'),
            "data" => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "nama" => "required|max:50",
            "username" => "required|max:50",
            "password" => "required|max:50",
            "role" => "required",
            "kelamin" => "required",
            "email" => "required",
            "no_telepon" => "required|max:20",
        ]);
        // dd($validate);
        $validate['password'] = Hash::make($validate['password']);

        $find = User::where('id', $id);
        $find->update($validate);

        return redirect('/dashboard/masterAdmin')->with('success', 'Data berhasil di update');
    }

    public function destroy($id)
    {
        $find = User::find($id);
        $find->delete();

        return redirect('/dashboard/masterAdmin')->with('success', 'Data berhasil dihapus');
    }

    public function register()
    {
        // $validate = $request->validate([
        //     "nama" => "required|max:50",
        //     "username" => "required|max:50",
        //     "password" => "required|max:50",
        //     "role" => "required",
        //     "kelamin" => "required",
        //     "email" => "required",
        //     "no_telepon" => "required|max:20"
        // ]);
        return view('register', [
            "title" => "Register Peserta",
            "url" => url('/asset'),
        ]);
    }

    public function registerStore(Request $request)
    {
        $validate = $request->validate([
            "nama" => "required|max:50",
            "username" => "required|max:50",
            "password" => "required|max:50",
            "role" => "required",
            "kelamin" => "required",
            "email" => "required",
            "no_telepon" => "required|max:20",
        ]);

        $validate['password'] = Hash::make($validate['password']);
        User::create($validate);

        return redirect('/auth/login')->with('success', 'Registrasi Berhasil');
    }
}