@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Create new Opening</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterLowongan" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="tempat_magang_id" value="{{ $tempatMagang->id }}">
                                    <div class="mb-3">
                                        <label for="judul_lowongan" class="form-label">Judul Lowongan</label>
                                        <input type="text"
                                            class="form-control @error('judul_lowongan') is-invalid @enderror"
                                            name="judul_lowongan" id="judul_lowongan" required>
                                        @error('judul_lowongan')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input id="deskripsi" type="hidden" name="deskripsi" id="deskripsi">
                                        <trix-editor input="deskripsi" class="@error('deskripsi') is-invalid @enderror">
                                        </trix-editor>
                                        @error('deskripsi')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col">
                                            <label for="tanggal_dibuka" class="form-label">Tanggal dibuka</label>
                                            <input type="date"
                                                class="form-control @error('tanggal_dibuka') is-invalid @enderror"
                                                name="tanggal_dibuka" id="tanggal_dibuka" required>
                                            @error('tanggal_dibuka')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="tanggal_ditutup" class="form-label">Tanggal ditutup</label>
                                            <input type="date"
                                                class="form-control @error('tanggal_ditutup') is-invalid @enderror"
                                                name="tanggal_ditutup" id="tanggal_ditutup" required>
                                            @error('tanggal_ditutup')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </form>
                                <div>
                                    <a href="/dashboard/masterLowongan/{{ $tempatMagang->id }}"
                                        class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
