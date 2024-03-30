@extends('layout.app') @section('content')
<div class="container">
    <h1>Halaman Student</h1>

    <a href="{{ route('create') }}" class="btn btn-primary">Tambah Siswa</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $student->name }}</td>
                <td>{{ $student->jenis_kelamin }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->asal_sekolah }}</td>
                <td>
                    <a
                        href="{{ route('edit', $student->id) }}"
                        class="btn btn-warning me-2"
                        >Edit</a
                    >
                    <a
                        href="{{ '/delete/' . $student->id }}"
                        class="btn btn-danger"
                        >Hapus</a
                    >
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
