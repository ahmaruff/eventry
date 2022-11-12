@extends('layout.adminlayout')

@section('title')
    Event
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <h1><i class="bi bi-calendar-event">  Event</i></h1>
        <a class="btn btn-outline-primary my-2" href="#">Add new event</a>
        <hr>
        <div class="container table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Img</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Published</th>
                        <th scope="col">Category Id</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $item)
                    @php
                        $counter = 0;
                    @endphp
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->img_path }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>{{ $item->published }}</td>
                            <td>{{ $item->cat_id }}</td>
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