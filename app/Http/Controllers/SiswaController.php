<?php

namespace App\Http\Controllers;


use App\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.siswa', ['siswa' => $siswa]);
    }

    //create
    public function store(Request $request)
    {

        Siswa::insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'email' => $request->email,

        ]);
        return redirect()->to('siswa');
    }
    public function delete(Siswa $siswa)
    {
        $siswa->delete();
        session()->flash('suscces', "delete");
        return redirect()->to('siswa');
    }

    public function show(Siswa $siswa)
    {
        return view("siswa.show", compact("siswa"));
    }
}
