@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Create new Apprenticeship {}lace</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterTempatMagang" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="kode_perusahaan" class="form-label">Kode Perusahaan</label>
                                        <input type="text"
                                            class="form-control @error('kode_perusahaan') is-invalid @enderror"
                                            name="kode_perusahaan" id="kode_perusahaan" required>
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
                                            name="nama_perusahaan" id="nama_perusahaan" required>
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
                                            name="logo_perusahaan" id="logo_perusahaan" required>
                                        @error('logo_perusahaan')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kota" class="form-label">Kota</label>
                                        <input type="text" class="form-control @error('kota') is-invalid @enderror"
                                            name="kota" id="kota" required>
                                        @error('kota')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" required></textarea>
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
                                            name="nomor_telepon" id="nomor_telepon" required>
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
                                            name="email_perusahaan" id="email_perusahaan" required>
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
@endsection
