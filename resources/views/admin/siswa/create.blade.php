<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Siswa | SMK LABOR PKU </title>
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
                    <h2>Tambah Data Siswa</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form action="{{ route('admin.siswa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Nama Siswa -->
                            <div class="form-group">
                                <label for="nama">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>

                            <!-- NIS -->
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input type="text" name="nis" class="form-control" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" value="123456" readonly>
                            </div>

                            <!-- Kelas -->
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="text" name="kelas" class="form-control" required>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <!-- Alamat -->
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

                            <!-- Tanggal Lahir -->
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" required>
                            </div>

                            <!-- Eskul (Dropdown) -->
                            <div class="form-group">
                                <label for="eskul_id">Eskul</label>
                                <select name="eskul_id" id="eskul_id"
                                    class="form-control @error('eskul_id') is-invalid @enderror">
                                    <option value="">-- Pilih Eskul --</option>
                                    @foreach ($eskuls as $eskul)
                                        <option value="{{ $eskul->id }}"
                                            {{ old('eskul_id') == $eskul->id ? 'selected' : '' }}>
                                            {{ $eskul->nama_eskul }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('eskul_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>




                            <!-- Foto Siswa -->
                            <div class="form-group">
                                <label for="foto_siswa">Foto Siswa (Optional)</label>
                                <input type="file" name="foto_siswa" class="form-control">
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mb-4">
                                <a href="{{ route('admin.siswa.index') }}" class="btn btn-success"><svg
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
                                    Tambah Siswa</button>
                            </div>
                        </form>

                        <!-- Script untuk otomatisasi pengisian Pembina -->


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
