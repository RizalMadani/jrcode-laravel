@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Update Jadwal Kelas</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterJadwal/{id}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_kelas" class="form-label">Kelas</label>
                                        <select class="form-select @error('id_kelas') is-invalid @enderror" aria-label="Default select example" name="id_kelas" id="id_kelas">
                                                <option selected value="{{$data->id}}">{{$data->kelas->title}}</option>
                                          </select>
                                          @error('id_kelas')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="jadwal" class="form-label">Jadwal</label>
                                        <input type="date" class="form-control @error('jadwal') is-invalid @enderror" name="jadwal" id="jadwal" value="{{ $data->jadwal }}" required>
                                        @error('jadwal')
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
                                    <a href="/dashboard/masterJadwal" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection