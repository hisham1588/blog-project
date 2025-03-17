@extends('admin.layout.master')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">socialLinks</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Links</li>
            </ol>

            <div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('add.link') }}" class="btn btn-success">Add Link</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#SN</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socialLinks as $serial => $socialLink)
                            <tr>
                                <th scope="row">{{ $serial + 1 }}</th>
                                <td>{{ $socialLink->name }}</td>
                                <td>
                                    <img height="50px" src="{{ asset('admin-assets/images/' . $socialLink->image) }}"
                                        alt="">
                                </td>
                                <td>{{ $socialLink->link }}</td>
                                <td>
                                    <a href="{{ route('edit.link', $socialLink->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete.link', $socialLink->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
