@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Edit Admin</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterAdmin/{{$data->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="role" id="role" value="peserta">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" value="{{$data->nama}}" name="nama" id="nama" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" value="{{$data->username}}" name="username" id="username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelamin" class="form-label">Jenis Kelamin</label>
                                        <select class="form-select @error('kelamin') is-invalid @enderror" aria-label="Default select example" name="kelamin" id="kelamin">
                                            @if ($data->kelamin === 'laki-laki')
                                                <option selected value="laki-laki">Laki - laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            @else
                                                <option value="laki-laki">Laki - laki</option>
                                                <option selected value="perempuan">Perempuan</option>
                                            @endif
                                          </select>
                                          @error('kelamin')
                                                <div class="invalid-feedback mb-3">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" value="{{$data->email}}" name="email" id="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telepon" class="form-label">No.Telepon</label>
                                        <input type="text" class="form-control" value="{{$data->no_telepon}}" name="no_telepon" id="no_telepon" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </form>
                                <div>
                                    <a href="/dashboard/masterAdmin" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection