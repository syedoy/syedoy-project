<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Eskul | SMK LABOR PKU </title>
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
        #eskul {
            background: #f4f7fd;
            height: auto;
        }

        .eskul {
            position: relative;
            background: #ffff;
            border: 2px solid #ffff;
            box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
            padding-top: 20px;
            padding-bottom: 80px;
        }

        .title-eskul {
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
    <section id="eskul">
        <div class="container-lg">
            <div class="eskul align-self-center">
                <div class="title-eskul text-center">
                    <h2>Tambah Data Eskul</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form action="{{ route('admin.eskul.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Informasi Eskul -->
                            <div class="form-floating mb-2">
                                <label for="floatingInput">Nama Eskul</label>

                                <input type="text" name="nama_eskul"
                                    class="form-control @error('nama_eskul') is-invalid @enderror" id="floatingInput"
                                    placeholder="" required>
                                @error('nama_eskul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="exampleFormControlTextarea1" name="deskripsi"
                                    class="form-label @error('deskripsi') is-invalid @enderror">Keterangan</label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="4"></textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="inputGroupFile04">Foto Kegiatan</label>
                            <div class="input-group mb-4">

                                <input type="file" name="foto_kegiatan"
                                    class="form-control @error('foto_kegiatan') is-invalid @enderror"
                                    id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                    required>

                                @error('foto_kegiatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pembina_id">Pembina</label>
                                <select name="pembina_id" id="pembina_id"
                                    class="form-control @error('pembina_id') is-invalid @enderror">
                                    <option value="">-- Pilih Pembina --</option>
                                    @foreach ($guru as $g)
                                        <option value="{{ $g->id }}"
                                            {{ old('pembina_id') == $g->id ? 'selected' : '' }}>{{ $g->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('pembina_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mb-4">
                                <a href="{{ route('admin.eskul.index') }}" class="btn btn-success"><svg
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
                                    Tambah Eskul</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Script to preview uploaded file
        const input = document.getElementById('inputGroupFile04');
        const previewPhoto = () => {
            const file = input.files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('file-preview');
                fileReader.onload = function(event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }
        input.addEventListener("change", previewPhoto);

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

</body>

</html>
