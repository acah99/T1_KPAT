@extends('layouts.index')

@section('content')
<div class="container">
    <h1>Daftar Matakuliah</h1>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Matakuliah</a>
    <table class="table mt-3">
        @csrf
        <thead>
            <tr>
                <th>Nama</th>
                <th>Semester</th>
                <th>SKS Teori</th>
                <th>SKS Praktikum</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matakuliahs as $matakuliah)
            <tr>
                <td>{{ $matakuliah->nama }}</td>
                <td>{{ $matakuliah->semester }}</td>
                <td>{{ $matakuliah->sks_teori }}</td>
                <td>{{ $matakuliah->sks_praktikum }}</td>
                <td>{{ $matakuliah->jurusan }}</td>
                <td>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
