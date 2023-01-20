@extends('peserta.template')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">



            <div class="container-fluid">

                <a class="btn btn-danger mb-2" href="{{ url()->previous() }}">Kembali</a>

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-2 text-dark">Lowongan Kerja</h1>
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

                        @error('cv')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span>{{ $message }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror

                        @error('porto')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span>{{ $message }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror

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
                                                        <button type="button" class="btn btn-primary pengajuan-magang"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            data-idlowongan="{{ $item->id }}">
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
                    <h5 class="modal-title" id="exampleModalLabel">Pengajuan Magang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/peserta/lowongan/pengajuan" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id_peserta" id="id_peserta" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="id_lowongan" id="id_lowongan">


                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Perhatian!</strong> file yang diupload harus berupa PDF dan maksimal file yaitu 2mb.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>



                        <div class="form-group">
                            <label for="">CV</label>
                            <div class="custom-file">
                                <input type="file" name="cv" class="custom-file-input" id="cv"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Portofolio</label>
                            <div class="custom-file">
                                <input type="file" name="porto" class="custom-file-input" id="porto"
                                    aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                <small id="emailHelp" class="form-text text-red"><i>*opsional</i></small>
                            </div>
                        </div>








                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

    <script>
        $(document).on("click", ".pengajuan-magang", function() {

            // alert("ok")
            var lowongan_id = $(this).data('idlowongan');
            $(".modal-body #id_lowongan").val(lowongan_id);
            // As pointed out in comments,
            // it is unnecessary to have to manually call the modal.
            // $('#addBookDialog').modal('show');
        });
    </script>
@endsection
