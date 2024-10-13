@extends('front.layout.template')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom-red {
            background-color: #751514;
            border-color: #751514;
        }
        
        .btn-custom-red:hover {
            background-color: #6a1313; /* Warna lebih gelap saat hover */
            border-color: #6a1313;
        }
        </style>
@endpush
@section('content')
    <!-- Page content-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('blog/p/' . $article->slug) }}"><img class="card-img-top single-img"
                            src="{{ asset('storage/back/' . $article->img) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $article->created_at->format('d-m-Y') }}</div>
                        <h1 class="card-title">{{ $article->title }}</h1>
                        <p class="card-text">{!! $article->desc !!}</p>

                    </div>
                </div>

            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
