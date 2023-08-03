@extends('layouts.index')

@section('content')
<div class="container">
    <h1>Tambah Data Matakuliah</h1>
    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="semester">Semester</label>
            <input type="number" class="form-control" id="semester" name="semester" required>
        </div>
        <div class="form-group">
            <label for="sks_teori">SKS Teori</label>
            <input type="number" class="form-control" id="sks_teori" name="sks_teori" required>
        </div>
        <div class="form-group">
            <label for="sks_praktikum">SKS Praktikum</label>
            <input type="number" class="form-control" id="sks_praktikum" name="sks_praktikum" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
