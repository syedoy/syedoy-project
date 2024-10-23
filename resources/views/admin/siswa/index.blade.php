@extends('admin.layouts.main')
@section('navSiswa', 'active')

<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

<style>
    .ftco-section {
        padding-top: 0px !important;
        margin-top: 0px !important;
    }

    .pagetitle {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
    }


    .table {
        width: 100%;
        /* Atau ukuran sesuai kebutuhan */

        margin-bottom: 1rem;
        color: #212529;
        border: 1px solid #dee2e6;
        /* Border untuk tabel */
        border-collapse: collapse;
        /* Menghilangkan double border */
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border: 1px solid #dee2e6;
        /* Border untuk th dan td */
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 1px solid #dee2e6;
    }

    .table tbody+tbody {
        border-top: 1px solid #dee2e6;
    }

    .table .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55;
    }

    .table .table-dark {
        color: #fff;
        background-color: #343a40;
    }

    .table .table-dark th,
    .table .table-dark td,
    .table .table-dark thead th {
        border-color: #454d55;
    }

    .table .table-dark.table-bordered {
        border: 0;
    }
</style>


<body>
    @section('content')
        <div class="pagetitle">
            <h1>Data Siswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Siswa</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="table-wrapper" style="overflow-x: auto;">
                            <h2 class="pb-4 text-left font-bold font-up deep-purple-text">
                                <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                    </svg>
                                    Tambah Siswa </a>
                            </h2>
                            <table class="table table-striped" style=" table-layout: fixed;">
                                <thead>
                                    <tr>
                                        <th style="width: 5px;">No</th>
                                        <th style="width: 60px;">Nama</th>
                                        <th style="width: 70px;">Kelas</th>
                                        <th style="width: 80px;">Eskul</th>
                                        <th style="width: 80px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $index => $siswa)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->kelas }}</td>
                                            <td>{{ $siswa->eskul->nama_eskul ?? 'N/A' }}</td>
                                            <!-- Menampilkan nama eskul -->
                                            <td>
                                                <!-- Tombol aksi misalnya edit dan delete -->
                                                <a href="{{ route('admin.siswa.show', $siswa->id) }}"
                                                    class="btn btn-info btn-sm"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor"
                                                        class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                        <path
                                                            d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                    </svg></a>
                                                <a href="" class="btn btn-warning btn-sm"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg></a>
                                                <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                            <path
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                        </svg> </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-2">
                    <div class="d-flex align-items-center">
                        <div>
                            @if ($events->onFirstPage())
                                <button class="btn btn-secondary disabled">&laquo;</button>
                            @else
                                <a class="btn btn-secondary" href="{{ $events->previousPageUrl() }}"
                                    rel="prev">&laquo;</a>
                            @endif
                        </div>
                        <div>
                            @if ($events->hasMorePages())
                                <a class="btn btn-secondary" href="{{ $events->nextPageUrl() }}" rel="next">&raquo;</a>
                            @else
                                <button class="btn btn-secondary disabled">&raquo;</button>
                            @endif
                        </div>
                    </div>

                    <ul class="pagination">
                        @foreach ($events->links()->elements[0] as $page => $url)
                            @if ($page == $events->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </div> --}}
            </div>
        @endsection


        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                const deleteButtons = document.querySelectorAll('.delete-confirm');

                deleteButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        const form = this.closest('form');
                        const title = this.closest('tr').querySelector('.title').innerText;
                        e.preventDefault();
                        Swal.fire({
                            title: "Hapus Event?",
                            text: "Apakah anda yakin akan menghapus event " + title + "?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Iya!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });


            var eventRows = document.querySelectorAll("#eventTableBody tr");

            document.getElementById('searchInput').addEventListener('input', function() {
                var searchText = this.value.toLowerCase();

                eventRows.forEach(function(row) {
                    var title = row.querySelector('.title').innerText.toLowerCase();

                    if (title.includes(searchText)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });
        </script>

        @if ($message = Session::get('success'))
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "{{ $message }}",
                });
            </script>
        @endif
        @if ($message = Session::get('failed'))
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Failed",
                    text: "{{ $message }}",
                });
            </script>
        @endif

</body>

</html>
