@extends('layout.adminlayout')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <h1><i class="bi bi-tags">  Categories</i></h1>
        <a class="btn btn-outline-primary my-2" href="/admin/categories/create">Add new category</a>
        <hr>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Enabled</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Events</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                    @php
                        $counter = 0;
                    @endphp
                        <tr>
                            <td>{{ $cat->id }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>{{ $cat->slug }}</td>
                            <td>{{ $cat->enabled }}</td>
                            <td>{{ $cat->created_at }}</td>
                            <td>{{ $cat->updated_at }}</td>
                            <td>{{ $event_count[$counter] }}</td>
                            <td>
                                <a href="#" title="Edit"><i class="bi bi-pencil me-2"></i></a>
                                <a href="#" title="Delete"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection