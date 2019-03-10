@extends('layouts.app')

@section('title', 'Sneakers90s')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sneaker List</li>
  </ol>
</nav>
<h1>Sneakers List</h1>

    <div class="d-flex justify-content-center">
        {{ $sneakers->links() }}
    </div>

    @if(session('message'))
    <div class="alert alert-primary" role="alert">
            {{ session('message') }}
    </div>
    @endif

<div class="row">
    <div class="mr-lg4 mr-md2 mt4 col-12 col-lg-3 col-md-6">
    @forelse($sneakers as $sneaker)
    <div class="sneaker-card card mb-2">
        <div class="card-header">
            {{ $sneaker->name }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <img class="img-fluid" src="{{ $sneaker->cover }}" alt="">
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                    Brand Info
                </button>
                </div>
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Brand info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Brand: {{ $sneaker->brand->name }}
            URL: {{ $sneaker->brand->url }}
            Creation Date{{ $sneaker->brand->createDate }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Rechazar</button>
                <button type="button" class="btn btn-success">Aceptar</button>
            </div>
        </div>
    </div>
</div>

                <div class="col">
                    <h5 class="card-title">User: <a href="{{ route('mysneakers.index', $sneaker->user->slug) }}" title="{{ $sneaker->user->name }}'s book list">{{ $sneaker->user->name }}</a></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Brand: {{ $sneaker->brand->name }}</h6>
                    <a class="btn btn-primary"
                    data-toggle="collapse"
                     href="#descriptionCollapse" role="button" aria-expanded="false" aria-controls="descriptionCollapse">
                        Description
                    </a>
                    <p class="card-text"><div class="collapse" id="descriptionCollapse">{{ str_limit($sneaker->description, 300) }}</div></p>

                    @include('public.sneakers.partials.buttons')

                    <a href="/sneakers/{{ $sneaker->slug }}" class="btn btn-primary btn-sm mr-2 float-right">More Info</a>
                </div>
            </div>
      </div>
    </div>
  </div>
  </div>  

    @empty
      <p>There arent sneakers</p>
    @endforelse

    <div class="d-flex justify-content-center">
        {{ $sneakers->links() }}
    </div>
@endsection
