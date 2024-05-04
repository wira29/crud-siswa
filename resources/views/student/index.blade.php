@extends('layout.app') @section('content')
<div class="container">
    <h1>Halaman Student</h1>

    <a href="{{ route('create') }}" class="btn btn-primary">Tambah Siswa</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
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
                <td>
                    {{ ($student->jurusan != null) ? $student->jurusan->nama : "Tidak ada jurusan" }}
                </td>
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
<!-- <script>
   /**
 * TODO:
 * 1. Buatlah fungsi bernama minimal dengan ketentuan berikut:
 *    - Menerima dua buah argumen number, a dan b.
 *    - Mengembalikan nilai terkecil antara a atau b.
 *    - Bila nilai keduanya sama, maka kembalikan dengan nilai a
 *
 *    contoh:
 *    minimal(1, 4) // output: 1
 *    minimal(3, 2) // output: 2
 *    minimal(3, 3) // output: 3
 *
 * 2. Buatlah sebuah function bernama findIndex yang menerima dua parameter, yaitu array dan number.
 *    Fungsi tersebut harus mengembalikan index dari angka yang sesuai pada array tersebut.
 *    Jika angka tidak ditemukan, maka kembalikan nilai -1.
 *
 *    contoh:
 *    findIndex([1, 2, 3, 4, 5], 3) // output: 2
 *    findIndex([1, 2, 3, 4, 5], 6) // output: -1
 *    findIndex([1, 2, 3, 4, 5], 5) // output: 4
 */

// Tulis kode di bawah ini
function minimal(a, b) {
    if (a === b) {
        return a;
    } else if (a < b) {
        return a;
    } else {
        return b;
    }
}

console.log(minimal(1, 4)); // output: 1
console.log(minimal(3, 2)); // output: 2
console.log(minimal(3, 3)); // output: 3

function findIndex(arr, num) {
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] === num) {
            return i;
        }
    }
    return -1;
}
console.log(findIndex([1, 2, 3, 4, 5], 3)); // output: 2
console.log(findIndex([1, 2, 3, 4, 5], 6)); // output: -1
console.log(findIndex([1, 2, 3, 4, 5], 5)); // output: 4

function calculate(v) {
    return v < 2 ? v : (calculate(v - 1) + calculate(v - 2));
}

console.log(calculate(3))

</script> -->
@endsection
