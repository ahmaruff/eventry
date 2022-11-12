@extends('layout.adminlayout')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <h1><i class="bi bi-people">  Users</i></h1>
        <a class="btn btn-outline-primary my-2" href="/admin/categories/create">Add new users</a>
        <hr>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Admin role</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->admin_role }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
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