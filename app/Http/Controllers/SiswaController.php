<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller 
{
    public function create()
    {
    return view('siswa.create');
    }
    public function index() 
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric',
    ]);

        \App\Models\siswa::create($request->all());

        return redirect()->route('siswa.index');
    }

    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'nilai' => 'required|numeric',
        ]);

        $siswa = siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id) 
    {
        siswa::findOrFail($id)->delete();
        return redirect()->route('siswa.index');
    }
}