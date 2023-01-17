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
                                                <th>Nama Peserta</th>
                                                <th>CV</th>
                                                <th>Portofolio</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_pengajuan as $pengajuan)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $pengajuan->peserta->nama }}</td>
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

                        <div class="card">
                            <div class="card-header">Pengajuan Magang Sudah dikonfirmasi</div>
                            <div class="card-body">
                                <h2 class="card-title">Pengajuan diterima</h2>
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Peserta</th>
                                                <th>CV</th>
                                                <th>Portofolio</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Tanggal diterima</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_diterima as $diterima)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $diterima->peserta->nama }}</td>
                                                    <td><a href="{{ asset('storage/' . $diterima->cv) }}"
                                                            class="btn btn-link"><i class="fas fa-download"> Download CV</i>
                                                        </a></td>
                                                    <td><a href="{{ asset('storage/' . $diterima->portofolio) }}"
                                                            class="btn btn-link"><i class="fas fa-download"> Download
                                                                Portofolio</i>
                                                        </a></td>
                                                    <td>{{ $diterima->tanggal_pengajuan }}</td>
                                                    <td>{{ $diterima->updated_at }}</td>
                                                    <td>
                                                        <span class="badge badge-success">diterima</span>
                                                        {{-- <div class="d-block">
                                                            <form class="d-inline"
                                                                action="/dashboard/pengajuanMagang/ubahStatus/{{ $diterima->id }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="1">
                                                                <button type="submit"
                                                                    class="btn btn-success">Terima</button>
                                                            </form>
                                                            <form class="d-inline"
                                                                action="/dashboard/pengajuanMagang/ubahStatus/{{ $diterima->id }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="2">
                                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                                            </form>
                                                        </div> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h2 class="card-title">Pengajuan ditolak</h2>
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Peserta</th>
                                                <th>CV</th>
                                                <th>Portofolio</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Tanggal ditolak</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_ditolak as $ditolak)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $ditolak->peserta->nama }}</td>
                                                    <td><a href="{{ asset('storage/' . $ditolak->cv) }}"
                                                            class="btn btn-link"><i class="fas fa-download"> Download CV</i>
                                                        </a></td>
                                                    <td><a href="{{ asset('storage/' . $ditolak->portofolio) }}"
                                                            class="btn btn-link"><i class="fas fa-download"> Download
                                                                Portofolio</i>
                                                        </a></td>
                                                    <td>{{ $ditolak->tanggal_pengajuan }}</td>
                                                    <td>{{ $ditolak->updated_at }}</td>
                                                    <td>
                                                        <span class="badge badge-danger">ditolak</span>
                                                        {{-- <div class="d-block">
                                                            <form class="d-inline"
                                                                action="/dashboard/pengajuanMagang/ubahStatus/{{ $ditolak->id }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="1">
                                                                <button type="submit"
                                                                    class="btn btn-success">Terima</button>
                                                            </form>
                                                            <form class="d-inline"
                                                                action="/dashboard/pengajuanMagang/ubahStatus/{{ $ditolak->id }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="2">
                                                                <button type="submit" class="btn btn-danger">Tolak</button>
                                                            </form>
                                                        </div> --}}
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
