@extends('layout.app') @section('content')
<div class="container">
    <h1>Halaman Edit Siswa</h1>

    <div class="col-lg-12">
        <form action="{{ route('update', $student->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" value="{{ $student->name }}" class="form-control" id="name" name="name" />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ $student->email }}" class="form-control" id="email" name="email" />
            </div>
            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" value="{{ $student->asal_sekolah }}" class="form-control" id="asal_sekolah" name="asal_sekolah" />
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ $student->address }}</textarea>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label
                    ">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                    <option disabled>Pilih Jenis Kelamin</option>
                    <option {{ ($student->jenis_kelamin == 'L') ? 'selected' : '' }} value="L">Laki-laki</option>
                    <option {{ ($student->jenis_kelamin == 'P') ? 'selected' : '' }} value="P">Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@endsection
