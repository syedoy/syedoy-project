@extends('admin.layouts.main')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian Kiri: Foto Pembina -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="title-center">Foto Pembina</h3>
                        <!-- Jika Pembina punya foto -->
                        @if ($eskul->pembina && $eskul->pembina->foto)
                            <img src="{{ asset('images/' . $eskul->pembina->foto) }}" class="img-fluid rounded-circle mb-3"
                                alt="Foto Pembina" style="max-width: 200px;">
                        @else
                            <img src="{{ asset('images/default.png') }}" class="img-fluid rounded-circle mb-3"
                                alt="Default Foto" style="max-width: 200px;">
                        @endif
                        <a href="{{ route('admin.eskul.index') }}" class="btn btn-success"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                            Kembali</a>
                    </div>
                </div>
            </div>

            <!-- Bagian Kanan: Detail Eskul -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <h3>Detail Eskul</h3>
                                <tr>
                                    <th>Nama ekskul:</th>
                                    <td>{{ $eskul->nama_eskul }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan:</th>
                                    <td>{{ $eskul->deskripsi }}</td> 
                                </tr>
                                <tr>
                                    <th>Pembina:</th>
                                    <td>{{ $eskul->pembina ? $eskul->pembina->nama : 'pembina baru' }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Menampilkan Foto Kegiatan -->
                        @if ($eskul->foto_kegiatan)
                            <div class="mt-4">
                                <h5>Foto Kegiatan:</h5>
                                <img src="{{ asset('images/' . $eskul->foto_kegiatan) }}" class="img-fluid"
                                    alt="Foto Kegiatan Eskul" style="max-width: 150px;">
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
