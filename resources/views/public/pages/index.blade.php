@extends('layouts.app')

@section('title', 'About IBDB')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
<div class="jumbotron">
  <h1 class="display-4">Welcome to Sneakers90's</h1>
  <p class="lead">This is a simple webpage where you can buy sneakers.</p>
  <hr class="my-4">
  <p>We have all brands you can imagine.</p>
</div>
<h1>Página de inicio</h1>

<div class="embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FnQLeRtNXXY" allowfullscreen> </iframe>
</div>

<div id="carousel3" class="carousel slide w-100 m-auto" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel3" data-slide-to="1"></li>
        <li data-target="#carousel3" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid w-100" src="../resources/img/imagen1.jpg" alt="Primera imagen">
        </div>
        <div class="carousel-item">
            <img class="img-fluid w-100" src="../resources/img/imagen2.jpg" alt="Segunda imagen">
        </div>
        <div class="carousel-item">
            <img class="img-fluid w-100" src="../resources/img/imagen3.jpg" alt="Tercera imagen">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<h1>Popular Brands</h1>
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-6 col-lg-3">
                <div class="card" style="width: 18rem;">
  <img src="../resources/img/nike.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nike</h5>
    <p class="card-text">Nike shoes.</p>
   
  </div>
</div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="../resources/img/adidas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Adidas</h5>
    <p class="card-text">Adidas shoes.</p>
    
  </div>
</div>
        </div>
        <div class="col-sm-6 col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="../resources/img/puma.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Puma</h5>
    <p class="card-text">Puma shoes</p>
    
  </div>
</div>    
         </div>
        <div class="col-sm-6 col-lg-3">
        <div class="card" style="width: 18rem;">
  <img src="../resources/img/puma.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Puma</h5>
    <p class="card-text">Puma shoes.</p>
    
  </div>
</div>     
        </div>
</div></div>



@endsection



@push('estilos')
<link href="{{ mix('css/iw/index.css') }}" rel="stylesheet">
@endpush
