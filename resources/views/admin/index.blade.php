@extends('layout.adminlayout')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <h1 class="mb-3">Dashboard</h1>
        <div class="row text-center">
            {{-- card item --}}
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-body">
                      <h1 class="card-title">{{$events}}</h1>
                      <p class="card-subtitle">Events</p>
                      <br>
                      <a class="card-link btn btn-primary w-100" href="/admin/events">View all events</a>
                    </div>
                  </div>
            </div>
            {{-- card item --}}
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-secondary">
                    <div class="card-body">
                      <h1 class="card-title">{{$bookings}}</h1>
                      <p class="card-subtitle">Bookings</p>
                      <br>
                      <a class="card-link btn btn-secondary w-100" href="/admin/bookings">View all bookings</a>
                    </div>
                  </div>
            </div>
            {{-- card item --}}
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-success">
                    <div class="card-body">
                      <h1 class="card-title">{{$users}}</h1>
                      <p class="card-subtitle">Users</p>
                      <br>
                      <a class="card-link btn btn-success w-100" href="/admin/users">View all users</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection