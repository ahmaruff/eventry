@extends('layout.mainlayout')

@section('title')
    Eventry    
@endsection

@section('nav-item')
<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/admin">Admin</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
</li>
@endsection

@section('content')
    <div class="container">
        <div class="container-fluid d-flex flex-wrap justify-content-center">
            @foreach ($events as $event)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ $event->img_path }}}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <a href="#" class="btn btn-primary">Go to Event!</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection