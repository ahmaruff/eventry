@extends('layout.mainlayout')

@section('header')
<div id="tentang-kami" class="position-relative overflow-hidden text-center text-light">
    <div style="position: absolute; z-index:-10">
        <img class="img-fluid overflow-hidden" src="/assets/img/tentang-kami-hero.webp" alt="">
    </div>
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4"><b>Tentang Kami</b></h1>
      <p class="lead p-auto">Platform <em>Event Planning</em> yang paling tahu keinginanmu!</p>
      <a class="btn btn-primary" href="#">Latest Event</a>
    </div>
</div>
@endsection

@section('content')
    <main class="container-fluid" style="min-height: 100vh">
        <div class="container mt-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-7">
                  <h1>Lebih dekat dengan audiensmu!</h1>
                  <p class="lead">Menjadi yang terdepan untuk menyuguhkan keseruan disetiap event kesukaanmu.</p>
                </div>
                <div class="col-md-5">
                  <img  class="img-fluid" src="/assets/img/stand-out.svg" alt="">
                </div>
            </div>
            <hr>
            <div class="row d-flex align-items-center">
                <div class="col-md-5">
                  <img class="img-fluid" src="/assets/img/appreciation.svg" alt="">
                </div>
                <div class="col-md-7">
                  <h1>Lebih sederhana, lebih cepat, lebih memuaskan!</h1>
                  <p class="lead">mendengar semua keluh kesah, mengolahnya agar senantiasa berkembang.</p>
                </div>
            </div>
            <hr>
            
        </div>
    </main>
@endsection