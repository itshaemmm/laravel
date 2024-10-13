@push('css')
<style>
    body {
        padding-top: 60px; /* Sesuaikan dengan tinggi navbar */
    }
</style>
@endpush
<nav class="navbar navbar-expand-lg navbar-custom fixed-top" style="background-color: #751514;">
    <div class="container">
        <a class="navbar-brand" href="#!" style="color: white;">
            <img src="/img/logo navbar2.png" alt="TBMBG Blog" style="height: 40px; width: auto;" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ url('/.#home') }}" style="color: white;">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/.#about') }}" style="color: white;">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ url('/penyewaan') }}">Penyewaan Barang</a></li>
                        <li><a class="dropdown-item" href="{{ url('/bantuan_medis') }}">Bantuan Medis</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('/blog') }}" style="color: white;">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/.#event') }}" style="color: white;">Event</a></li>
            </ul>
        </div>
    </div>
</nav>
