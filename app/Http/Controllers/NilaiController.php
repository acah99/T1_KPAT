<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::all();
        return view('nilai.index', compact('nilais'));
    }

    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = Matakuliah::all();
        return view('nilai.create', compact('mahasiswas', 'matakuliahs'));
    }

    public function store(Request $request)
    {
       Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil ditambahkan');
    }

}
