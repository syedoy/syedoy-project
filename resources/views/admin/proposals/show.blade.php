@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detail Proposal</h1>
        <div class="row">
            <div class="col-md-4">
                <h4>Data Siswa</h4>
                <p><strong>Nama:</strong> {{ $proposal->siswa->nama }}</p>
                <p><strong>NIS:</strong> {{ $proposal->siswa->nis }}</p>
                <p><strong>Eskul:</strong> {{ $proposal->eskul->nama_eskul }}</p>
            </div>
            <div class="col-md-4">
                <h4>File Proposal</h4>
                <a href="{{ route('admin.proposals.download', $proposal->id) }}" class="btn btn-primary">Download File PDF</a>
            </div>
            <div class="col-md-4">
                <h4>Status Proposal</h4>
                <p><strong>Status:</strong> {{ $proposal->status }}</p>
                <p><strong>Revisi:</strong> {{ $proposal->revisi }}</p>
                <p><strong>Komentar Admin:</strong> {{ $proposal->komentar_admin }}</p>
            </div>
        </div>
        <h4>Deskripsi</h4>
        <p>{{ $proposal->deskripsi }}</p>
    </div>
@endsection
