@extends('peserta.template')
@section('content')
    @php
        use App\Models\Lowongan;
    @endphp

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-2 text-dark">Master Tempat Magang</h1>
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
                                                {{-- <th>Kode Perusahaan</th> --}}
                                                <th>Nama Perusahaan</th>
                                                <th>Logo Perusahaan</th>
                                                <th>Kota</th>
                                                <th>Alamat</th>
                                                <th>Nomor Telepon</th>
                                                <th>Email Perusahaan</th>
                                                <th>Jumlah Lowongan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    {{-- <td>{{ $item->kode_perusahaan }}</td> --}}
                                                    <td>{{ $item->nama_perusahaan }}</td>
                                                    <td><img src="{{ asset('storage/' . $item->logo_perusahaan) }}"
                                                            alt="" class="img-thumbnail" style="width: 300px;"></td>
                                                    <td>{{ $item->kota }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->nomor_telepon }}</td>
                                                    <td>{{ $item->email_perusahaan }}</td>

                                                    @php
                                                        $ct_lowongan = Lowongan::where([['tempat_magang_id', '=', $item->id], ['is_active', '=', 1]])
                                                            ->get()
                                                            ->count();
                                                    @endphp

                                                    <td>{{ $ct_lowongan . ' Lowongan tersedia' }}</td>
                                                    <td>
                                                        <a class="btn btn-primary"
                                                            href="/peserta/lowongan/{{ $item->id }}">
                                                            <i class="fas fa-file"></i> Lihat Lowongan
                                                        </a>
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
