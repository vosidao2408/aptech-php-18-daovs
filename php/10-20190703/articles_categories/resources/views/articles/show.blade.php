@extends('articles.app')
@section('sidebar')
  <div class="d-flex justify-content-between">
  <small>
  <label for="">Created_At:</label> <span>{{$article->created_at}}</span> <br>
  <label for="">Updated_At:</label> <span>{{$article->updated_at}}</span>
  </small>
  <div>
  <form action="{{asset('articles/'.$article->slug.'/edit')}}" method="GET"> 
            <button type="submit" class="btn btn-primary mx-1">Update</button>
   </form>
  </div>
  </div>

  <div class="container">
    <div class="row my-3">
      <div class="col-12">
      <h1 class="text-center">{{$article->title}}</h1>
      <div class="row my-3">
      <div class="col-5">
      <img src="{{$article->image_path}}" alt="This is a picture" style="width:100%;height:100%;">
      </div>
      <div class="col-7">
      <h5 class="text-capitalize">{{$article->description}}</h5>
      </div>
      </div>
      <div class="row my-3">
        <div class="col-12">
        {!!$article->content!!}
        </div>
      </div>
      </div>
    </div>
  </div> 
  
  

  
@endsection
