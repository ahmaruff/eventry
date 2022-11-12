@extends('layout.adminlayout')

@section('title')
    Categories
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <h1><i class="bi bi-ticket-perforated">  Bookings</i></h1>
        {{-- <a class="btn btn-outline-primary my-2" href="/admin/categories/create">Add new category</a> --}}
        <hr>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Orded Number</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Enabled?</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Event id</th>
                        <th scope="col">User id</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $item)
                
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->order_number }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->total_price }}</td>
                            <td>{{ $item->enabled }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>{{ $item->event_id }}</td>
                            <td>{{ $item->user_id }}</td>
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