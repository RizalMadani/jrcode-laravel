@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-2 text-dark">Pengajuan Magang</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <span>{{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <strong>{{ session('success') }}</strong>
                        <div class="card">
                            <div class="card-header">Pengajuan Magang Belum dikonfirmasi</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Magang</th>
                                                <th>Nama Peserta</th>
                                                <th>Asal Sekolah/Universitas</th>
                                                <th>CV</th>
                                                <th>Portofolio</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $pengajuan)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $pengajuan->lowongan->judul_lowongan }}</td>
                                                    <td>{{ $pengajuan->peserta->nama }}</td>
                                                    <td>{{ $pengajuan->peserta->asal_univ }}</td>
                                                    <td><a href="{{ asset('storage/' . $pengajuan->cv) }}"
                                                            class="btn btn-link"><i class="fas fa-download"> Download CV</i>
                                                        </a></td>
                                                    <td><a href="{{ asset('storage/' . $pengajuan->portofolio) }}"
                                                            class="btn btn-link"><i class="fas fa-download"> Download
                                                                Portofolio</i>
                                                        </a></td>
                                                    <td>{{ $pengajuan->tanggal_pengajuan }}</td>
                                                    <td>
                                                        <div class="d-block">
                                                            <form class="d-inline"
                                                                action="/dashboard/pengajuanMagang/ubahStatus/{{ $pengajuan->id }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="1">
                                                                <button type="submit"
                                                                    class="btn btn-success">Terima</button>
                                                            </form>
                                                            <form class="d-inline"
                                                                action="/dashboard/pengajuanMagang/ubahStatus/{{ $pengajuan->id }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="2">
                                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
