@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Edit Kelas</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterKelas/{{$data->id}}" method="post">
                                    @csrf
                                    <input type="hidden" name="role" id="role" value="peserta">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Nama Kelas</label>
                                        <input type="text" class="form-control" value="{{$data->title}}" name="title" id="title" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </form>
                                <div>
                                    <a href="/dashboard/masterKelas" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection