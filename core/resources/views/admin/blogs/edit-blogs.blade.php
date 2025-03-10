@extends('admin.layout.master')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Your Blog</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Update Your Blog</li>
            </ol>

            <div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('view.blog') }}" class="btn btn-success">All Blogs</a>
                </div>


                <div class="bg-white shadow rounded p-2 w-75 mx-auto">
                    <form action="{{ route('update.blog',$blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{ $blog->title }}" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" value="{{ $blog->imag }}" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="dec" class="form-label">Description</label>
                            <textarea class="form-control" id="dec" name="dec" rows="4" required>{{ $blog->dec }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="cat" class="form-label">Category</label>
                            <input type="text"  value="{{ $blog->cat }}" class="form-control" id="cat" name="cat" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-full">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </main>
@endsection
