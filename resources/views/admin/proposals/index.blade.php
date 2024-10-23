@extends('admin.layouts.main')
@section('navProposals', 'active')

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
            <h1>Data Proposals</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">Proposals</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <div class="table-wrapper" style="overflow-x: auto;">
                            <table class="table table-striped" style=" table-layout: fixed;">
                                <thead>
                                    <tr>
                                        <th style="width: 5px;">No</th>
                                        <th style="width: 60px;">Judul</th>
                                        <th style="width: 70px;">Penanggung Jawab</th>
                                        <th style="width: 80px;">Eskul</th>
                                        <th style="width: 80px;">Status</th>
                                        <th style="width: 80px;">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
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
