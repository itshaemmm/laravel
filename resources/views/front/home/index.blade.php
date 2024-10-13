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
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4 shadow-sm">
                    <a href="{{ url('blog/p/'.$latest_post->slug) }}"><img class="card-img-top featured-img" src="{{ asset('storage/back/' . $latest_post->img) }}"
                            alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{ $latest_post->created_at->format('d-m-Y') }}</div>
                        <h2 class="card-title">{{ $latest_post->title }}</h2>
                        <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 200, '...') }}</p>
                        <a class="btn btn-custom-red text-white mb-2" href="{{ url('p/'.$latest_post->slug) }}">Read more →</a>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    @foreach ($articles as $item)
                        <div class="col-lg-6">
                            <!-- Blog post-->
                            <div class="card mb-4 shadow-sm">
                                <a href="{{ url('blog/p/'.$item->slug) }}"><img class="card-img-top post-img" src="{{ asset('storage/back/' . $item->img) }}"
                                        alt="..." /></a>
                                <div class="card-body card-height">
                                    <div class="small text-muted">
                                        {{ $item->created_at->format('d-m-Y') }}
                                        {{-- <a href="{{ url('category/'.$item->Category->slug) }}">{{ $item->Category->name }}</a> --}}
                                    </div>
                                    <h2 class="card-title h4">{{ Str::limit(strip_tags($item->title), 20, '..') }}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 195, '...') }}</p>
                                    <a class="btn btn-custom-red text-white mb-2" href="{{ url('blog/p/'.$item->slug) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="pagination justify-content-center my-4">
                    {{ $articles->onEachSide(0)->links() }}
                </div>
            </div>
            <!-- Side widgets-->
            @include('front.layout.side-widget')
        </div>
    </div>
@endsection
