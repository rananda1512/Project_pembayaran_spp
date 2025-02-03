<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = Kelas::paginate(5);
        return view("kelas.index", ["kelas" => $kelas]);
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $attr = $this->validateRequest();
        $attr = $request->all();
        Kelas::create($attr);
        session()->flash("sukses", "berhasil ditambah");
        return redirect('kelas');
    }

    public function validateRequest()
    {
        return request()->validate([
            'nama_kelas' => 'required|min:3|max:10',
            'jurusan' =>  'required|min:2|max:4'
        ]);
    }


    public function show(Kelas $kelas)
    {
        return view("kelas/show", compact('kelas'));
    }



    //update
    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Kelas $kelas)
    {
        $attr = $this->validateRequest();
        $kelas->update($attr);
        session()->flash('suscces', "that post update");
        return redirect('kelas');
    }


    //delete
    public function delete(Kelas $kelas, Request $request)
    {
        $attr = $request->id;
        $kelas->delete($attr);
        session()->flash("sukses", "berhasil dihapus");
        return back();
    }
}
