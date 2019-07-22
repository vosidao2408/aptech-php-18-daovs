@extends('layout.app')
@section('content')
<div class="container">
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
</div></div></div>

@endsection