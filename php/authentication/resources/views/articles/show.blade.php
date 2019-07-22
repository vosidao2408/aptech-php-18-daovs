@extends('layout.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-12">
    <small>Created_at: {{$article->created_at}}</small><br>
<small>Updated_at: {{$article->updated_at}}</small>
<h1>{{$article->title}}</h1>
<h4>{{$article->description}}</h4>
{!!$article->content!!}
<p class="text-muted d-flex justify-content-end">{{$article->view}} viewed</p>    
    </div>
</div>
</div>

@endsection