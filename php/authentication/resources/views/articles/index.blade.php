@extends('layout.app')
@section('stylesheets')
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
@endsection
@section('content')
<div class="container">
<div class="row">
<div class="col-12">
<div class="bd-example m-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($hotarticles as $hotarticle)
                    <div class="carousel-item
            @if ($loop->first)
                active
            @endif     
            ">
                        <img src="https://images.unsplash.com/photo-1563387852576-964bc31b73af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=782&q=80" class="rounded d-block w-100" style="height:300px" alt="...">
                        
                        <div class="carousel-caption">
                            <h4>{{$hotarticle->title}}</h4>
                            <p>{{$hotarticle->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev " href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
<div class="row">
    <div class="col-12">
    @foreach($articles as $article)
    <div class="card my-3">
  <div class="card-body">
  
    @foreach($article->categories as $category)
    <p class=" badge badge-success">{{$category->name}}</p>
    @endforeach
    <h2 class="card-title">{{$article->title}}</h2>
    <h4 class="card-subtitle mb-2 text-muted">{{$article->description}}</h4>
    <a href="{{asset('articles/'.$article->slug)}}" class="card-link">Continue Reading ...</a>
    <p class="text-muted d-flex justify-content-end">{{$article->view}} viewed</p>
    
  </div>
</div>
    @endforeach
    <div class="d-flex justify-content-center">{{$articles->links()}}</div>
    </div>
</div>
</div>
@endsection