@extends('layout.app')
@section('content')

    

<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-6 mt-3">    
<div class="card" style="height:100%;width:100%">
<div class="card-body">
<h2 class="card-title">{{$post->title}}</h2>
<p class="card-text">{{$post->description}}</p>
<div class="d-flex justify-content-end">
     <form action="{{asset('posts/'.$post->slug)}}" method="GET">
      <button type="submit" class="btn btn-success mx-1">Show</button>
     </form>
     <form action="{{asset('posts/'.$post->id)}}" method="POST">
     <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
      <button type="submit" class="btn btn-warning mx-1">Delete</button>
     </form>
     </div>
</div>
</div>
</div>
@endforeach
</div>
</div>

<div class="d-flex justify-content-center">{{$posts->links()}}</div>
@endsection