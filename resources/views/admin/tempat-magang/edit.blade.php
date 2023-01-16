@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Update Tempat Magang</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterTempatMagang/{{ $data->id }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="kode_perusahaan" class="form-label">Kode Perusahaan</label>
                                        <input type="text"
                                            class="form-control @error('kode_perusahaan') is-invalid @enderror"
                                            name="kode_perusahaan" id="kode_perusahaan" value="{{ $data->kode_perusahaan }}"
                                            required>
                                        @error('kode_perusahaan')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                                        <input type="text"
                                            class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                            name="nama_perusahaan" id="nama_perusahaan" value="{{ $data->nama_perusahaan }}"
                                            required>
                                        @error('nama_perusahaan')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="logo_perusahaan" class="form-label">Logo Perusahaan</label>
                                        <input type="file"
                                            class="form-control @error('logo_perusahaan') is-invalid @enderror"
                                            name="logo_perusahaan" id="logo_perusahaan"
                                            value="{{ $data->logo_perusahaan }}">
                                        @error('logo_perusahaan')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kota" class="form-label">Kota</label>
                                        <input type="text" class="form-control @error('kota') is-invalid @enderror"
                                            name="kota" id="kota" value="{{ $data->kota }}" required>
                                        @error('kota')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" required>{{ $data->alamat }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                                        <input type="text"
                                            class="form-control @error('nomor_telepon') is-invalid @enderror"
                                            name="nomor_telepon" id="nomor_telepon" value="{{ $data->nomor_telepon }}"
                                            required>
                                        @error('nomor_telepon')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email_perusahaan" class="form-label">Email Perusahaan</label>
                                        <input type="email"
                                            class="form-control @error('email_perusahaan') is-invalid @enderror"
                                            name="email_perusahaan" id="email_perusahaan"
                                            value="{{ $data->email_perusahaan }}" required>
                                        @error('email_perusahaan')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </form>
                                <div>
                                    <a href="/dashboard/masterTempatMagang" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', () => {
            console.log(title.value);
            fetch('/dashboard/articles/checkSlug?title=' + title.value)
                .then((response) => response.json())
                // console.log(response);
                .then((data) => slug.value = data.slug)
        });


        document.addEventListener('trix-file-accept', (e) => {
            e.preventDefault();
        });
    </script>
@endsection
