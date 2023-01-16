@extends('admin.template')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3>Update Portofolio</h3>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/masterPortofolio/{{$data->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$data->title}}" name="title" id="title" required>
                                        @error('title')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="link" class="form-label">Link Project</label>
                                        <input type="text" class="form-control @error('link') is-invalid @enderror" value="{{$data->link}}" name="link" id="link" required>
                                        @error('link')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="image">image</label>
                                        <input type="hidden" name="oldImage" value="{{$data->image}}">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                                        @error('image')
                                            <div class="invalid-feedback mb-3">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="body">body</label>
                                        <input id="body" type="hidden" value="{{$data->body}}" name="body" id="body">
                                        <trix-editor input="body" class="@error('body') is-invalid @enderror"></trix-editor>
                                        @error('body')
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
                                    <a href="/dashboard/masterPortofolio" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', () => {
            console.log(title.value);
            fetch('/dashboard/articles/checkSlug?title=' + title.value)
                .then((response) => response.json())
                // console.log(response);
                .then((data) => slug.value = data.slug)
        });


        document.addEventListener('trix-file-accept', (e) => {
            e.preventDefault();
        });
    </script>
@endsection