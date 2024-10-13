@extends('back.layout.template')
@section('title', 'List Anggota - Admin')
@section('content')
    {{-- body/content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Database Anggota</h1>
        </div>

        <div class="mt-3">
            <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>
            <div class="my-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="md-3">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
            </div>
            <div class="table-responsive"> <!-- Tambahkan div ini untuk responsivitas -->
                <table class="table table-striped table-bordered shadow-sm" style="border-collapse: separate; border-spacing: 0; border-radius: 10px;">
                    <thead class="table-dark">
                        <tr>
                            <th style="border-top-left-radius: 10px;">No</th>
                            <th>Nomor Anggota</th>
                            <th>Angkatan TBM</th>
                            <th>Angkatan</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Nomor HP</th>
                            <th>Line</th>
                            <th>Instagram</th>
                            <th>Facebook</th>
                            <th>Alamat</th>
                            <th style="border-top-right-radius: 10px;">Function</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggota as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_anggota }}</td>
                                <td>{{ $item->angkatan_tbm }}</td>
                                <td>{{ $item->angkatan }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->nomor_hp }}</td>
                                <td>{{ $item->line }}</td>
                                <td>{{ $item->instagram }}</td>
                                <td>{{ $item->facebook }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#modalUpdate{{ $item->id }}">Edit</button>
                                        <button class="btn btn-danger mb-2" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $item->id }}">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- modal Create, Delete and Update --}}
        @include("back.database.create-modal")
        @include("back.database.update-modal")
        @include("back.database.delete-modal")
    </main>
@endsection
