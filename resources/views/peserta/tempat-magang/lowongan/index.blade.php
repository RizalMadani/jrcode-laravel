@extends('peserta.template')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">



            <div class="container-fluid">

                <a class="btn btn-danger mb-2" href="{{ url()->previous() }}">Kembali</a>

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-2 text-dark">Lowongan Kerja {{ $tempatMagang->nama_perusahaan }}</h1>
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
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Lowongan</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal dibuka</th>
                                                <th>Tanggal ditutup</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->judul_lowongan }}</td>
                                                    <td>{!! $item->deskripsi !!}</td>
                                                    <td>{{ $item->tanggal_dibuka }}</td>
                                                    <td>{{ $item->tanggal_ditutup }}</td>
                                                    <td width=200>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="fas fa-pen"></i> Ajukan Magang
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
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

    <!-- Modal Pengajuan Magang -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengajuan magang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="">

                        <input type="text" id="id_peserta" value="{{ auth()->user()->id }}">
                        <input type="text" id="id_lowongan">


                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </div>
@endsection
