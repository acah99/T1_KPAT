@extends('layouts.index')

@section('content')
<div class="container">
    <h1>Daftar Nilai</h1>
    <a href="{{ route('nilai.create') }}" class="btn btn-primary">Tambah Nilai</a>
    <table class="table mt-3">
        @csrf
        <thead>
            <tr>
                <th>ID Mahasiswa</th>
                <th>ID Matakuliah</th>
                <th>Nilai Harian</th>
                <th>Nilai UTS</th>
                <th>Nilai Akhir</th>
                <th>Grade</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $nilai)
            <tr>
                <td>{{ $nilai->mahasiswa_id }}</td>
                <td>{{ $nilai->matakuliah_id }}</td>
                <td>{{ $nilai->nilai_harian }}</td>
                <td>{{ $nilai->nilai_uts }}</td>
                <td>{{ $nilai->nilai_akhir }}</td>
                <td>{{ $nilai->grade }}</td>
                <td>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
