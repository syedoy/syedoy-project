@extends('admin.layouts.main')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian Kiri: Foto Pembina -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <!-- Jika Pembina punya foto -->
                        <img src="{{ asset('images/' . $siswa->foto_siswa) }}" alt="Foto Profil"
                            class="img-fluid rounded-circle" style="max-width: 200px;">
                        <h3 class="mt-3" style="font-size: 20px;">{{ $siswa->nama }}</h3>

                    </div>
                </div>
            </div>

            <!-- Bagian Kanan: Detail Eskul -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Nomor Induk Siswa:</th>
                                    <td>{{ $siswa->nis }}</td>
                                </tr>
                                <tr>
                                    <th>Kelas :</th>
                                    <td>{{ $siswa->kelas }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin:</th>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat:</th>
                                    <td>{{ $siswa->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir:</th>
                                    <td>{{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d M Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Ekstrakurikuler:</th>
                                    <td>{{ $siswa->eskul->nama_eskul ?? 'Tidak ada eskul' }}</td>
                                </tr>
                                <tr>
                                    <th>Pembina:</th>
                                    <td>{{ $siswa->eskul->pembina->nama ?? 'Tidak ada pembina' }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('admin.siswa.index') }}" class="btn btn-success"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                            Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
