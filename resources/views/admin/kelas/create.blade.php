@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Create new Kelas</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterKelas" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Nama Kelas</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" required>
                                        @error('title')
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