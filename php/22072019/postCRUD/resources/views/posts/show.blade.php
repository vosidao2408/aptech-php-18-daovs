@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <small>
                <label for="">Created_At:</label> <span>{{$post->created_at}}</span> <br>
                <label for="">Updated_At:</label> <span>{{$post->updated_at}}</span>
                </small>
                <div>
                <form action="{{asset('posts/'.$post->slug.'/edit')}}" method="GET"> 
                          <button type="submit" class="btn btn-primary mx-1">Update</button>
                 </form>
                </div>
                </div>
              
               <div class="container">
                 <div class="row">
                   <div class="col-12">
                   <h1 class="text-center">{{$post->title}}</h1>
                   <h4>{{$post->description}}</h4>
                   <p>{!!$post->content!!}</p>
                   </div>
                 </div>
               </div>
        </div>
    </div>
</div>

@endsection