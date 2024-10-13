<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header btn-custom-red text-white">Search</div>
        <div class="card-body">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search articles..."/>
                    <button class="btn btn-custom-red text-white" id="button-search" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header btn-custom-red text-white">Categories</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        @foreach ($categories as $item)
                            <span><a href="#!" class="btn btn-custom-red text-white mb-1">{{ $item->name }}</a></span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Side widget-->
    {{-- <div class="card mb-4 shadow-sm">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
            use, and feature the Bootstrap 5 card component!</div>
    </div> --}}
</div>
