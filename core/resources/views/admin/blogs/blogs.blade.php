@extends('admin.layout.master')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Blogs</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Blogs</li>
            </ol>

            <div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('add.blog') }}" class="btn btn-success">Add Blog</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#SN</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $serial=>$blog)
                            <tr>
                                <th scope="row">{{ $serial+1 }}</th>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    <img height="50px"
                                        src="{{ asset('admin-assets/images/' .  $blog->image) }}"
                                        alt="">
                                </td>
                                <td>{{ Str::limit($blog->dec, 50) }}</td>
                                <td>{{ $blog->cat }}</td>
                                <td>
                                    <a href="{{ route('edit.blog', $blog->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete.blog', $blog->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
