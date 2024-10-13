<div class="modal fade" id="modalCreate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Anggota</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('anggota.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="nomor_anggota">Nomor Anggota</label>
                        <input type="text" name="nomor_anggota" id="nomor_anggota" class="form-control @error('nomor_anggota') is-invalid @enderror" value="{{ old('nomor_anggota') }}">
                        @error('nomor_anggota')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="angkatan_tbm">Angkatan TBM</label>
                        <input type="text" name="angkatan_tbm" id="angkatan_tbm"
                            class="form-control @error('angkatan_tbm') is-invalid @enderror"
                            value="{{ old('angkatan_tbm') }}">
                        @error('angkatan_tbm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" name="angkatan" id="angkatan"
                            class="form-control @error('angkatan') is-invalid @enderror" value="{{ old('angkatan') }}">
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan"
                            class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" name="nomor_hp" id="nomor_hp"
                            class="form-control @error('nomor_hp') is-invalid @enderror" value="{{ old('nomor_hp') }}">
                        @error('nomor_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="line">Line</label>
                        <input type="text" name="line" id="line"
                            class="form-control @error('line') is-invalid @enderror" value="{{ old('line') }}">
                        @error('line')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" id="instagram"
                            class="form-control @error('instagram') is-invalid @enderror"
                            value="{{ old('instagram') }}">
                        @error('instagram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook"
                            class="form-control @error('facebook') is-invalid @enderror" value="{{ old('facebook') }}">
                        @error('facebook')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
