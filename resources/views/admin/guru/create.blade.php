<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Guru | SMK LABOR PKU </title>
    <link rel="icon" href="{{ url('login/images/logo.png') }}" type="image/x-icon" />

    <link
        href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/css/table.css') }}">
    <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('../css/login.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        #siswa {
            background: #f4f7fd;
        }

        .siswa {
            position: relative;
            background: #ffff;
            border: 2px solid #ffff;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            padding-top: 20px;
            padding-bottom: 80px;
            margin-left: 20%;
            margin-right: 20%;
        }

        .title-siswa {
            padding-bottom: 0.2rem;
        }
    </style>

</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section id="siswa">
        <div class="container-lg">
            <div class="siswa align-self-center">
                <div class="title-siswa text-center">
                    <h2>Tambah Data Guru</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form action="{{ route('admin.guru.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Informasi Siswa -->
                            <div class="form-floating mb-2">
                                <label for="nama">Nama Guru</label>
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                    placeholder="" required>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-2">
                                <label for="nip">Nomor Induk Pegawai</label>
                                <input type="number" name="nip"
                                    class="form-control @error('nip') is-invalid @enderror" id="nip"
                                    placeholder="" required>
                                @error('nip')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin"
                                    class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" rows="4"
                                    required></textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-2">
                                <label for="mata_pelajaran">Mata Pelajaran</label>
                                <input type="text" name="mata_pelajaran"
                                    class="form-control @error('mata_pelajaran') is-invalid @enderror"
                                    id="mata_pelajaran" placeholder="" required>
                                @error('mata_pelajaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <label for="inputGroupFile04">Foto Identitas</label>
                            <div class="input-group mb-4">

                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror" id="inputGroupFile04"
                                    aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>

                                @error('foto_kegiatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-2">
                                <label for="no_tlp">Nomor Handphone</label>
                                <input type="number" name="no_tlp"
                                    class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp"
                                    placeholder="" required>
                                @error('no_tlp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <a href="{{ route('admin.guru.index') }}" class="btn btn-success"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                    </svg>
                                    Kembali</a>
                                <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                                        viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                    </svg>
                                    Tambah Guru</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        @if ($message = Session::get('success'))
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "{{ $message }}",
            });
        @endif
        @if ($message = Session::get('failed'))
            Swal.fire({
                icon: "error",
                title: "Failed",
                text: "{{ $message }}",
            });
        @endif
    </script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
