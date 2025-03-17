@extends('admin.layout.master')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Your socialLink</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Create Your socialLink</li>
            </ol>

            <div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('view.link') }}" class="btn btn-success">back</a>
                </div>


                <div class="bg-white shadow rounded p-2 w-75 mx-auto">
                    <form action="{{ route('store.link') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                       
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" name="link" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-full">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </main>
@endsection
