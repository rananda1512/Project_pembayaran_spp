<?php

namespace App\Http\Controllers;

use App\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    //
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('sekolah.index', compact('sekolah'));
    }

    public function create()
    {
        return view('sekolah.create');
    }

    public function store(Request $request)
    {
        $attr = $this->validateRequest();
        $attr = $request->all();
        Sekolah::create($attr);
        session()->flash("sukses", "berhasil ditambah");
        return redirect('sekolah');
    }

    public function edit(Sekolah $sekolah)
    {
        return view("sekolah.edit", compact("sekolah"));
    }

    public function update(Sekolah $sekolah)
    {
        $attr = $this->validateRequest();
        $sekolah->update($attr);
        session()->flash('suscces', "that post update");
        return redirect()->to('sekolah');
    }

    public function validateRequest()
    {
        return request()->validate([
            'nama_sekolah' => 'required|min:3',
        ]);
    }


    public function delete(Sekolah $sekolah, Request $request)
    {
        $attr = $request->id;
        $sekolah->delete($attr);
        session()->flash("suscces", "berhasil dihapus");
        return back();
    }
}
