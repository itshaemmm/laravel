@extends('back.layout.template')
@section('title', 'List Category - Admin')
@section('content')
    {{-- body/content --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categories</h1>
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
            <table class="table table-striped table-bordered shadow-sm" style="border-collapse: separate; border-spacing: 0; border-radius: 10px;">
                <thead class="table-dark">
                    <tr>
                        <th style="border-top-left-radius: 10px;">No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th style="border-top-right-radius: 10px;">Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->slug }}</td>
                            <td>{{ $item->created_at }}</td>
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
        {{-- modal Create, Delete and Update --}}
        @include("back.category.create-modal")
        @include("back.category.update-modal")
        @include("back.category.delete-modal")
    </main>
@endsection